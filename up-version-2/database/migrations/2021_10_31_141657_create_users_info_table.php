<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersInfoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users_info_table', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('user_id');
            $table->string('name',20)->nullable();
            $table->string('lastname',20)->nullable();
            $table->text('bio')->nullable();
            $table->string('avatar',100)->nullable();
            $table->enum('gender',['male','female','notprefet'])->default('notprefet');
            $table->bigInteger('age')->nullable();
            $table->enum('news',['yes','no'])->default('no');

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');

        });
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
