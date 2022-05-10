<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReclamersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reclamers', function (Blueprint $table) {
           $table->id();
            $table->unsignedBigInteger('numReclamation');
            $table->unsignedBigInteger('matricule');
            $table->foreign('numReclamation')->references('id')->on('reclamations');
            $table->foreign('matricule')->references('id')->on('employes');
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
        Schema::dropIfExists('reclamers');
    }
}
