<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFlightsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('flights', function (Blueprint $table) {
            $table->bigIncrements('id',20);
            $table->date('date');
            $table->time('double_control');
            $table->time('captain');
            $table->time('instructor');
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('glider_id');
            $table->unsignedBigInteger('board_function_id');
            $table->unsignedBigInteger('nature_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('glider_id')->references('id')->on('gliders');
            $table->foreign('board_function_id')->references('id')->on('board_functions');
            $table->foreign('nature_id')->references('id')->on('natures');
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
        Schema::dropIfExists('flights');
    }
}
