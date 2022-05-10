<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contients', function (Blueprint $table) {
           $table->id();
            $table->unsignedBigInteger('numAteliers');
            $table->unsignedBigInteger('numMateriel');
            $table->foreign('numAteliers')->references('id')->on('ateliers');
            $table->foreign('numMateriel')->references('id')->on('materiels');
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
        Schema::dropIfExists('contients');
    }
}
