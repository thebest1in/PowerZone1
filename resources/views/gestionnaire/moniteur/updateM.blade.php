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
@isset($moniteur)
<div class="container" style="margin-top:100px;">
<nav>
<a href="/admin" class="btn btn-warning" style="font-size:2em"><i class="ti-arrow-left"></i></a>
</nav><hr>

<div class="intro-section" id="home" style="background-color: #eee ;">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-sm-5 mx-auto text-center" data-aos="fade-up">
          <form action="/modifierMoniteur" method="post" style="margin:20px">
                @csrf
                @foreach($moniteur as $i)
                <div class="form-group">
                  <label for="exampleInputEmail1">Nom</label>
                  <input type="text" class="form-control" name="nom" aria-describedby="emailHelp"  value="{{$i->nom}}" style="margin:20px">
                  <input type="hidden" class="form-control" name="code" aria-describedby="emailHelp" value="{{$i->codeM}}" style="margin:20px">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Prenom</label>
                  <input type="text" class="form-control" name="prenom"  value="{{$i->prenom}}" style="margin:20px">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Tel</label>
                  <input type="number" class="form-control" name="tel" aria-describedby="emailHelp" value="{{$i->tel}}" style="margin:20px">
                </div>
                @endforeach
                <button type="submit" class="btn btn-primary" style="margin-top:20px">Modifier</button> &mdash;
                <a href="/admin/gestionnaire" class="btn btn-secondary" style="margin-top:20px">Annuler</a> 
          </form>
          </div>
        </div>
      </div>
</div>
</div>
@endisset
@else
    <div class="container">
        <div class="row align-items-center text-center" style="margin-top:100px">
                <h3>pas de resultat</h3>
                <a href="/login" class="btn btn-warning" width="auto">clique ici</a>
        </div>
    </div>
@endif
</body>
</html>