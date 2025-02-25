<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title', 'Home')</title>

    {{-- <link rel="stylesheet" href="{{ public_path('css/bootstrap.min.css') }}"> --}}
    <link rel="stylesheet" href="{{ asset('/css/styles.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
        integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-mask-plugin@1.14.16/dist/jquery.mask.min.js"></script>
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
                            <li><a class="dropdown-item" href="{{ route('domain.index') }}">Listar</a></li>
                            <li><a class="dropdown-item" href="{{ route('domain.create') }}">Cadastrar</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li class="dropdown-item">Relatórios</li>
                            <li><a class="dropdown-item" href="{{ route('pdf.domain', ['string' => 'all']) }}"
                                    target="_blank">Todos</a></li>
                            <li><a class="dropdown-item" href="{{ route('pdf.domain', ['string' => 'expired']) }}"
                                    target="_blank">Vencidos</a></li>
                            <li><a class="dropdown-item" href="{{ route('pdf.domain', ['string' => 'closer']) }}"
                                    target="_blank">A vencer</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Clientes
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="{{ route('owner.index') }}">Listar</a></li>
                            <li><a class="dropdown-item" href="{{ route('owner.create') }}">Cadastrar</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li class="dropdown-item">Relatórios</li>
                            <li><a class="dropdown-item" href="{{ route('pdf.owner') }}" target="_blank">Todos</a></li>
                        </ul>
                    </li>
            </div>
            <div class="text-end me-2">{{ Auth::user()->name }}</div>
            <form id="logout-form" action="{{ route('logout') }}" method="post">
                @csrf
                <a class="btn btn-danger" href="#" 
                onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>

            </form>
        </div>
    </nav>

    @yield('dashboard')
    @yield('domain.index')
    @yield('domain.create')
    @yield('domain.edit')

    @yield('owner.index')
    @yield('owner.create')
    @yield('owner.edit')

    @stack('js')
</body>

</html>
