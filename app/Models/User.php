<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Auth;


class User extends Authenticatable
{
    use HasFactory, Notifiable, SoftDeletes;

    // usersテーブルと紐付け
    protected $table = 'users';

    // 可変項目
    protected $fillable = ['email','password','parent_name'];

    protected $hidden = [
        'password',
    ];

    // リレーションを定義
    public function children()
    {
        return $this->hasMany(Child::class);
    }

    /**
     * 会員登録(Signup)実行(会員登録)
     * 
     * @param $input_data
     * 
     * */ 
    public function createUser($input_data)
    {
        return User::create($input_data);
    }

    /**
     * メールアドレスからユーザーIDを取得(会員登録)
     * 
     * @param $email
     * @return id
     * */ 
    public function fetchUserIdByEmail($email)
    {
        return User::where('email',$email)->value('id');
    }

    /**
     * メールアドレスから会員情報を取得(ログイン)
     * 
     * @param $email
     * @return array
     * */ 
    public function getUserDatabyEmail($email)
    {
        return User::where('email',$email)
                    ->where('deleted_at',null)
                    ->first();
    }

    /**
     * メールアドレスからメールアドレスを取得(パスワードリセット)
     * 
     * @param $input_email
     * 
     * */
    public function fetchEmailByEmail($input_email)
    {
        return User::where('email',$input_email)
                    ->where('deleted_at',null)
                    ->first();
    }

    /**
     * パスワード更新(パスワードリセット)
     * 
     * @param $input_password
     * 
     * */
    public function updatePassword($input_password)
    {
        return User::where('email',$input_password['email'])
                    ->update(['password' => $input_password['password']]);
    }

    // 以下ログイン後の処理

    /**
     * 会員情報変更処理(会員情報変更)
     * 
     * @param $input_data
     * 
     * */ 
    public function updateUserData($input_data)
    {
        return User::findOrFail(Auth::user()->id)
                    ->fill([
                        'email' => $input_data['email'],
                        'parent_name' => $input_data['user_name'],
                    ])->save();
    }
    
    /**
     * パスワード変更処理(パスワード変更)
     * 
     * @param $input_password
     * @return bool
     * */ 
    public function changePassword($input_password)
    {
        return User::findOrFail(Auth::user()->id)
                    ->fill([
                        'password' => $input_password,
                    ])->save();
    }

    /**
     * $idのユーザーデータを論理削除(退会処理)
     * 
     * @param $id
     * @return bool
     * */ 
    public function softdeleteUserData($id)
    {
        if(User::find($id)->delete()){
            return true;
        }
        return false;
    }

}
