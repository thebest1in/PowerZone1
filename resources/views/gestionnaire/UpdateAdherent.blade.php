<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PowerZone</title>
    <link rel="stylesheet" href="{{url('./bootstrap.min.css')}}">
</head>
<body>
<div class="container" style="margin-top:50px;">
<nav>
    <a href="/gestionnaire" class="btn btn-warning">Home</a>
</nav><hr>

<div class="intro-section" id="home" style="background-color: #eee ;">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-sm-5 mx-auto text-center" data-aos="fade-up">
          <form action="/updateAdherent" method="post" style="margin:20px">
                @csrf
                @foreach($rs as $i)
                <div class="form-group">Nom
                  <input type="text" class="form-control" name="nom" value="{{$i->nom}}" style="margin:10px">
                  <input type="hidden" class="form-control" name="codeA" value="{{$i->codeA}}" style="margin:10px">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Prenom</label>
                  <input type="text" class="form-control" name="prenom" value="{{$i->prenom}}" style="margin:10px">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Tel</label>
                  <input type="number" class="form-control" name="tel"value="{{$i->tel}}" style="margin:10px">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Activite</label>
                  <input type="text" class="form-control" name="nomAct" value="{{$i->nomAct}}" style="margin:10px">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Abonnements</label>
                  <input type="text" class="form-control" name="nomAb" value="{{$i->nomAb}}" style="margin:10px">
                </div>
                @endforeach
                <button type="submit" class="btn btn-primary" style="margin-top:20px">Modifier</button> &mdash;
                <a href="/gestionnaire/adherent" class="btn btn-secondary" style="margin-top:20px">Annuler</a> 
          </form>
          </div>
        </div>
      </div>
</div>

</div>
</body>
</html>