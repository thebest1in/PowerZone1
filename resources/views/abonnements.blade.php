<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PowerZone</title>
    <link rel="stylesheet" href="{{url('./bootstrap.min.css')}}">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<div class="container" style="margin-top:100px;">
<nav>
    <a href="/#abonnements" class="btn btn-warning">Accueil</a>
</nav><hr>

<form action="/abonnements" method="get">
<div style="text-align:center">
<input type="text" name="nom" placeholder="Nom d'activite">
<button type="submit" class="btn btn-secondary">Rechercher</button> &mdash; 
<a href="/abonnements" class="btn btn-secondary">Annuler</a></div>
</form><hr>

<div class="site-section" id="abonnements">
      <div class="container">
        <div class="row justify-content-center text-center mb-5" data-aos="fade-up">
          <div class="col-md-8  section-heading">
            <h2 class="heading mb-3">Abonnements</h2>
          </div>
        </div>
        <div class="row">
          @if(isset($_GET["nom"]))

              <?php
              $n=$_GET["nom"];
              ?>
              @foreach($abonnements as $ab)
              @if( str_contains(strtolower($ab->nomAct),strtolower($n)) )
                <div class="col-lg-4 mb-4 col-md-6" data-aos="fade-up" data-aos-delay="">
                    <div class="ftco-feature-1">
                      <span class="icon flaticon-fit"></span>
                      <div class="ftco-feature-1-text">
                        <h2>type : {{$ab->nomAb}}</h2>
                        <p>activite : {{$ab->nomAct}}</p>
                        <h2>prix : {{$ab->prixActuel}} dhs</h2>
                      </div>
                    </div>
                  </div>
              @endif
              @endforeach

          @else

              @foreach($abonnements as $ab)
              <div class="col-lg-4 mb-4 col-md-6" data-aos="fade-up" data-aos-delay="">
                  <div class="ftco-feature-1">
                    <span class="icon flaticon-fit"></span>
                    <div class="ftco-feature-1-text">
                      <h2>type : {{$ab->nomAb}}</h2>
                      <p>activite : {{$ab->nomAct}}</p>
                      <h2>prix : {{$ab->prixActuel}} dhs</h2>
                    </div>
                  </div>
                </div>
              @endforeach

        @endif
        </div>
      </div>
    </div>