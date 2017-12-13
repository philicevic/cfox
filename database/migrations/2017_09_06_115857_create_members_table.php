<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMembersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('members', function (Blueprint $table) {
            $table->increments('id');
            $table->string('firstname')->nullable();
            $table->string('lastname')->nullable();
            $table->string('nickname');
            $table->string('email')->nullable();
            $table->integer('clan_id');
            $table->integer('team_id')->nullable();
            $table->integer('game_id')->nullable();
            $table->boolean('trial')->nullable();
            $table->date('trial_until')->nullable();
            $table->string('phonenumber')->nullable();
            $table->string('steamurl')->nullable();
            $table->string('psn')->nullable();
            $table->string('twitter')->nullable();
            $table->string('twitch')->nullable();
            $table->string('discordid')->nullable();
            $table->string('image')->nullable();
            $table->string('uri');
            $table->boolean('active');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('members');
    }
}
