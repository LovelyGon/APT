<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateApartmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('apartments', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->String('apartment_type');
            $table->String('apartment_name');
            $table->String('apartment_custom_name');
            $table->Integer('apartment_type_number');
            $table->String('smoking_policy');
            $table->Integer('living_room_number');
            $table->Integer('bathroom_number');
            $table->Integer('bedroom_number');
            $table->Integer('apartment_size');
            $table->integer('property_id')->unsigned()->nullable();
            $table->foreign('property_id')->references('id')->on('propertys');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('departments');
    }
}
