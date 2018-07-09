<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMotocyclesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('motocycles', function (Blueprint $table) {
            $table->increments('id');
            $table->string('adr')->nullable();
            $table->string('zip')->nullable();
            $table->string('is_owner')->nullable();
            $table->string('type_owner')->nullable();
            $table->string('motocycle_model')->nullable();
            $table->string('model')->nullable();
            $table->text('description')->nullable();
            $table->string('safety')->nullable();
            $table->string('fuel_type')->nullable();
            $table->string('mileage')->nullable();
            $table->string('year')->nullable();
            $table->integer('fiscal_power')->nullable();
            $table->integer('color')->nullable();
            $table->integer('nbr_cylindre')->nullable();
            $table->string('warranty')->nullable();
            $table->string('format_price')->nullable();
            $table->string('price')->nullable();


            $table->integer('ads_id')->nullable();
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
        Schema::dropIfExists('motocycles');
    }
}
