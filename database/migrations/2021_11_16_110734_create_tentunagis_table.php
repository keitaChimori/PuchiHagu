<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTentunagisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tentunagis', function (Blueprint $table) {
            $table->increments('id')->index();
            $table->integer('child_id')->index();
            $table->dateTime('tentunagi1')->nullable()->comment('点つなぎ1');
            $table->dateTime('tentunagi2')->nullable()->comment('点つなぎ2');
            $table->dateTime('tentunagi3')->nullable()->comment('点つなぎ3');
            $table->dateTime('tentunagi4')->nullable()->comment('点つなぎ4');
            $table->dateTime('tentunagi5')->nullable()->comment('点つなぎ5');
            $table->dateTime('tentunagi6')->nullable()->comment('点つなぎ6');
            $table->dateTime('tentunagi7')->nullable()->comment('点つなぎ7');
            $table->dateTime('tentunagi8')->nullable()->comment('点つなぎ8');
            $table->dateTime('tentunagi9')->nullable()->comment('点つなぎ9');
            $table->dateTime('tentunagi10')->nullable()->comment('点つなぎ10');
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
        Schema::dropIfExists('tentunagis');
    }
}
