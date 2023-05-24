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
    if(!isset($_SESSION)) { 
        session_start(); 
    } 
?>
@if(!empty($_SESSION["id"]) && $_SESSION["id"] == $_SESSION["idTest"])
    @isset($moniteur)
        <div class="container" style="margin-top:100px;">
            <nav>
                <a href="/admin" class="btn btn-warning" style="font-size:2em"><i class="ti-arrow-left"></i></a>
            </nav>
            <hr>
            <form action="{{ route('ajouterM') }}" method="POST">
              @csrf
              <button type="submit" class="btn btn-primary">Ajouter moniteur</button>
            </form>
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">Nom</th>
                        <th scope="col">Prenom</th>
                        <th scope="col">Tel</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($moniteur as $i)
                        <tr>
                            <td>{{$i->nom}}</td>
                            <td>{{$i->prenom}}</td>
                            <td>{{$i->tel}}</td>
                            <td>
                                <a href="/updateMoniteur/{{$i->codeM}}" class="btn btn-primary"><i class="ti-pencil"></i></a>
                                <a href="/deleteMoniteur/{{$i->codeM}}" class="btn btn-secondary"><i class="ti-trash"></i></a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
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
