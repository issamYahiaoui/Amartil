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
            $table->string('owner_phone')->nullable();
            $table->string('video_url')->nullable();
            $table->boolean('featured')->nullable()->default(0);
            $table->boolean('active')->nullable()->default(0);
            $table->integer('customer_id')->nullable();
            $table->integer('category_id')->nullable();
            $table->integer('vue')->default(0);


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
