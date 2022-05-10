<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTachesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('taches', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('matricule');
            $table->unsignedBigInteger('numProjet');
            $table->string('descriptionTache');
            $table->integer('delai');
            $table->date('dateDebut');
            $table->foreign('matricule')->references('id')->on('employes');
            $table->foreign('numProjet')->references('id')->on('projets');
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
        Schema::dropIfExists('taches');
    }
}
