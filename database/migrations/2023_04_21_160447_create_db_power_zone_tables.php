<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDbPowerZoneTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Schema::create('activites', function (Blueprint $table) {
        //     $table->integer('idAct')->primary();
        //     $table->string('nomAct', 20);
        // });

        // Schema::create('annonces', function (Blueprint $table) {
        //     $table->integer('idAn')->primary();
        //     $table->string('title', 20);
        //     $table->date('dateDebut');
        //     $table->date('dateFin');
        //     $table->string('contenue', 200);
        // });

        // Schema::create('typeAbonnements', function (Blueprint $table) {
        //     $table->integer('idAb')->primary();
        //     $table->string('nomAb', 20);
        // });

        // Schema::create('tarif', function (Blueprint $table) {
        //     $table->integer('idAct');
        //     $table->integer('idAb');
        //     $table->primary(['idAct', 'idAb']);
        //     $table->float('prixActuel');
        //     $table->foreign('idAct')->references('idAct')->on('activites');
        //     $table->foreign('idAb')->references('idAb')->on('typeAbonnements');
        // });

        // Schema::create('groupe', function (Blueprint $table) {
        //     $table->integer('idgroupe')->primary();
        //     $table->string('nomgroupe', 20);
        // });

        // Schema::create('abonnements', function (Blueprint $table) {
        //     $table->integer('num')->primary();
        //     $table->date('dateAbonnement');
        //     $table->integer('idAb');
        //     $table->integer('idgroupe');
        //     $table->foreign('idgroupe')->references('idgroupe')->on('groupe');
        //     $table->foreign('idAb')->references('idAb')->on('typeAbonnements');
        // });

        // Schema::create('adherent', function (Blueprint $table) {
        //     $table->integer('codeA')->primary();
        //     $table->string('nom', 20);
        //     $table->string('prenom', 20);
        //     $table->date('dateNaissance');
        //     $table->integer('tel');
        //     $table->integer('num');
        //     $table->foreign('num')->references('num')->on('abonnements');
        // });

        // Schema::create('paiement', function (Blueprint $table) {
        //     $table->integer('numP')->primary();
        //     $table->date('dateP');
        //     $table->float('montant');
        //     $table->integer('num');
        //     $table->foreign('num')->references('num')->on('abonnements');
        // });

        // Schema::create('moniteur', function (Blueprint $table) {
        //     $table->integer('codeM')->primary();
        //     $table->string('nom', 20);
        //     $table->string('prenom', 20);
        //     $table->integer('tel');
        // });
        // Schema::create('activites_moniteur', function (Blueprint $table) {
        //     $table->integer('codeM');
        //     $table->integer('idAct');
        //     $table->primary(['codeM', 'idAct']);
        //     $table->foreign('codeM')->references('codeM')->on('moniteur');
        //     $table->foreign('idAct')->references('idAct')->on('activites');
        // });
        
        // Schema::create('sence', function (Blueprint $table) {
        //     $table->integer('idS')->primary();
        //     $table->string('jour', 20);
        //     $table->float('heurFin');
        //     $table->float('heurDebut');
        //     $table->integer('idgroupe');
        //     $table->integer('codeM');
        //     $table->integer('idAct');
        //     $table->foreign('idgroupe')->references('idgroupe')->on('groupe');
        //     $table->foreign('codeM')->references('codeM')->on('moniteur');
        //     $table->foreign('idAct')->references('idAct')->on('activites');
        // });
        
        // Schema::create('users', function (Blueprint $table) {
        //     $table->integer('id')->primary();
        //     $table->string('nom', 30);
        //     $table->string('prenom', 30);
        //     $table->string('role', 20);
        //     $table->string('email', 30);
        //     $table->string('password', 30);
        // });
        
        // Schema::create('demande', function (Blueprint $table) {
        //     $table->integer('id')->primary();
        //     $table->string('nom', 20);
        //     $table->string('prenom', 30);
        //     $table->integer('tel');
        //     $table->date('date_naissance');
        // });
        
    }}