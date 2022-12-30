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
        Schema::create('customer', function (Blueprint $table) {
            $table->id('customer_id');
            $table->string('name');
            $table->string('email');
            $table->string('country');
            $table->string('city');
            $table->enum('gender',["Male","Female","Other"]);
            $table->string('dob');
            $table->string('address');
            $table->string('phone');
            $table->string('telephone');
            $table->string('Status')->default(-1);
           // $table->string('action')->default(1);
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
        Schema::dropIfExists('customer');
    }
};
