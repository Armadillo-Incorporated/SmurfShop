<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDigitRankTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('digit_rank', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('digit_id')->unsigned();
            $table->foreign('digit_id')->references('id')->on('digits')->onDelete('cascade');
            $table->integer('rank_id')->unsigned();
            $table->foreign('rank_id')->references('id')->on('ranks')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('digit_rank');
    }
}
