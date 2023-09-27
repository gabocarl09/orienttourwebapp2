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
        Schema::create('interactive_maps', function (Blueprint $table) {
            $table->increments('id');
            $table->string('shop_names');
            $table->string('location');
            $table->string('type_of_shop');
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
        Schema::dropIfExists('interactive_maps');
    }
};
