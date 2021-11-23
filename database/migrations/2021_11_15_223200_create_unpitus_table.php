<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUnpitusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('unpitus', function (Blueprint $table) {
            $table->increments('id')->index();
            $table->integer('child_id')->index();
            $table->dateTime('unpitu1')->nullable()->comment('運筆1');
            $table->dateTime('unpitu2')->nullable()->comment('運筆2');
            $table->dateTime('unpitu3')->nullable()->comment('運筆3');
            $table->dateTime('unpitu4')->nullable()->comment('運筆4');
            $table->dateTime('unpitu5')->nullable()->comment('運筆5');
            $table->dateTime('unpitu6')->nullable()->comment('運筆6');
            $table->dateTime('unpitu7')->nullable()->comment('運筆7');
            $table->dateTime('unpitu8')->nullable()->comment('運筆8');
            $table->dateTime('unpitu9')->nullable()->comment('運筆9');
            $table->dateTime('unpitu10')->nullable()->comment('運筆10');
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
        Schema::dropIfExists('unpitus');
    }
}
