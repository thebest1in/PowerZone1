<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdherents extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('adherents', function (Blueprint $table) {
            $table->increments('codeA');
            $table->string('nom', 20);
            $table->string('prenom', 20);
            $table->date('dateNaissance');
            $table->integer('tel');
            $table->integer('num')->unsigned();
            $table->foreign('num')->references('num')->on('abonnements');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('adherents');
    }
}
