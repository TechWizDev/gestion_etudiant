<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>My Application</title>
     <!-- Bootstrap CSS -->
     <link rel="stylesheet" href="css/bootstrap.min.css">
  </head>
  <body>
   

<div class="container text-center">
  <div class="row">

    <div class="col s12">
    <h1>LISTES DES ETUDIANTS</h1>
    <hr>
        <a href="/ajouter" class="btn btn-success">Ajouter un etudiant</a>
        <a href="/ajouter" class="btn btn-primary">Retour</a>
        <hr>

        @if (session('status'))
          <div class="alert alert-success">
            {{session('status')}}

          </div>
        @endif

      <table class="table">
          <thead>
              <tr>
                  <th>#</th>
                  <th>Nom</th>
                  <th>Prénom</th>
                  <th>Option</th>
                  <th>Age</th>
                  <th>Sexe</th>
                  <th>Email</th>
                  <th>Classe</th>
                  <th>Actions</th>
              </tr>
          </thead>
          <tbody>

            @php
              $ide = 1;
            @endphp
            @foreach($etudiants as $etudiant)
            <tr>
              <td>{{ $ide}}</td>
              <td>{{ $etudiant->nom}}</td>
              <td>{{ $etudiant->prenom}}</td>
              <td>{{ $etudiant->option}}</td>
              <td>{{ $etudiant->age}}</td>
              <td>{{ $etudiant->sexe}}</td>
              <td>{{ $etudiant->email}}</td>
              <td>{{ $etudiant->classe}}</td>
              <td>
                <a href="/update-etudiant/{{ $etudiant->id}}" class="btn btn-info">Update</a>
                <a href="/delete-etudiant/{{ $etudiant->id}}" class="btn btn-danger">Delete</a>
              </td>
            </tr>
            @php
              $ide += 1;
            @endphp
          @endforeach
          </tbody>
      </table>
      {{ $etudiants->links()}}
    </div>
  
  </div>
</div>


</div>
  </body>
</html>