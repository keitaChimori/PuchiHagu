<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChildrenTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('children', function (Blueprint $table) {
            $table->increments('id')->index();
            $table->integer('user_id')->index();
            $table->string('child_name')->length(32)->nullable()->charset("utf8")->comment('子どもの名前');
            $table->integer('birthyear')->length(4)->nullable()->comment('誕生年');
            $table->integer('birthmonth')->length(2)->nullable()->comment('誕生月');
            $table->integer('birthday')->length(2)->nullable()->comment('誕生日');
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
        Schema::dropIfExists('children');
    }
}
