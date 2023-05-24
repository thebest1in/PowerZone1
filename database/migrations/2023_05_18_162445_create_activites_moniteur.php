<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateActivitesMoniteur extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('activites_moniteur', function (Blueprint $table) {
            $table->integer('codeM');
            $table->integer('idAct');
            $table->primary(['codeM', 'idAct']);
            $table->foreign('codeM')->references('codeM')->on('moniteur');
            $table->foreign('idAct')->references('idAct')->on('activites');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('activites_moniteur');
    }
}
