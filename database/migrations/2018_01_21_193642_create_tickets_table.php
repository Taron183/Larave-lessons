<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTicketsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tickets', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->integer('movie_id');
            $table->string('1')->default(0);
            $table->string('2')->default(0);
            $table->string('3')->default(0);
            $table->string('4')->default(0);
            $table->string('5')->default(0);
            $table->string('6')->default(0);
            $table->string('7')->default(0);
            $table->string('8')->default(0);
            $table->string('9')->default(0);
            $table->string('10')->default(0);
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
        Schema::dropIfExists('tickets');
    }
}
