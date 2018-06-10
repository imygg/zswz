<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCheckWorkTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('check_work', function (Blueprint $table) {
            $table->increments('id');
            $table->dateTime('time')->nullable()->comment('时间');
            $table->integer('work_id')->nullable()->comment('任务编号');
            $table->integer('user_id')->nullable()->comment('用户编号');
            $table->string('pic')->nullable()->comment('图片结果');
            $table->string('txt')->nullable()->comment('文字结果');
            $table->integer('state')->nullable()->comment('状态，0通过，1不通过');
            $table->string('reply')->nullable()->comment('回复');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('check_work');
    }
}
