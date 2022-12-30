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
        Schema::create('phoneBrand', function (Blueprint $table) {
            $table->id('customer_id');
            $table->string('customer name',30);
            $table->string('phone brand',20);
            $table->string('model',10);
            $table->enum("color",['black','white','gold','grey']);
            $table->enum('sim', ['single', 'dual']);
            $table->integer('IMEI NO');
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
        Schema::dropIfExists('phoneBrand');
    }
};
