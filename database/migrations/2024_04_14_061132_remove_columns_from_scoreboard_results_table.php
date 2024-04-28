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
            $table->dropColumn('state1');
            $table->dropColumn('state2');
            $table->dropColumn('state3');
            $table->dropColumn('state4');
            $table->dropColumn('email1');
            $table->dropColumn('email2');
            $table->dropColumn('email3');
            $table->dropColumn('email4');
            $table->dropColumn('mobile1');
            $table->dropColumn('mobile2');
            $table->dropColumn('mobile3');
            $table->dropColumn('mobile4');
            $table->dropColumn('player_id33');
            $table->dropColumn('player_id44');
            $table->dropColumn('name3');
            $table->dropColumn('name4');
            $table->dropColumn('position3');
            $table->dropColumn('position4');
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
