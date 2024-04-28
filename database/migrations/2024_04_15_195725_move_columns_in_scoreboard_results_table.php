<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('scoreboard_results', function (Blueprint $table) {

            // Check if the column exists before adding it
            if (!Schema::hasColumn('scoreboard_results', 'player_id33')) {
                $table->integer('player_id33')->after('player_id22');
            }

            // Check if the column exists before adding it
            if (!Schema::hasColumn('scoreboard_results', 'position3')) {
                $table->integer('position3')->after('position2');
            }

            // Check if the column exists before adding it
            if (!Schema::hasColumn('scoreboard_results', 'name3')) {
                $table->integer('name3')->after('name2');
            }

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('scoreboard_results', function (Blueprint $table) {
            // Define the rollback operation if needed
        });
    }
};
