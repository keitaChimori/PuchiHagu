<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Programming extends Model
{
    use HasFactory,SoftDeletes;

    // programmingsテーブルと紐付け
    protected $table = 'programmings';

    // 可変項目
    protected $fillable = ['child_id', 'programming1', 'programming2', 'programming3', 'programming4', 'programming5', 'programming6', 'programming7', 'programming8', 'programming9', 'programming10', 'programming11', 'programming12', 'programming13', 'programming14', 'programming15', 'programming16', 'programming17', 'programming18', 'programming19', 'programming20'];

    /**
     * 会員登録時、レコード一件挿入(会員登録)
     * 
     * @param $child_id
     * 
     * */ 
    public function createProgrammingData($child_id){
        return Programming::create(['child_id' => $child_id]);
    }

    /**
     * child_idのProgrammingテーブルの値を全て取得(印刷ページ取得用)
     * 
     * @param $child_id
     * */
    public function fetchProgrammingDataByChildId($child_id)
    {
        return Programming::where('child_id', $child_id)
            ->where('deleted_at', null)
            ->first();
    }

    /**
     * programmingテーブルにスタンプを押す処理
     * 
     * @param $request スタンプデータ
     * @param $now_date 現在時刻  
     * 
     * */
    public function stamp($request, $now_date)
    {
        return Programming::where('child_id', $request['child_id'])
            ->update(['programming' . $request['number'] => $now_date]);
    }

    /**
     * programmingテーブルにスタンプを消す処理
     * 
     * @param $request カテゴリー・number・child_id
     * 
     * */
    public function stampDelete($request)
    {
        return Programming::where('child_id', $request['child_id'])
            ->update(['programming' . $request['number'] => null]);
    }

    /**
     * スタンプ情報を取得
     * 
     * @param $child_id
     * 
     * */ 
    public function fetchStampData($child_id){
        return Programming::where('child_id',$child_id)
                    ->where('deleted_at',null)
                    ->first();
    }

}
