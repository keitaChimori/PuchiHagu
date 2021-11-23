<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Suzi extends Model
{
    use HasFactory,SoftDeletes;

    // hiraganasテーブルと紐付け
    protected $table = 'suzis';

    // 可変項目
    protected $fillable = ['child_id','suzi0','suzi1','suzi2','suzi3','suzi4','suzi5','suzi6','suzi7','suzi8','suzi9'];

    /**
     * 会員登録時、レコード一件挿入(会員登録)
     * 
     * @param $child_id
     * 
     * */ 
    public function createSuziData($child_id){
        return Suzi::create(['child_id' => $child_id]);
    }

    /**
     * child_idのsuziテーブルの値を全て取得(ひらがな印刷ページ取得用)
     * 
     * @param $child_id
     * 
     * */ 
    public function fetchSuziDataByChildId($child_id){
        return Suzi::where('child_id',$child_id)
                        ->where('deleted_at',null)
                        ->first();
    }

    /**
     * suziテーブルにスタンプを押す処理
     * 
     * @param $request スタンプデータ
     * @param $now_date 現在時刻  
     * 
     * */ 
    public function stamp($request,$now_date){
        return Suzi::where('child_id',$request['child_id'])
                    ->update(['suzi'.$request['number'] => $now_date]);
    }

    /**
     * suziテーブルにスタンプを消す処理
     * 
     * @param $request カテゴリー・number・child_id
     * 
     * */ 
    public function stampDelete($request){
        return Suzi::where('child_id',$request['child_id'])
                    ->update(['suzi'.$request['number'] => null]);
    }

    /**
     * スタンプ情報を取得
     * 
     * @param $child_id
     * 
     * */ 
    public function fetchStampData($child_id){
        return Suzi::where('child_id',$child_id)
                    ->where('deleted_at',null)
                    ->first();
    }

}
