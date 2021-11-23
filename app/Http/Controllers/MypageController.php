<?php

namespace App\Http\Controllers;

use App\Models\Child;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Models\Hiragana;
use App\Models\Suzi;
use App\Models\Unpitu;
use App\Models\Tentunagi;
use App\Models\Programming;
use Carbon\Carbon;

class MypageController extends Controller
{
    public function __construct(User $user,Child $child,Hiragana $hiragana,Suzi $suzi,Unpitu $unpitu,Tentunagi $tentunagi,Programming $programming)
    {
        $this->user = $user;
        $this->child = $child;
        $this->hiragana = $hiragana;
        $this->suzi = $suzi;
        $this->unpitu = $unpitu;
        $this->tentunagi = $tentunagi;
        $this->programming = $programming;
    }

    /**
     * マイページの表示
     * 
     * @return view
     * */
    public function showMypage()
    {
        // 子どもの情報取得
        $children_data = $this->child->fetchChildrenData(Auth::user()->id);
        
        return view('mypage.mypage',compact('children_data'));
    }

    /**
     * すたんぷちょうの表示
     * 
     * @param $number // 0(こども１) or 1(こども２)
     * @return view
     * */ 
    public function showStamp($number)
    {
        $user_id = Auth::user()->id;
        $children_data = $this->child->fetchChildrenData($user_id);

        // hiraganasテーブルからスタンプ情報を取得
        $hiragana = $this->hiragana->fetchStampData($children_data[$number]['id']);
        // suzisテーブルからスタンプ情報を取得
        $suzi = $this->suzi->fetchStampData($children_data[$number]['id']);
        // unpitusテーブルからスタンプ情報を取得
        $unpitu = $this->unpitu->fetchStampData($children_data[$number]['id']);
        // tentunagisテーブルからスタンプ情報を取得
        $tentunagi = $this->tentunagi->fetchStampData($children_data[$number]['id']);
        // programmingsテーブルからスタンプ情報を取得
        $programming = $this->programming->fetchStampData($children_data[$number]['id']);
        
        return view('mypage.stamp',compact('children_data','number','hiragana','suzi','unpitu','tentunagi','programming'));
    }

    /**
     * スタンプを押す処理
     * 
     * @param Request $request カテゴリー・number・child_id
     * @return view
     * */ 
    public function exeStamp(Request $request)
    {
        $request = $request->all(); // 値受け取り
        $category = $request['category']; // カテゴリー代入
        $now_date = Carbon::now();// 現在日時取得、代入
        // 保存
        if(!is_null($request)){
            if($this->$category->stamp($request,$now_date)){
                return $request;
            }else{
                abort(404);
            }
        }
        // $requestがnullの場合
        abort(404);
    }

    /**
     * スタンプを消す処理
     * 
     * @param Request $request カテゴリー・number・child_id
     * @return view
     * */ 
    public function exeStampDelete(Request $request)
    {
        $request = $request->all(); // 値受け取り
        $category = $request['category']; // カテゴリー代入
        // 保存
        if(!is_null($request)){
            if($this->$category->stampDelete($request)){
                return $request;
            }else{
                abort(404);
            }
        }
        // $requestがnullの場合
        abort(404);
    }

    /**
     * 会員情報変更(プロフィール)画面表示
     * 
     * @return view
     * */ 
    public function showProfile()
    {
        // 子ども１、子ども２の情報取得
        $children_data = $this->child->fetchChildrenData(Auth::id());
        return view('mypage.profile',compact('children_data'));
    }

    /**
     * パスワード変更画面表示
     * 
     * @return view
     * */ 
    public function showPasswordChange()
    {
        return view('mypage.password_change');
    }

    /**
     * パスワード変更完了画面表示
     * 
     * @return view
     * */
    public function showPasswordChangeFinished()
    {
        return view('mypage.password_change_finished');
    }

    /**
     * 退会確認画面表示
     * 
     * @return view
     * */ 
    public function showDelete()
    {
        return view('mypage.taikai');
    }

    // 以下印刷ページ

    /**
     * ひらがな印刷画面表示
     * 
     * @param $child_id
     * @return view
     * */
    public function showHiragana($child_id)
    {
        $hiragana = $this->hiragana->fetchHiraganaDataByChildId($child_id);// hiraganaテーブルの情報取得
        if(!is_null($hiragana)){
            return view('mypage_print.hiragana',compact('child_id','hiragana'));
        }
        abort(404);
    }

    /**
     * すうじ印刷画面表示
     * 
     * @param $child_id
     * @return view
     * */
    public function showSuzi($child_id)
    {
        $suzi = $this->suzi->fetchSuziDataByChildId($child_id); // suziテーブルの情報取得
        if(!is_null($suzi)){
            return view('mypage_print.suzi',compact('child_id','suzi'));
        }
        abort(404);
    }

    /**
     * うんぴつ印刷画面表示
     * 
     * @param $child_id
     * @return view
     * */
    public function showUnpitu($child_id)
    {
        $unpitu = $this->unpitu->fetchUnpituDataByChildId($child_id); // unpituテーブルの情報取得
        if(!is_null($unpitu)){
            return view('mypage_print.unpitu',compact('child_id','unpitu'));
        }
        abort(404);
    }

    /**
     * てんつなぎ印刷画面表示
     * 
     * @param $child_id
     * @return view
     * */
    public function showTentunagi($child_id)
    {
        $tentunagi = $this->tentunagi->fetchTentunagiDataByChildId($child_id); // tentunagiテーブルの情報取得
        if(!is_null($tentunagi)){
            return view('mypage_print.tentunagi',compact('child_id','tentunagi'));
        }
        abort(404);   
    }

    /**
     * プログラミング印刷画面表示
     * 
     * @param $child_id
     * @return view
     * */
    public function showProgramming($child_id)
    {
        $programming = $this->programming->fetchProgrammingDataByChildId($child_id); // programmingテーブルの情報取得
        if(!is_null($programming)){
            return view('mypage_print.programming',compact('child_id','programming'));
        }
        abort(404);  
    }
}
