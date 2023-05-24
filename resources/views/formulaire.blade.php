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

    <a href="/" class="btn btn-warning " style="margin-top:100px;margin-left:100px;font-size:2em;color:white !important"><i class="ti-arrow-left"></i></a>

<div class="container" style="width:50%;">
<form method="POST" action="/demander">
        @csrf

        Nom:
        <input type="text" name="nom" placeholder="Entrer le nom" class="form-control"><br>
        
        Prenom:
        <input type="text" name="prenom" placeholder="Entrer le prenom" class="form-control"><br>
        
        Date naissance:
        <input type="date" name="date_naissance" class="form-control"><br>
        
        Tel:
        <input type="text" name="tel" placeholder="Numéro de telephone" class="form-control"><br>
        
        <button type="submit" class="btn btn-primary">demander</button>
        <a href="/formulaire" class="btn btn-danger">annuler</a>
</form>
</div>
@if ($message = Session::get('success'))
    <div class="alert alert-success" style='position: fixed;bottom: 0;'>
        <p>{{ $message }}</p>
    </div>
@endif
</body>
</html>