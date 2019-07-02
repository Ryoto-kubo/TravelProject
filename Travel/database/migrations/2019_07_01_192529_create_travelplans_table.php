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
            // $table->string('category');
            $table->string('travel_img01');
            $table->string('travel_img02')->nullable();
            $table->string('travel_img03')->nullable();
            $table->string('travel_img04')->nullable();
            $table->string('travel_img05')->nullable();
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
        // Schema::dropIfExists('travelplans');
        Schema::table('travelplans', function ($table) {
            $table->dropColumn('category');
        });
    }
}
