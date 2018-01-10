<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFeaturesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('property_facilitys', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->time('arival_from');
            $table->time('arival_to');
            $table->time('departure_from');
            $table->time('departure_to');
            $table->String('internet');
            $table->String('parking');
            $table->String('breakfast');
            $table->String('children');
            $table->String('pet');
            $table->String('language');
            $table->Text('popular_facility');
            $table->integer('property_id')->unsigned()->nullable();

            $table->foreign('property_id')->references('id')->on('properties');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('property_facilitys');
    }
}
