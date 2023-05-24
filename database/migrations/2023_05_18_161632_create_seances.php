<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSeances extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('seances', function (Blueprint $table) {
            $table->id();
            $table->string('jour', 20);
            $table->float('heurFin');
            $table->float('heurDebut');
            $table->integer('idgroupe');
            $table->integer('codeM');
            $table->integer('idAct');
            $table->foreign('idgroupe')->references('idgroupe')->on('groupe');
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
        Schema::dropIfExists('seances');
    }
}
