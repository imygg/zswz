<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEarnRecordTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('earn_record', function (Blueprint $table) {
            $table->increments('id');
            $table->dateTime('time')->nullable()->comment('时间');
            $table->integer('type')->nullable()->comment('类型，0任务，1奖励，……');
            $table->integer('work_id')->nullable()->comment('任务编号');
            $table->float('money', 8, 2)->nullable()->comment('金额');
            $table->string('explain')->nullable()->comment('说明');
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
        Schema::dropIfExists('earn_record');
    }
}
