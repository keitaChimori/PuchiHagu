<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Tentunagi extends Model
{
    use HasFactory,SoftDeletes;

    // tentunagisテーブルと紐付け
    protected $table = 'tentunagis';

    // 可変項目
    protected $fillable = ['child_id', 'tentunagi1', 'tentunagi2', 'tentunagi3', 'tentunagi4', 'tentunagi5', 'tentunagi6', 'tentunagi7', 'tentunagi8', 'tentunagi9', 'tentunagi10'];

    /**
     * 会員登録時、レコード一件挿入(会員登録)
     * 
     * @param $child_id
     * 
     * */ 
    public function createTentunagiData($child_id){
        return Tentunagi::create(['child_id' => $child_id]);
    }

    /**
     * child_idのTentunagiテーブルの値を全て取得(印刷ページ取得用)
     * 
     * @param $child_id
     * */
    public function fetchTentunagiDataByChildId($child_id)
    {
        return Tentunagi::where('child_id', $child_id)
            ->where('deleted_at', null)
            ->first();
    }

    /**
     * tentunagiテーブルにスタンプを押す処理
     * 
     * @param $request スタンプデータ
     * @param $now_date 現在時刻  
     * 
     * */
    public function stamp($request, $now_date)
    {
        return Tentunagi::where('child_id', $request['child_id'])
            ->update(['tentunagi' . $request['number'] => $now_date]);
    }

    /**
     * tentunagiテーブルにスタンプを消す処理
     * 
     * @param $request カテゴリー・number・child_id
     * 
     * */
    public function stampDelete($request)
    {
        return Tentunagi::where('child_id', $request['child_id'])
            ->update(['tentunagi' . $request['number'] => null]);
    }

    /**
     * スタンプ情報を取得
     * 
     * @param $child_id
     * 
     * */ 
    public function fetchStampData($child_id){
        return Tentunagi::where('child_id',$child_id)
                    ->where('deleted_at',null)
                    ->first();
    }
}
