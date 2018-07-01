<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ads', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title')->nullable();
            $table->string('subtitle')->nullable();
            $table->string('description')->nullable();
            $table->integer('price')->nullable();
            $table->string('owner_phone')->nullable();
            $table->string('lat')->nullable();
            $table->string('log')->nullable();
            $table->string('adr')->nullable();
            $table->string('video_url')->nullable();
            $table->boolean('featured')->default(0);
            $table->boolean('active')->default(0);
            $table->integer('customer_id')->nullable();
            $table->integer('category_id')->nullable();
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
        Schema::dropIfExists('ads');
    }
}
