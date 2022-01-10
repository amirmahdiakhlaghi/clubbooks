<?php

use App\Models\User;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('email',100)->unique()->nullable();
            $table->string('phone',15)->unique()->nullable();
            $table->string('username',20)->unique();
            $table->string('password',100);
            $table->enum('type',User::TYPES)->default(User::TYPE_USER);
            $table->timestamp('verified_at')->nullable();
            $table->string('verified_code',6)->nullable();
            $table->enum('two_factor_secret',['no','yes'])->default('no');
            $table->string('two_factor_code',6)->nullable();
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
