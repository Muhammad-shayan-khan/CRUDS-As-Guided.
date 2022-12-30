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
        Schema::table('laptop_brand', function (Blueprint $table) {
            $table->string('Brand')->after('country');
            $table->string('model')->after('brand');
            $table->enum('GB',['4gb','8gb','16gb'])->after('model');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('laptop_brand', function (Blueprint $table) {
            //
        });
    }
};
