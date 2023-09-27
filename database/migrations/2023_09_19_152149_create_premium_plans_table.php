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
        Schema::create('premium_plans', function (Blueprint $table) {
            $table->increments('id');
            $table->text('plan_name');
            $table->integer('price');
            $table->string('characteristics');
            $table->string('status');
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
        Schema::dropIfExists('premium_plans');
    }
};
