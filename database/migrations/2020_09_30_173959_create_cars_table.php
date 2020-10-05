<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cars', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('province_id');
            $table->string('brand');
            $table->string('image');
            $table->string('body');
            $table->string('fuel_type');
            $table->integer('seats');
            $table->integer('date');
            $table->integer('dor');
            $table->double('mileage');
            $table->double('engine');
            $table->double('price');
            $table->foreign('province_id')->references('id')->on('provinces')->onDelete('cascade');

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
        Schema::dropIfExists('cars');
    }
}
