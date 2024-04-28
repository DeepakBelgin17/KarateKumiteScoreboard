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
        Schema::table('selected_names', function (Blueprint $table) {
            $table->integer('player_id11');
            $table->integer('player_id22');
            $table->integer('player_id33');
            $table->integer('player_id44');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('selected_names', function (Blueprint $table) {
            //
        });
    }
};
