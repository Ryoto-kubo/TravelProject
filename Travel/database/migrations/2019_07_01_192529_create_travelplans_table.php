<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTravelplansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('travelplans', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->string('title');
            $table->text('introduction');
            $table->integer('price');
            $table->string('area');
            $table->string('place');
            $table->char('travel_img01');
            $table->char('travel_img02')->nullable();
            $table->char('travel_img03')->nullable();
            $table->char('travel_img04')->nullable();
            $table->char('travel_img05')->nullable();
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('travelplans');
    }
}
