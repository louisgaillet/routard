<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('services', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('place_id')->unsigned();
            $table->foreign('place_id')->references('id')->on('places')->onDelete('cascade');
            $table->integer('category_id')->unsigned();
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
            $table->integer('typeServices_id')->unsigned();
            $table->foreign('typeServices_id')->references('id')->on('typeServices')->onDelete('cascade');
            $table->string('name');
            $table->string('slug')->unique();

            $table->longText('introduction');
            $table->longText('details');
            $table->string('route')->nullable();
            $table->string('street_number')->nullable();
            $table->string('locality');
            $table->string('country');
            $table->string('phone')->nullable();
            $table->float('lat');
            $table->float('lng');



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
        Schema::dropIfExists('services');
    }
}
