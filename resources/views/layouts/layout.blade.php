<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <title>@yield('title')</title>
</head>
<body>
    <div class = "container heigt">

        <nav class="nav">
            <a class="nav-link" href="{{ route('index') }}">index</a>
            <a class="nav-link" href="{{ route('home') }}">home</a>
            <a class="nav-link" href="{{ route('book') }}">create book</a>
            <a style="margin-left:auto;" class="nav-link nav_adapt_max" href="{{ route('register') }}">register</a>
            <a class="nav-link nav_adapt_max" href="{{ route('login') }}">login</a>
            <form action="{{ route('logout') }}" method="POST" class="form-inline nav_adapt_max">
                @csrf
                <input type="submit" class="btn btn-danger" value="logout">
            </form>
            <div style="margin-left:auto;" class="dropdown nav_adapt_min">
                <a class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    acc
                </a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="{{ route('register') }}">logout</a></li>
                    <li><a class="dropdown-item" href="{{ route('login') }}">login</a></li>
                    <li><a class="dropdown-item" href="{{ route('logout') }}">logout</a></li>
                </ul>
            </div>
        </nav>

        <div class = "wrapper">

        @yield('main')

        </div>

    </div>
    
    <div class = "footer">




    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>