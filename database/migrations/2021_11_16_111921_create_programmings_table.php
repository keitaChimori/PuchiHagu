<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProgrammingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('programmings', function (Blueprint $table) {
            $table->increments('id')->index();
            $table->integer('child_id')->index();
            $table->dateTime('programming1')->nullable()->comment('プログラミング1');
            $table->dateTime('programming2')->nullable()->comment('プログラミング2');
            $table->dateTime('programming3')->nullable()->comment('プログラミング3');
            $table->dateTime('programming4')->nullable()->comment('プログラミング4');
            $table->dateTime('programming5')->nullable()->comment('プログラミング5');
            $table->dateTime('programming6')->nullable()->comment('プログラミング6');
            $table->dateTime('programming7')->nullable()->comment('プログラミング7');
            $table->dateTime('programming8')->nullable()->comment('プログラミング8');
            $table->dateTime('programming9')->nullable()->comment('プログラミング9');
            $table->dateTime('programming10')->nullable()->comment('プログラミング10');
            $table->dateTime('programming11')->nullable()->comment('プログラミング11');
            $table->dateTime('programming12')->nullable()->comment('プログラミング12');
            $table->dateTime('programming13')->nullable()->comment('プログラミング13');
            $table->dateTime('programming14')->nullable()->comment('プログラミング14');
            $table->dateTime('programming15')->nullable()->comment('プログラミング15');
            $table->dateTime('programming16')->nullable()->comment('プログラミング16');
            $table->dateTime('programming17')->nullable()->comment('プログラミング17');
            $table->dateTime('programming18')->nullable()->comment('プログラミング18');
            $table->dateTime('programming19')->nullable()->comment('プログラミング19');
            $table->dateTime('programming20')->nullable()->comment('プログラミング20');
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
        Schema::dropIfExists('programmings');
    }
}
