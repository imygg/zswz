<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->nullable()->comment('用户名，2-10字符');
            $table->string('password')->nullable()->comment('密码，6-10字符');
            $table->string('phone')->nullable()->comment('手机');
            $table->string('avatar')->nullable()->comment('头像');
            $table->dateTime('register')->nullable()->comment('注册时间');
            $table->timestamp('last')->nullable()->comment('最后活动时间');
            $table->rememberToken()->comment('记忆令牌');
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
        Schema::dropIfExists('user');
    }
}
