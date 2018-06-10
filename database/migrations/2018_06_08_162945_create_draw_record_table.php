<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDrawRecordTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('draw_record', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->nullable()->comment('用户编号');
            $table->dateTime('draw')->nullable()->comment('提现时间');
            $table->integer('state')->nullable()->comment('状态，0待打款，1已打款，2打款失败');
            $table->float('money', 8, 2)->nullable()->comment('金额');
            $table->integer('way')->nullable()->comment('方式，0微信，1支付宝');
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
        Schema::dropIfExists('draw_record');
    }
}
