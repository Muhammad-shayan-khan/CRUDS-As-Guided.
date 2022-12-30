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
        Schema::create('car_info', function (Blueprint $table) {
            $table->id('customer_id');
            $table->string('Brand');
            $table->string('Model');
            $table->string('Body type');
            $table->string('Color');
            $table->enum('Transmission',['Auto','Manual']);
            $table->enum('Engine CC',['1.3','1.5','1.8']);
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
        Schema::dropIfExists('car_info');
    }
};
