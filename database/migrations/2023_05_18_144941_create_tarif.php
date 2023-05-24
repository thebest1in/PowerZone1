<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTarif extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tarif', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('idAct');
            $table->unsignedBigInteger('idAb');
            $table->float('prixActuel');
            $table->timestamps();

            $table->foreign('idAct')->references('id')->on('activites');
            $table->foreign('idAb')->references('id')->on('typeAbonnements');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tarif');
    }
}
