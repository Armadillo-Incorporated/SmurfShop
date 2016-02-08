<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSteamAccountsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('steam_accounts', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('steam_id');
            $table->integer('digit_id')->unsigned()->nullable();
            $table->foreign('digit_id')->references('id')->on('digits')->onDelete('cascade');
            $table->integer('rank_id')->unsigned()->nullable();
            $table->foreign('rank_id')->references('id')->on('ranks')->onDelete('cascade');
            $table->string('username')->unique();
            $table->string('password', 60);
            $table->integer('active')->default(1);
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
        Schema::drop('steam_accounts');
    }
}
