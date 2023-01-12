<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <link rel="shortcut icon" href= "img/icono.ico"/>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Secretaría de Desarrollo Social - Portal HambreCero</title>

        <script src="{{ asset('js/app.js') }}" defer></script>
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link rel="dns-prefetch" href="//fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
        <style>
            .primario{
              background-color: #ab0a3d !important;
              color: #eaeaea !important;
            }
            .secundario{
              background-color: #440412 !important;
              color: ;
            }
          </style>
      
    </head>
    <body>
        <div class= "container-fluid">
            <div class="row justify-content-between">

            </div>
            
            <div class="row justify-content-end primario text-white">
                @if (Route::has('login'))
                <div >
                    @auth
                        <a href="{{ url('/home') }}" >Inicio</a>
                    @else
                        <a href="{{ route('login') }}" >Administración</a>
                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" >Register</a>
                        @endif
                    @endif
                </div>
            @endif
            </div>
            
        </div>

    </body>
</html>
