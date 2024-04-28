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
        Schema::create('round3results', function (Blueprint $table) {
            $table->id();
            $table->string('player_name1');
            $table->integer('player_score1');
            $table->string('checkbox_Values1');

            $table->string('player_name2');
            $table->integer('player_score2');
            $table->string('checkbox_Values2');
            $table->String('category');
            $table->boolean('player1_firstscore')->nullable();
            $table->boolean('player2_firstscore')->nullable();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('round3results');
    }
};
