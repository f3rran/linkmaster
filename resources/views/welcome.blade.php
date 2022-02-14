<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Link Master</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">

        <!-- Styles -->
        
    </head>
    <body class="text-center">
    <div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
        <header class="masthead mb-auto">
            <div class="inner">
            <h3 class="masthead-brand">Link Master</h3>
            <nav class="nav nav-masthead justify-content-center">
                <a class="nav-link active" href="/admin/home">Inicio</a>
                <a class="nav-link" href="#">Características</a>
                <a class="nav-link" href="#">Contacto</a>
            </nav>
            </div>
        </header>
<br>
        <main role="main" class="inner cover">
            <img src="{{asset('images/logo-full.png')}}" class="mb-4" alt="" style="width: 280px; box-shadow: rgba(0, 0, 0, 0.25) 0px 54px 55px, rgba(0, 0, 0, 0.12) 0px -12px 30px, rgba(0, 0, 0, 0.12) 0px 4px 6px, rgba(0, 0, 0, 0.17) 0px 12px 13px, rgba(0, 0, 0, 0.09) 0px -3px 5px;">
            <h1 class="cover-heading">Tus enlaces centralizados</h1>
            <p class="lead">En Link Master podrás gestionar todos tus enlaces de interés desde un único lugar accediendo a un solo enlace</p>
            <p class="lead">
            <a href="#" class="btn btn-lg btn-secondary">Saber más</a>
            </p>
            <img style="width: 375px" src="{{asset('images/assets/captura.png')}}" alt="">
        </main>

        <footer class="mastfoot mt-auto">
            <div class="inner">
            <p>Proyecto desarrollado por <a href="https://f3rran.github.io">f3rran</a>.</p>
            </div>
        </footer>
    </div>
    </body>
</html>
