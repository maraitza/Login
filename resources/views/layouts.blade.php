<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
</head>
<body>

<nav class="navbar navbar-dark bg-secondary">
  <div class="container-fluid h-50">
    <a class="navbar-brand">Aplicacion</a>
        <div class="d-flex btn-group" role="group" aria-label="Basic example">
            <a href="{{ route('login.index')}}"><button type="button" class="btn btn-dark">Login</button></a>
            <a href="{{ route('register.index')}}"><button type="button" class="btn btn-dark">Registro</button></a>
        </div>
    </div>
</nav>
    <div class="m-0 vh-100 row justify-content-center align-items-center">@yield('content')</div>
</body>
</html>