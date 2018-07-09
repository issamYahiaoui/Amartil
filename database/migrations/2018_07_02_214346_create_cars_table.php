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
            $table->increments('id');
            $table->string('adr')->nullable();
            $table->float('lat')->nullable();
            $table->float('lng')->nullable();
            $table->string('zip')->nullable();
            $table->string('is_owner')->nullable();
            $table->string('type_owner')->nullable();
            $table->string('car_model')->nullable();
            $table->string('model')->nullable();
            $table->text('description')->nullable();
            $table->string('safety')->nullable();
            $table->string('fuel_type')->nullable();
            $table->string('mileage')->nullable();
            $table->string('year')->nullable();
            $table->string('fiscal_power')->nullable();
            $table->string('color')->nullable();
            $table->integer('nbr_cylindre')->nullable();
            $table->string('warranty')->nullable();
            $table->string('format_price')->nullable();
            $table->integer('price')->nullable();


            $table->integer('ads_id')->unsigned();
            $table->foreign('ads_id')->references('id')->on('ads')->onDelete('cascade');;

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
