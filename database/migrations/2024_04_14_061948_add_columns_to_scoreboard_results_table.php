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
            $table->integer('player_id33');
            $table->integer('player_id44');
            $table->integer('player_id55');
            $table->integer('player_id66');

            $table->integer('position3');
            $table->integer('position4');
            $table->integer('position5');
            $table->integer('position6');

            $table->string('name3');
            $table->string('name4');
            $table->string('name5');
            $table->string('name6');
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
