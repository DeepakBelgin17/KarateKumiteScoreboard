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
            $table->bigInteger('mobile1');
            $table->string('email1');
            $table->bigInteger('mobile2');
            $table->string('email2');
            $table->bigInteger('mobile3');
            $table->string('email3');
            $table->bigInteger('mobile4');
            $table->string('email4');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('scoreboard_result', function (Blueprint $table) {
            //
        });
    }
};
