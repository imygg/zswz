<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMyWorkTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('my_work', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('work_id')->nullable()->comment('任务编号');
            $table->integer('state')->nullable()->comment('状态，0进行中，1待审核，2成功，3失败');
            $table->dateTime('answer')->nullable()->comment('领取时间');
            $table->dateTime('submit')->nullable()->comment('提交时间');
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
        Schema::dropIfExists('my_work');
    }
}
