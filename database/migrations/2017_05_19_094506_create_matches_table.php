<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMatchesTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('venues', function (Blueprint $table) {
            $table->increments('id');
            $table->string('stadium');
            $table->string('city');
            $table->integer('capacity');
        });

        Schema::create('mathes', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('home_team', false, true);
            $table->integer('away_team', false, true);
            $table->integer('venue_id', false, true);
            $table->timestamp('kick_off');
            $table->string('result');
            $table->string('status');
            $table->string('outcome');
            $table->timestamps();

            $table->foreign('home_team')->references('id')->on('teams')->onDelete('cascade');
            $table->foreign('away_team')->references('id')->on('teams')->onDelete('cascade');
            $table->foreign('venue_id')->references('id')->on('venues')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('venues');
        Schema::dropIfExists('mathes');
    }
}
