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
    <div class = "container">

        <nav class="nav">
            <a class="nav-link" href="{{ route('index') }}">index</a>
            <a class="nav-link" href="{{ route('home') }}">home</a>
            <a style="margin-left:auto;" class="nav-link" href="{{ route('register') }}">register</a>
            <a class="nav-link" href="{{ route('login') }}">login</a>
            <form action="{{ route('logout') }}" method="POST" class="form-inline">
                @csrf
                <input type="submit" class="btn btn-danger" value="Выход">
            </form>
        </nav>

        <div class = "wrapper">

        @yield('main')

        </div>

    </div>
    


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>