<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMiseAjoursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(){
        Schema::table('employes', function (Blueprint $table) {
         $table->string('username') ;
         $table->string('password') ;
        });
    }
   
    public function down()
    {
        Schema::dropIfExists('mise_ajours');
    }
}
