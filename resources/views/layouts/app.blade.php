<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    {{-- <link rel="stylesheet" href="{{ public_path('css/bootstrap.min.css') }}"> --}}
    <link rel="stylesheet" href="{{ asset('/css/styles.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>

</head>

<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand">Controle de Domínios</a>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="{{ route('dashboard') }}">Início</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Dominios
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="{{route('domain.create')}}">Cadastrar</a></li>
                            <li><a class="dropdown-item" href="{{ route('domain.index') }}">Listar</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Clientes
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="{{route('owner.index')}}">Listar</a></li>
                            <li><a class="dropdown-item" href="#">Cadastrar</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Gerar Relatório
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="{{ route('generatepdf') }}" target="_blank">Todos</a>
                            </li>
                            <li><a class="dropdown-item" href="#">Vencidos</a></li>
                            <li><a class="dropdown-item" href="#">A vencer</a></li>
                        </ul>
                    </li>
            </div>
        </div>
    </nav>
    {{-- @yield('domain_pdf') --}}
    @yield('dashboard')

    @yield('domain.index')
    @yield('domain.create')
    @yield('domain.edit')

    @yield('owner.index')
    @yield('owner.create')
    @yield('owner.edit')
</body>

</html>
