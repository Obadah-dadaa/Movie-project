<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMoviesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('movies', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->text('image');
            $table->float('rating');
            $table->text('discreption');
            $table->text('promotion');
            $table->text('video');
            $table->time('duration');
            $table->bigInteger('type_id')->unsigned();
            $table->foreign('type_id')->refrences('id')->on('types')->onDelete('cascade');
            $table->bigInteger('language_id')->unsigned();
            $table->foreign('language_id')->refrences('id')->on('languages')->onDelete('cascade');
            $table->bigInteger('producingYear_id')->unsigned();
            $table->foreign('producingYear_id')->refrences('id')->on('producing_years')->onDelete('cascade');
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
        Schema::dropIfExists('movies');
    }
}
