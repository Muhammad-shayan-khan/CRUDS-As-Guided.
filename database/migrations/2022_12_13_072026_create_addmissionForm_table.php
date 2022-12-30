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
        Schema::create('addmissionForm', function (Blueprint $table) {
            $table->id('customer_id');
            $table->string('name');
            $table->string('email');
            $table->string('school');
            $table->string('dob');
            $table->string('address');
            $table->string('country');
            $table->string('city');
            $table->string('phone');
            $table->string('telephone');
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
        Schema::dropIfExists('addmissionForm');
    }
};
