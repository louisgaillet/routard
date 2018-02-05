<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateModelsPlacesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('places', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('guide_id')->unsigned();
            $table->foreign('guide_id')->references('id')->on('guides')->onDelete('cascade');
            $table->string('name');
            $table->string('slug')->unique();
            $table->string('route')->nullable();
            $table->string('street_number')->nullable();
            $table->string('locality');
            $table->string('country');
            $table->decimal('lat', 20, 10);
            $table->decimal('lng', 20, 10);
            $table->longText('introduction');
            $table->longText('histoire')->nullable();
            $table->longText('arriver_quitter')->nullable();
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

        Schema::dropIfExists('places');
    }
}
