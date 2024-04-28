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
            $table->dropColumn('player_id55');
            $table->dropColumn('player_id66');
            $table->dropColumn('name5');
            $table->dropColumn('name6');
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
            //
        });
    }
};
