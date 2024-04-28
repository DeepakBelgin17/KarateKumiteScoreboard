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
        Schema::create('athletes', function (Blueprint $table) {
            $table->id();
            $table->String('name',50);

            $table->dateTime('dob')->format('m/d/Y');

            $table->String('gender');
            $table->integer('weight');
            $table->String('category');
            $table->String('qualification');
            $table->String('mobile_number');
            $table->String('email',50);
            $table->String('address',100);
            $table->String('state');
            $table->integer('pincode');

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
        Schema::dropIfExists('athletes');
    }
};
