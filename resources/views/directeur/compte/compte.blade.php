<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Gérer les comptes</title>
    <!-- Include Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{url('./assets/vendors/themify-icons/css/themify-icons.css')}}">

</head>
<body>
    <div class="col-md-4 col-sm-6 col-xs-12 " style="margin-top:100px;"><nav>
        <a href="/directeur" class="btn btn-primary" style="font-size:2em"><i class="ti-arrow-left"></i></a>
        </nav></div>
    <div class="container">
        <h1 class="mt-5 mb-4">Gérer les comptes</h1>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nom</th>
                    <th>Email</th>
                    <th>Rôle</th>
                    <th>Modifier rôle</th>
                </tr>
            </thead>
            <tbody>
                @foreach($utilisateurs as $utilisateur)
                    <tr>
                        <td>{{ $utilisateur->id }}</td>
                        <td>{{ $utilisateur->nom }} {{ $utilisateur->prenom }}</td>
                        <td>{{ $utilisateur->email }}</td>
                        <td>{{ $utilisateur->role }}</td>
                        <td>
                            <form method="POST" action="{{ route('directeur.compte.modifierRole', ['id' => $utilisateur->id]) }}">
                                @csrf
                                @method("PUT")
                                <div class="form-group">
                                    <select class="form-control" name="role">
                                        <option value="gestionnaire" @if($utilisateur->role == 'gestionnaire') selected @endif>gestionnaire</option>
                                        <option value="admin" @if($utilisateur->role == 'admin') selected @endif>admin</option>
                                        <option value="directeur" @if($utilisateur->role == 'directeur') selected @endif>Directeur</option>
                                    </select>
                                </div>
                                <button type="submit" class="btn btn-primary">Modifier</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <!-- Include Bootstrap JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.3/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
