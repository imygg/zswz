<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWorkTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('work', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('type')->nullable()->comment('类型，0注册，1转发，……');
            $table->string('title')->nullable()->comment('标题');
            $table->integer('state')->nullable()->comment('状态，0正常，1下线，2置顶');
            $table->integer('number')->nullable()->comment('数量');
            $table->integer('answer')->nullable()->comment('已接数量');
            $table->integer('left')->nullable()->comment('剩余数量=数量-已接数量');
            $table->integer('done')->nullable()->comment('完成数量');
            $table->dateTime('start')->nullable()->comment('开始时间');
            $table->dateTime('end')->nullable()->comment('结束时间');
            $table->text('content')->nullable()->comment('内容：介绍，步骤');
            $table->float('money', 8, 2)->nullable()->comment('佣金');
            $table->float('earn', 8, 2)->nullable()->comment('收益');
            $table->float('profit', 8, 2)->nullable()->comment('利润=收益-佣金');
            $table->float('all_profit', 8, 2)->nullable()->comment('总利润=利润*完成数量');
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
        Schema::dropIfExists('work');
    }
}
