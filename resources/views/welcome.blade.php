<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Registro de Domínios</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</head>

<body class="text-center">
    @if (Route::has('login'))
        <div class="text-end m-3">
            @auth
                <a class="btn btn-secondary" href="{{ url('/dashboard') }}">Dashboard</a>
            @else
                <a class="btn btn-primary me-1" href="{{ route('login') }}">Logar</a>
            @endauth
        </div>
    @endif
    <h1>Registro de Domínios</h1>
    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTUqPuIrusEFTdnPtzbzAXoUBhyaxGd6ZLuQg&s"
        alt="" srcset="">
</body>

</html>
