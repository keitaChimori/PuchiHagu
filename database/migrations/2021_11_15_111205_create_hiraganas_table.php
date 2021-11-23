<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHiraganasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hiraganas', function (Blueprint $table) {
            $table->increments('id')->index();
            $table->integer('child_id')->index();
            $table->dateTime('hiragana1')->nullable()->comment('「あ」のスタンプ');
            $table->dateTime('hiragana2')->nullable()->comment('「い」のスタンプ');
            $table->dateTime('hiragana3')->nullable()->comment('「う」のスタンプ');
            $table->dateTime('hiragana4')->nullable()->comment('「え」のスタンプ');
            $table->dateTime('hiragana5')->nullable()->comment('「お」のスタンプ');
            $table->dateTime('hiragana6')->nullable()->comment('「か」のスタンプ');
            $table->dateTime('hiragana7')->nullable()->comment('「き」のスタンプ');
            $table->dateTime('hiragana8')->nullable()->comment('「く」のスタンプ');
            $table->dateTime('hiragana9')->nullable()->comment('「け」のスタンプ');
            $table->dateTime('hiragana10')->nullable()->comment('「こ」のスタンプ');
            $table->dateTime('hiragana11')->nullable()->comment('「さ」のスタンプ');
            $table->dateTime('hiragana12')->nullable()->comment('「し」のスタンプ');
            $table->dateTime('hiragana13')->nullable()->comment('「す」のスタンプ');
            $table->dateTime('hiragana14')->nullable()->comment('「せ」のスタンプ');
            $table->dateTime('hiragana15')->nullable()->comment('「そ」のスタンプ');
            $table->dateTime('hiragana16')->nullable()->comment('「た」のスタンプ');
            $table->dateTime('hiragana17')->nullable()->comment('「ち」のスタンプ');
            $table->dateTime('hiragana18')->nullable()->comment('「つ」のスタンプ');
            $table->dateTime('hiragana19')->nullable()->comment('「て」のスタンプ');
            $table->dateTime('hiragana20')->nullable()->comment('「と」のスタンプ');
            $table->dateTime('hiragana21')->nullable()->comment('「な」のスタンプ');
            $table->dateTime('hiragana22')->nullable()->comment('「に」のスタンプ');
            $table->dateTime('hiragana23')->nullable()->comment('「ぬ」のスタンプ');
            $table->dateTime('hiragana24')->nullable()->comment('「ね」のスタンプ');
            $table->dateTime('hiragana25')->nullable()->comment('「の」のスタンプ');
            $table->dateTime('hiragana26')->nullable()->comment('「は」のスタンプ');
            $table->dateTime('hiragana27')->nullable()->comment('「ひ」のスタンプ');
            $table->dateTime('hiragana28')->nullable()->comment('「ふ」のスタンプ');
            $table->dateTime('hiragana29')->nullable()->comment('「へ」のスタンプ');
            $table->dateTime('hiragana30')->nullable()->comment('「ほ」のスタンプ');
            $table->dateTime('hiragana31')->nullable()->comment('「ま」のスタンプ');
            $table->dateTime('hiragana32')->nullable()->comment('「み」のスタンプ');
            $table->dateTime('hiragana33')->nullable()->comment('「む」のスタンプ');
            $table->dateTime('hiragana34')->nullable()->comment('「め」のスタンプ');
            $table->dateTime('hiragana35')->nullable()->comment('「も」のスタンプ');
            $table->dateTime('hiragana36')->nullable()->comment('「や」のスタンプ');
            $table->dateTime('hiragana37')->nullable()->comment('「ゆ」のスタンプ');
            $table->dateTime('hiragana38')->nullable()->comment('「よ」のスタンプ');
            $table->dateTime('hiragana39')->nullable()->comment('「ら」のスタンプ');
            $table->dateTime('hiragana40')->nullable()->comment('「り」のスタンプ');
            $table->dateTime('hiragana41')->nullable()->comment('「る」のスタンプ');
            $table->dateTime('hiragana42')->nullable()->comment('「れ」のスタンプ');
            $table->dateTime('hiragana43')->nullable()->comment('「ろ」のスタンプ');
            $table->dateTime('hiragana44')->nullable()->comment('「わ」のスタンプ');
            $table->dateTime('hiragana45')->nullable()->comment('「を」のスタンプ');
            $table->dateTime('hiragana46')->nullable()->comment('「ん」のスタンプ');
            $table->dateTime('created_at')->useCurrent()->comment('登録日時');
            $table->dateTime('updated_at')->useCurrent()->comment('更新日時');
            $table->softDeletes('deleted_at')->nullable()->comment('削除日時');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('hiraganas');
    }
}
