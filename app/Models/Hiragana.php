<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Hiragana extends Model
{
    use HasFactory,SoftDeletes;

    // hiraganasテーブルと紐付け
    protected $table = 'hiraganas';

    // 可変項目
    protected $fillable = ['child_id','hiragana1','hiragana2','hiragana3','hiragana4','hiragana5','hiragana6','hiragana7','hiragana8','hiragana9','hiragana10','hiragana11','hiragana12','hiragana13','hiragana14','hiragana15','hiragana16','hiragana17','hiragana18','hiragana19','hiragana20','hiragana21','hiragana22','hiragana23','hiragana24','hiragana25','hiragana26','hiragana27','hiragana28','hiragana29','hiragana30','hiragana31','hiragana32','hiragana33','hiragana34','hiragana35','hiragana36','hiragana37','hiragana38','hiragana39','hiragana40','hiragana41','hiragana42','hiragana43','hiragana44','hiragana45','hiragana46'];

    /**
     * 会員登録時、レコード一件挿入(会員登録)
     * 
     * @param $child_id
     * 
     * */ 
    public function createHiraganaData($child_id){
        return Hiragana::create(['child_id' => $child_id]);
    }

    /**
     * child_idのhiraganaテーブルの値を全て取得(ひらがな印刷ページ取得用)
     * 
     * @param $child_id
     * 
     * */ 
    public function fetchHiraganaDataByChildId($child_id){
        return Hiragana::where('child_id',$child_id)
                        ->where('deleted_at',null)
                        ->first();
    }

    /**
     * hiraganaテーブルにスタンプを押す処理
     * 
     * @param $request スタンプデータ
     * @param $now_date 現在時刻  
     * 
     * */ 
    public function stamp($request,$now_date){
        return Hiragana::where('child_id',$request['child_id'])
                    ->update(['hiragana'.$request['number'] => $now_date]);
    }

    /**
     * hiraganaテーブルにスタンプを消す処理
     * 
     * @param $request カテゴリー・number・child_id
     * 
     * */ 
    public function stampDelete($request){
        return Hiragana::where('child_id',$request['child_id'])
                    ->update(['hiragana'.$request['number'] => null]);
    }

    /**
     * スタンプ情報を取得
     * 
     * @param $child_id
     * 
     * */ 
    public function fetchStampData($child_id){
        return Hiragana::where('child_id',$child_id)
                    ->where('deleted_at',null)
                    ->first();
    }


}
