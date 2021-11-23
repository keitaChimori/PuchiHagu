<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Unpitu extends Model
{
    use HasFactory, SoftDeletes;

    // hiraganasテーブルと紐付け
    protected $table = 'unpitus';

    // 可変項目
    protected $fillable = ['child_id', 'unpitu1', 'unpitu2', 'unpitu3', 'unpitu4', 'unpitu5', 'unpitu6', 'unpitu7', 'unpitu8', 'unpitu9', 'unpitu10'];

    /**
     * 会員登録時、レコード一件挿入(会員登録)
     * 
     * @param $child_id
     * 
     * */ 
    public function createUnpituData($child_id){
        return Unpitu::create(['child_id' => $child_id]);
    }

    /**
     * child_idのunpituテーブルの値を全て取得(印刷ページ取得用)
     * 
     * @param $child_id
     * */
    public function fetchUnpituDataByChildId($child_id)
    {
        return Unpitu::where('child_id', $child_id)
            ->where('deleted_at', null)
            ->first();
    }

    /**
     * Unpituテーブルにスタンプを押す処理
     * 
     * @param $request スタンプデータ
     * @param $now_date 現在時刻  
     * 
     * */
    public function stamp($request, $now_date)
    {
        return Unpitu::where('child_id', $request['child_id'])
            ->update(['unpitu' . $request['number'] => $now_date]);
    }

    /**
     * Unpituテーブルにスタンプを消す処理
     * 
     * @param $request カテゴリー・number・child_id
     * 
     * */
    public function stampDelete($request)
    {
        return Unpitu::where('child_id', $request['child_id'])
            ->update(['unpitu' . $request['number'] => null]);
    }

    /**
     * スタンプ情報を取得
     * 
     * @param $child_id
     * 
     * */ 
    public function fetchStampData($child_id){
        return Unpitu::where('child_id',$child_id)
                    ->where('deleted_at',null)
                    ->first();
    }
}
