<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Auth;

class Child extends Model
{
    use HasFactory, SoftDeletes;

    // childrenテーブルと紐付け
    protected $table = 'children';

    // 可変項目
    protected $fillable = ['user_id','child_name','birthyear','birthmonth','birthday'];

    // リレーションを定義
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * 会員登録時、子ども1のレコード一件挿入(会員登録)
     * 
     * @param $user_id
     * */ 
    public function createChildData($user_id){
        return Child::create(['user_id' => $user_id]);
    }

    /**
     * 会員登録時、各印刷テーブルに挿入するchild_idを取得(会員登録)
     * 
     * @param $user_id
     * */ 
    public function fetchChildIdByUserID($user_id){
        return Child::where('user_id',$user_id)
                    ->where('deleted_at',null)
                    ->get();
    }



    /**
     * 会員情報変更画面に表示するchildrenテーブルのデータ取得(会員情報変更)
     * スタンプ帳に表示するchildrenテーブルのデータ取得(スタンプ帳表示)
     * 
     * @param $user_id
     * @return array
     * */ 
    public function fetchChildrenData($user_id){
        return Child::where('user_id',$user_id)
                    ->get();
    }   

    /**
     * 会員情報変更のためのchildテーブルのID取得(会員情報変更)
     * 
     * @param $user_id
     * 
     * */ 
    public function fetchChildId($user_id)
    {
        return Child::where('user_id',$user_id)
                    ->where('deleted_at',null)
                    ->get('id');
    }

    /**
     * 会員情報変更処理(会員情報変更)
     * 
     * @param $input_data,$id
     * 
     * */ 
    public function updateChildData1($input_data,$id)
    {
        return Child::where('user_id',Auth::id())   
                    ->find($id)
                    ->fill([
                        'child_name' => $input_data['childname1'],
                        'birthyear' => $input_data['year1'],
                        'birthmonth' => $input_data['month1'],
                        'birthday' => $input_data['day1'],
                    ])->save();
    }

    /**
     * 会員情報変更処理(会員情報変更)
     * 
     * @param $input_data,$id
     * 
     * */ 
    public function updateChildData2($input_data,$id)
    {
        return Child::where('user_id',Auth::id())   
                    ->find($id)
                    ->fill([
                        'child_name' => $input_data['childname2'],
                        'birthyear' => $input_data['year2'],
                        'birthmonth' => $input_data['month2'],
                        'birthday' => $input_data['day2'],
                    ])->save();
    }

    /**
     * user_idが$idのデータを論理削除(退会処理)
     * 
     * @param $id
     * @return bool
     * */ 
    public function softdeleteChildData($id)
    {
        if(Child::where('user_id',$id)->delete()){
            return true;
        }
        return false;
    }

}


