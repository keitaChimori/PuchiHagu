<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Child;
use App\Http\Requests\SignupRequest;
use App\Http\Requests\LoginRequest;
use App\Http\Requests\ProfileRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\PasswordchangeRequest;
use Illuminate\Support\Facades\DB;
use Throwable;
use Illuminate\Support\Facades\Mail;
use App\Mail\Signupmail;
use App\Mail\PasswordChangeMail;
use App\Mail\PasswordResetMail;
use Illuminate\Support\Facades\Crypt;
use App\Http\Requests\PasswordResetRequest;
use App\Models\Hiragana;
use App\Models\Suzi;
use App\Models\Unpitu;
use App\Models\Tentunagi;
use App\Models\Programming;

class UserController extends Controller
{

    public function __construct(User $user, Child $child,Hiragana $hiragana,Suzi $suzi,Unpitu $unpitu,Tentunagi $tentunagi,Programming $programming)
    {
        $this->user = $user; //userモデル(usersテーブル)
        $this->child = $child; //childモデル(childrenテーブル)
        $this->hiragana = $hiragana;
        $this->suzi = $suzi;
        $this->unpitu = $unpitu;
        $this->tentunagi = $tentunagi;
        $this->programming = $programming;
    }

    /**
     * 会員登録実行
     * 
     * @param SignupRequest $request
     * 
     * */
    public function exeSignup(SignupRequest $request)
    {
        // メールアドレス受け取り
        $input_data = $request->only('email', 'password');
        $email = $input_data['email'];
        $password = $input_data['password'];
        // パスワードハッシュ化
        $input_data['password'] = Hash::make($input_data['password']);

        // 会員登録&childrenテーブルにレコード2件挿入
        DB::beginTransaction();
        try {
            // 会員登録処理
            $this->user->createUser($input_data);

            // メールアドレスからユーザーIDを取得
            $user_id = $this->user->fetchUserIdByEmail($input_data['email']);
            // 会員登録時にchildrenテーブルにレコード2件挿入
            $this->child->createChildData($user_id);
            $this->child->createChildData($user_id);
            // childrenテーブルのIDを取得
            $child_id = $this->child->fetchChildIdByUserID($user_id);
            // 各スタンプテーブルにレコード2件挿入
            $this->hiragana->createHiraganaData($child_id[0]['id']);
            $this->hiragana->createHiraganaData($child_id[1]['id']);
            $this->suzi->createSuziData($child_id[0]['id']);
            $this->suzi->createSuziData($child_id[1]['id']);
            $this->unpitu->createUnpituData($child_id[0]['id']);
            $this->unpitu->createUnpituData($child_id[1]['id']);
            $this->tentunagi->createTentunagiData($child_id[0]['id']);
            $this->tentunagi->createTentunagiData($child_id[1]['id']);
            $this->programming->createProgrammingData($child_id[0]['id']);
            $this->programming->createProgrammingData($child_id[1]['id']);

            DB::commit();

            // メール送信
            Mail::to($email)->send(new Signupmail($email,$password));
            
            // ログイン画面へリダイレクト
            return redirect()->route('showLogin')->with('message', '登録が完了しました。登録したメールアドレスとパスワードを入力して、ログインしてください。');
        } catch (Throwable $e) {
            // 処理失敗
            DB::rollBack();
            return redirect()->route('showSignup')->with('message', 'エラー:登録に失敗しました。');
            abort(500);
        }
    }

    /**
     * ログイン実行
     * 
     * @param LoginRequest $request
     * 
     * */
    public function exeLogin(LoginRequest $request)
    {
        $input_data = $request->only('email', 'password');

        // emailからユーザーデータを取得
        $user_data = $this->user->getUserDatabyEmail($input_data['email']);

        if (!is_null($user_data)) {
            // ログイン判定
            if (Auth::attempt($input_data)) {
                //セッション再生成
                $request->session()->regenerate();
                // セッション発行
                $request->session()->put('user_id', $user_data['id']);
                return redirect()->route('showMypage');
            }
            return back()->with('message', 'メールアドレスまたはパスワードが違います。');
        }
        return back()->with('message', 'メールアドレスまたはパスワードが違います。');
    }

    /**
     * パスワードリセット用メール送信
     * 
     * @param Request $request
     * 
     * */
    public function exePasswordResetMail(Request $request)
    {
        $input_email = $request->only('email');
        
        // 入力されたメールアドレスをチェック
        if($this->user->fetchEmailByEmail($input_email)){
            // チェックOKの場合、メール送信
            // メールアドレスを暗号化
            $encryption_email = Crypt::encrypt($input_email);

            Mail::to($input_email)->send(new PasswordResetMail($encryption_email));
    
            return redirect()->route('showLogin')->with('message','入力いただいたパスワード再設定メールを送信しました');
        }
        // チェックNGの場合、エラー文表示
        return redirect()->route('showPasswordReset')->with('message','入力されたメールアドレスは登録されていません');
    }

