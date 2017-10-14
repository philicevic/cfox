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
            $table->boolean('trial')->nullable();
            $table->boolean('warned')->nullable();
            $table->date('trial_until')->nullable();
            $table->string('phonenumber')->nullable();
            $table->string('steamurl')->nullable();
            $table->string('psn')->nullable();
            $table->string('twitterurl')->nullable();
            $table->string('image')->nullable();
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
