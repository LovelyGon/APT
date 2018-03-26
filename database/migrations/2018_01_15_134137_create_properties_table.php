<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePropertiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('properties', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->String('property_name');
            $table->String('property_type');
            $table->String('star_rating');
            $table->Integer('property_number')->nullable();;
            $table->String('website')->nullable();;
            $table->String('contact_name');
            $table->String('address');
            $table->String('address_line2')->nullable();;
            $table->String('country');
            $table->String('city');
            $table->String('zipcode');
            $table->String('phonenumber');
            $table->Integer('property_size')->nullable();
            $table->integer('user_id')->unsigned()->nullable();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('properties');
    }
}
