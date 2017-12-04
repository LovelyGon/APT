<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePropertyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('propertys', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->String('property_name');
            $table->String('property_type');
            $table->String('star_rating');
            $table->String('property_number');
            $table->String('website');
            $table->String('contact_name');
            $table->String('address');
            $table->String('address_line2');
            $table->String('country');
            $table->String('city');
            $table->String('zipcode');
            $table->String('phonenumber');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('property');
    }
}
