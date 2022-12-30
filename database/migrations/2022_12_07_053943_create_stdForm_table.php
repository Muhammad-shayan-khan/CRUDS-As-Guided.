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
        Schema::create('stdForm', function (Blueprint $table) {
            $table->id('customer_id');
            $table->string('fname');
            $table->string('lname');
            $table->string('email');
            $table->string('country');
            $table->string('city');
            $table->string('password');
            $table->boolean('status')->default(1);
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
        Schema::dropIfExists('stdForm');
    }
};
