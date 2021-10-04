<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVehiclesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vehicles', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('fuel_type');
            $table->string('license_plate')->unique();
            $table->string('name');
            $table->string('manufacturer');
            $table->integer('manufacture_year');
            $table->float('tank_capacity');
            $table->text('comments')->nullable();
            $table->timestamps();

            $table->foreign('fuel_type')->references('id')->on('fuel_types')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vehicles');
    }
}
