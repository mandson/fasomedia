<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Actualites extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('actualites',function(Blueprint $table){
            $table->increments('id');
            $table->string('titre');
            $table->string('description');
            $table->text('photo');
            $table->integer('categories_id')->unsigned();
            $table->foreign('categories_id')->references('id')->on('categories')->onDelete('cascade');
            $table->integer('regions_id')->unsigned();
            $table->foreign('regions_id')->references('id')->on('regions')->onDelete('cascade');
            $table->integer('auteurs_id')->unsigned();
            $table->foreign('auteurs_id')->references('id')->on('auteurs')->onDelete('cascade');
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
        Schema::dropIfExists('actualites');
    }
}
