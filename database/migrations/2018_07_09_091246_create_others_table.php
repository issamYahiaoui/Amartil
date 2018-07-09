<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOthersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('others', function (Blueprint $table) {
            $table->increments('id');
            $table->string('adr')->nullable();
            $table->float('lat')->nullable();
            $table->float('lng')->nullable();
            $table->text('description')->nullable();
            $table->string('price')->nullable();
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
        Schema::dropIfExists('others');
    }
}
