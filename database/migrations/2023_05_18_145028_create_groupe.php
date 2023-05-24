<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGroupe extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('groupe', function (Blueprint $table) {
            $table->id();
            $table->string('nomgroupe', 20);
            $table->integer('idM')->default(0);
            $table->foreign('idM')->references('id')->on('moniteur');
        });
        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('groupe');
    }
}
