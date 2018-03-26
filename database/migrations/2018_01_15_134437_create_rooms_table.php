<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRoomsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rooms', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->String('kind_of_room');
            $table->String('guest_number');
            $table->String('sofa_bed_number');
            $table->String('bed_option');
            $table->string('option');
            $table->integer('apartment_id')->unsigned()->nullable();
            $table->foreign('apartment_id')->references('id')->on('apartments') ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rooms');
    }
}
