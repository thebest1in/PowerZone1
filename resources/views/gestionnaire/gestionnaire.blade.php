<?php
    if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
?>
@if(!empty($_SESSION["id"]) && $_SESSION["id"] == $_SESSION["idTest"])
@extends("master")
    @section("nav")
        <nav class="site-navigation position-relative text-right" role="navigation">
            <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">
                <li><a href="/logout" class="nav-link ">Logout</a></li>
            </ul>
        </nav>
        @endsection
        @section("section")
        <div class="intro-section" id="home" style="background-color: #eee ;">
            <div class="container">
                <div class="row align-items-center">
                <div class="col-sm-6 mx-auto" data-aos="fade-up">
                <h2 style="color:black">Bonjeur gestionnaire</h2><hr>
                <strong>- - - -  </strong><hr>
                        <a href="/gestionnaire/adherent" class="btn btn-warning" style="width:40%">groupes</a>
                        <a href="/gestionnaire/moniteur" class="btn btn-warning" style="width:40%">moniteur</a><hr>
                        <a href="/gestionnaire/activites" class="btn btn-warning" style="width:40%">Activites</a>
                        <a href="/gestionnaire/abonnements" class="btn btn-warning" style="width:40%">Abonnements</a><hr>
                        <a href="/gestionnaire/emploi" class="btn btn-warning" style="width:40%">emploi du temps</a>
                        <a href="/gestionnaire/suivie" class="btn btn-warning" style="width:40%">Suivie de paiement</a><hr>
                        <a href="/gestionnaire/annonces" class="btn btn-warning" style="width:40%">demandes</a>
                        <a href="/gestionnaire/annonces" class="btn btn-warning" style="width:40%">annonces</a><hr>
                        <a href="/gestionnaire/compte" class="btn btn-warning" style="width:40%">compte</a>
                </div>
                <div class="col-sm-6 mx-auto text-center" data-aos="fade-up">
                        <img src="./logo.png" alt="image :-(" style="width: 100%;">
                </div>
                </div>
            </div>
        </div>
        @endsection
@else
@section("section")
<div class="intro-section" id="home" style="background-color: #eee ;">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-sm-5 mx-auto text-center" data-aos="fade-up">
                <h3>Vous n'êtes pas connecté</h3>
                <a href="/login" class="btn btn-warning">clique ici</a>
            </div>
            <div class="col-sm-7 mx-auto text-center" data-aos="fade-up">
                <img src="./logo.png" alt="image :-(" style="width: 100%;">
            </div>
        </div>
    </div>
</div>
@endsection
@endif