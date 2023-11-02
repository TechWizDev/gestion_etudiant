<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
    <h2>Register</h2>
    @if($erros->any())
    <div>
        <div>Si les données entrées ne sont pas vrais</div>
        <ul>
            @foreach ($erros->all() as $error)
            <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>
    <form action="/register" method="POST">
        @csrf 
        <div class="form-group">
            <label for="Name" class="form-label">Name</label>
            <input type="text" class="form-control" id="name"  name="name" value="{{old('name')}}" autofocus>
        </div>

        <div class="form-group">
            <label for="Email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email"  name="email" value="{{old('email')}}" autofocus>
        </div>

        <div class="form-group">
            <label for="Password" class="form-label">Password</label>
            <input type="password" class="form-control" id="password"  name="password" value="{{old('password')}}" autofocus>
        </div>

        <div class="form-group">
            <label for="password_registration" class="form-label">Password_registration</label>
            <input type="password_registration" class="form-control" id="password_registration"  name="password_registration" value="{{old('name')}}" autofocus>
        </div>

        <div>
            <button type="submit" class="btn btn-success">Register</button>
        </div>
    </form>
</body>
</html>