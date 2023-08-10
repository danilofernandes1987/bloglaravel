<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- CSRF Token -->
    <meta name="_token" content="{{csrf_token()}}">

    <title>Painel Administrativo</title>
    <link rel="stylesheet" href="{{asset('bootstrap-5.3.1-dist/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('bootstrap-5.3.1-dist/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('fontawesome/css/all.css')}}">
    
</head>

<body class="container mt-5" id="app">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a href="/" class="navbar-brand">meuBlog</a>
        <button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggle-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a href="{{route('admin.artigos.index')}}" class="nav-link">Artigos</a>
                </li>
            </ul>
        </div>
    </nav>
    <div class="container">
        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>

</html>