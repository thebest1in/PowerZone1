<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAbonnements extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
   
    
        public function up()
        {
            Schema::create('abonnements', function (Blueprint $table) {
                $table->increments('num');
                $table->date('dateAbonnement');
                $table->integer('idAb')->unsigned();
                $table->integer('idgroupe')->unsigned();
                $table->foreign('idgroupe')->references('idgroupe')->on('groupes');
                $table->foreign('idAb')->references('idAb')->on('typeAbonnements');
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('abonnements');
    }
}
