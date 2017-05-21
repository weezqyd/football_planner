<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddPrimaryKeyToGroupTeams extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::table('group_teams', function (Blueprint $table) {
            $table->increments('id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::table('group_teams', function (Blueprint $table) {
            $table->dropColumn(['id']);
        });
    }
}
