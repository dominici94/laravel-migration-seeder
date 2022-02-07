<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTravelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('travels', function (Blueprint $table) {
            $table->id();
            
            // destinazione
            $table->string("destination", 50);
            // costo
            $table->float("price, 7, 2");
            // numero viaggiatori
            $table->unsignedSmallInteger('passengers');
            // durata soggiorno in giorni
            $table->unsignedTinyInteger('duration');
            // volo incluso si o no
            $table->boolean('flight');

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
        Schema::dropIfExists('travels');
    }
}
