<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateApartmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('apartments', function (Blueprint $table) {
            $table->increments('id');
            $table->string('adr')->nullable();
            $table->float('lat')->nullable();
            $table->float('lng')->nullable();
            $table->string('zip')->nullable();
            $table->string('is_owner')->nullable();
            $table->string('type_owner')->nullable();
            $table->string('property_type')->nullable();
            $table->integer('rooms')->nullable();
            $table->integer('bathrooms')->nullable();
            $table->integer('bedrooms')->nullable();
            $table->integer('total_area')->nullable();
            $table->text('description')->nullable();
            $table->string('flour')->nullable();
            $table->string('additional_details')->nullable();
            $table->string('year_built')->nullable();
            $table->string('format_price')->nullable();
            $table->integer('price')->nullable();
            $table->integer('price_meter')->nullable();
            $table->string('intention')->nullable();



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
        Schema::dropIfExists('apartments');
    }
}
