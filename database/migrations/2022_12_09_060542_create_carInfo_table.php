<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('carInfo', function (Blueprint $table) {
            $table->id('Customer_id');
            $table->string('name');
            $table->string('email');
            $table->string('registration_no');
            $table->string('color');
            $table->string('make');
            $table->string('model');
            $table->string('body_type');
            $table->boolean('Status')->default(1);
            $table->integer('model_year');
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
        Schema::dropIfExists('carInfo');
    }
};
