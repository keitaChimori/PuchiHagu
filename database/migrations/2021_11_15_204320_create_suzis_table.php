<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSuzisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('suzis', function (Blueprint $table) {
            $table->increments('id')->index();
            $table->integer('child_id')->index();
            $table->dateTime('suzi0')->nullable()->comment('数字0');
            $table->dateTime('suzi1')->nullable()->comment('数字1');
            $table->dateTime('suzi2')->nullable()->comment('数字2');
            $table->dateTime('suzi3')->nullable()->comment('数字3');
            $table->dateTime('suzi4')->nullable()->comment('数字4');
            $table->dateTime('suzi5')->nullable()->comment('数字5');
            $table->dateTime('suzi6')->nullable()->comment('数字6');
            $table->dateTime('suzi7')->nullable()->comment('数字7');
            $table->dateTime('suzi8')->nullable()->comment('数字8');
            $table->dateTime('suzi9')->nullable()->comment('数字9');
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
        Schema::dropIfExists('suzis');
    }
}
