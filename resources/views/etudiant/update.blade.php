<!Doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>My Application</title>
     <!-- Bootstrap CSS -->
     <link rel="stylesheet" href="./../css/bootstrap.min.css">
  </head>
  <body>

<div class="container">
  <div class="row">
    <div class="col s12">
    <h1>MODIFIER UN ETUDIANT</h1>
    

    @if (session('status'))
      <div class="alert alert-success">
        {{session('status')}}

      </div>
    @endif

    <ul>
    @foreach ($errors->all() as $error)
        <li class="alert alert-danger">{{ $error }}</li>
    @endforeach
    </ul>

    <form action="/update/traitement" method="POST" class="form-group">
      @csrf

      <input type="text" name="id" style="display:none;" value="{{ $etudiants->id }}">
        <div class="form-group">
            <label for="Nom" class="form-label">Nom</label>
            <input type="text" class="form-control" id="Nom"  name="nom" value="{{ $etudiants->nom }}">
        </div>

        <div class="form-group">
            <label for="Prenom" class="form-label">Prenom</label>
            <input type="text" class="form-control" id="Prenom"  name="prenom" value="{{ $etudiants->prenom }}">
        </div>

        <div class="form-group">
            <label for="Option" class="form-label">Option</label>
            <input type="text" class="form-control" id="Option"  name="option" value="{{ $etudiants->option }}">
        </div>


        <div class="form-group">
            <label for="Option" class="form-label">Age</label>
            <input type="text" class="form-control" id="Age"  name="age" value="{{ $etudiants->age }}">
        </div>


        
        <div class="form-group">
            <label for="Option" class="form-label">Sexe</label>
            <input type="text" class="form-control" id="Sexe"  name="sexe" value="{{ $etudiants->sexe }}">
        </div>


        <div class="form-group">
            <label for="Option" class="form-label">Email</label>
            <input type="text" class="form-control" id="Email"  name="email" value="{{ $etudiants->email }}">
        </div>


        <div class="form-group">
            <label for="Classe" class="form-label">Classe</label>
            <input type="text" class="form-control" id="Classe"  name="classe" value="{{ $etudiants->classe }}">
        </div>

        <button type="submit" class="btn btn-primary">MODIFIER UN ETUDIANT</button>


    <a href="/etudiant" class="btn btn-danger">AFFICHER LA LISTE DES ETUDIANTS</a>
    </form>
    </div>
  
  </div>
</div>


</div>
  </body>
</html>