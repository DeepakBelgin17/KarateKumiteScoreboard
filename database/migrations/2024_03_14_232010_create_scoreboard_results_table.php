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
        Schema::create('scoreboard_results', function (Blueprint $table) {
            $table->id();
            $table->string('category');

            $table->integer('player_id11');
            $table->integer('player_id22');

            $table->integer('player_id33');

            $table->integer('player_id44');


            $table->integer('position1');
            $table->integer('position2');
            $table->integer('position3');
            $table->integer('position4');

            $table->string('name1');
            $table->string('name2');
            $table->string('name3');
            $table->string('name4');

            $table->string('state1');
            $table->string('state2');
            $table->string('state3');
            $table->string('state4');

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
        Schema::dropIfExists('scoreboard_results');
    }
};