    /**
     * パスワードリセットフォーム表示
     * 
     * @param Request $request
     * 
     * */
    public function showPasswordResetForm(Request $request)
    {
        $encryption_email = $request->input('email');
        if(!is_null($encryption_email)){
            // 暗号化されたメールアドレスを復号
            $email = Crypt::decrypt($encryption_email);
            if($this->user->fetchEmailByEmail($email)){
                // 復号されたメールアドレスがDBと一致 => パスワード再設定フォームへ
                return view('auth.password_resetform',['email' => $email['email']]);
            }
            // 復号されたメールアドレスがDBと不一致 => ホームへ
            return redirect()->route('showTop');
        }
        return redirect()->route('showTop');
    }

    /**
     * パスワードリセット実行処理
     * 
     * @param PasswordResetRequest $request
     * 
     * */
    public function exePasswordReset(PasswordResetRequest $request)
    {
        $input_password = $request->only('password','password_confirmation','email');
        
        if(!is_null($input_password)){
            // パスワードハッシュ化
            $input_password['password'] = Hash::make($input_password['password']);
            if($this->user->updatePassword($input_password)){
                // パスワード更新成功
                return redirect()->route('showPasswordResetFinished');
            }
            // パスワード更新失敗
            return redirect()->route('showLogin')->with('message','エラー:パスワードの変更に失敗しました');
        }
        return redirect()->route('showLogin')->with('message','エラー:パスワードの変更に失敗しました');
    }

    //*******************************************************************************
    //  以下ログイン後の処理
    //*******************************************************************************

    /**
     * 会員情報(プロフィール)変更処理
     * 
     * @param ProfileRequest $request
     * 
     * */
    public function exeProfile(ProfileRequest $request)
    {
        $input_data = $request->all();
        
        if (!is_null($input_data)) {
            DB::beginTransaction();
            try {
                // 会員情報更新
                $this->user->updateUserData($input_data);

                // user_idが一致するchildrenテーブルのレコード２つのIDを取得 
                $child_id = $this->child->fetchChildId(Auth::id());

                // お子さま１人目の情報を更新
                $this->child->updateChildData1($input_data, $child_id[0]['id']);
                // お子さま2人目の情報を更新
                $this->child->updateChildData2($input_data, $child_id[1]['id']);

                DB::commit();

                return redirect()->route('showMypage')->with('message','会員情報を変更しました。');
            } catch (Throwable $e) {
                DB::rollBack();
                // 更新失敗
                return back()->with('message', 'エラー:');
            }
        }
    }

    /**
     * パスワード変更処理実行
     * 
     * @param PasswordchangeRequest $request
     * 
     * */
    public function exePasswordChange(PasswordchangeRequest $request)
    {
        $input_password = $request->only('oldpassword', 'password', 'password_confirmation');
        $new_password = $input_password['password'];
        $user_data = Auth::user();

        // 新しいパスワードをDBに登録
        if (!is_null($input_password)) {
            // パスワードハッシュ化
            $input_password['password'] = Hash::make($input_password['password']);
            if ($this->user->changePassword($input_password['password'])) {
                // パスワード変更完了メール送信
                Mail::to($user_data['email'])->send(new PasswordChangeMail($new_password));
                // 変更成功
                return redirect()->route('showPasswordChangeFinished');
            }
            // パスワード変更失敗
            return redirect()->route('showPasswordChange')->with('message', 'エラー：パスワード変更処理に失敗しました');
        }
        // パスワード変更失敗
        return redirect()->route('showPasswordChange')->with('message', 'エラー：パスワード変更処理に失敗しました');
    }

    /**
     * 退会処理実行
     * 
     * @param $id
     * */
    public function exeDelete($id)
    {
        // $idのユーザーを論理削除
        DB::beginTransaction();
        try {
            // userテーブル論理削除
            $this->user->softdeleteUserData($id);
            // childrenテーブル論理削除
            $this->child->softdeleteChildData($id);
            Auth::logout();
            DB::commit();
            // 論理削除成功
            return redirect()->route('showDeleted');
        } catch (Throwable $e) {
            DB::rollBack();
            // 論理削除失敗
            return redirect()->route('showDelete')->with('message', '退会処理に失敗しました。');
        }
    }

    /**
     * ログアウト実行
     * 
     * @param Request $request
     * */
    public function exeLogout(Request $request)
    {
        Auth::logout();
        // セッション破棄
        $request->session()->invalidate();
        // セッション再生成
        $request->session()->regenerateToken();

        return redirect()->route('showTop');
    }
}
