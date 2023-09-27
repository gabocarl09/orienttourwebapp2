<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('places_sections', function (Blueprint $table) {
            $table->increments('id');
            $table->binary('place_image');
            $table->string('type_of_place');
            $table->integer('homepages_id')->unsigned();
            $table->foreign('homepages_id')->references('id')->on('homepages')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('places_sections');
    }
};
