<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PowerZone</title>
    <link rel="stylesheet" href="{{url('./bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{url('./assets/vendors/themify-icons/css/themify-icons.css')}}">
    
</head>
<body>


<?php
    if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
?>
@if(!empty($_SESSION["id"]) && $_SESSION["id"] == $_SESSION["idTest"])
<div class="container mt-5">
    <nav>
        <a href="/gestionnaire" class="btn btn-warning" style="font-size:2em"><i class="ti-arrow-left"></i></a>
    </nav>
    <hr>

    <div class="intro-section" id="home" style="background-color: #eee;">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-sm-5 mx-auto text-center" data-aos="fade-up">
                    <form method="post" action="/ajouterM"  style="margin:20px">
                        @csrf
                        
                        <div class="form-group">
                            <label for="nom">Nom </label>
                            <input type="text" class="form-control" name="nom" id="nom" placeholder="Enter nom">
                        </div>
                        <div class="form-group">
                            <label for="prenom">Prenom </label>
                            <input type="text" class="form-control" name="prenom" id="prenom" placeholder="Enter prenom">
                        </div>
                        <div class="form-group">
                            <label for="tel">Tel </label>
                            <input type="number" class="form-control" name="tel" id="tel" placeholder="Enter nom">
                        </div>
                        <button type="submit" class="btn btn-primary mt-3 mr-3">Ajouter</button>
                        <a href="/gestionnaire/moniteur" class="btn btn-secondary mt-3">Annuler</a> 
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@else
    <div class="container">
        <div class="row align-items-center text-center mt-5">
            <h3>pas de resultat</h3>
            <a href="/login" class="btn btn-warning mt-3" width="auto">Cliquez ici</a>
        </div>
    </div>
@endif

</body>
</html>
