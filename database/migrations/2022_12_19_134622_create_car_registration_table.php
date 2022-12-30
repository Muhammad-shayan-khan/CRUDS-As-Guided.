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
        Schema::create('car_registration', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email');
            $table->string('registration_no');
            $table->string('color');
            $table->string('make');
            $table->string('model');
            $table->string('Status')->default(1);
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
        Schema::dropIfExists('car_registration');
    }
};
