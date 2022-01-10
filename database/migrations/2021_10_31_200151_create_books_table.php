<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('books', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('writer_id')->nullable();
            $table->string('h_title',70);
            $table->string('top_title',70);
            $table->text('content');
            $table->string('price',20)->nullable();
            $table->string('entesharat',50)->nullable();
            $table->string('translator',20)->nullable();
            $table->string('surname',30)->nullable();
            $table->string('slug',50);
            $table->string('image',150);
            $table->string('t_image',150)->nullable();
            $table->string('banner',150)->nullable();
            $table->bigInteger('likes')->nullable()->default(0);
            $table->enum('region',['irani','other'])->default('other');
            $table->enum('size',['short','long'])->default('long');
            $table->string('alt_image',150)->nullable();
            $table->string('criticism',150)->nullable();

            $table->foreign('writer_id')->references('id')->on('writers')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('books');
    }
}
