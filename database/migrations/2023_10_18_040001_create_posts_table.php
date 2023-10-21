<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->increments('id');
            $table->text('description');
            $table->string('name');
            $table->string('imgOriName');
            $table->string('imgName');
            $table->float('price');

            //relacion con categorias
            $table->integer('id_category')->unsigned();
            $table->foreign('id_category')->references('id')->on('categories')->ondelete('cascade')->onUpdate('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};
