<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <link rel="shortcut icon" href="img/icono.ico" />
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Secretaría de Desarrollo Social - Portal HambreCero</title>


    <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">


    <style>
        .primario {
            background-color: #ab0a3d !important;
            color: #eaeaea !important;
        }

        .secundario {
            background-color: #440412 !important;
            color: ;
        }

        .terciario {
            background-color: #B68400 !important;
            color: ;
        }


        .carousel {
            position: relative;
            margin-bottom: 0px;
            line-height: 1;
        }

        .carousel-indicators {
            position: absolute;
            top: 15px;
            right: 15px;
            z-index: 5;
            list-style: none;
        }

        .carousel-indicators li {
            display: block;
            float: left;
            width: 10px;
            height: 10px;
            margin-left: 5px;
            text-indent: -999px;
            background-color: #ab0a3d;
            background-color: rgba(255, 255, 255, 0.25);
            border-radius: 5px;
        }

        .carousel-indicators .active {
            background-color: #ab0a3d;
        }

        .carousel-inner>.next,
        .carousel-inner>.prev {
            position: absolute;
            top: 0;
            width: 100%;
        }

        .carousel-inner>.next {
            left: 100%;
        }

        .carousel-inner>.prev {
            left: -100%;
        }

        .carousel-inner>.next.left,
        .carousel-inner>.prev.right {
            left: 0;
        }

        .carousel-inner>.active.left {
            left: -100%;
        }

        .carousel-inner>.active.right {
            left: 100%;
        }


        .carousel-control {
            position: absolute;
            top: 40%;
            left: 15px;
            width: 40px;
            height: 40px;
            margin-top: -20px;
            font-size: 60px;
            font-weight: 100;
            line-height: 30px;
            color: #ffffff;
            text-align: center;
            background: #222222;
            border: 3px solid #ffffff;
            -webkit-border-radius: 23px;
            -moz-border-radius: 23px;
            border-radius: 23px;
            opacity: 0.5;
            filter: alpha(opacity=50);
        }

        .carousel-control.right {
            right: 15px;
            left: auto;
        }

        .carousel-control:hover,
        .carousel-control:focus {
            color: #ffffff;
            text-decoration: none;
            opacity: 0.9;
            filter: alpha(opacity=90);
        }

        .carousel-caption {
            position: absolute;
            right: 0;
            bottom: 0;
            left: 0;
            padding: 15px;
            background: #333333;
            background: rgba(68, 4, 18, 0.75);
        }

        .carousel-caption h4,
        .carousel-caption p {
            line-height: 20px;
            color: #ffffff;
        }

        .carousel-caption h4 {
            margin: 0 0 5px;
        }

        .carousel-caption p {
            margin-bottom: 0;
        }

        @media (max-width: 767px) {
            .carousel-caption {
            position: relative;
            height: 150px;
            right: 0;
            bottom: 0;
            left: 0;
            padding: 15px;
            background: #ab0a3d;
            
        }

}

    </style>

</head>

<body>
    <div class="container-fluid">
        <div class="row justify-content-between align-items-center">
           
                <img class="img-fluid" style="width: 3%" src="img/logo_qroo.png" alt="">
           
                <img class="img-fluid " style="width: 12%" src="img/logo_unidos.png" alt="">
           
                <img class="img-fluid " style="width: 17%" src="img/logo_hambrecero.png" alt="">
           
                <img class="img-fluid" style="width: 10%" src="img/logo_sedeso.png" alt="">
           
        </div>

        <div class="row justify-content-end primario text-white ">
            @if (Route::has('login'))
                <div>
                    @auth
                        <a href="{{ url('/home') }}">Inicio</a>
                    @else
                        <a href="{{ route('login') }}">Administración</a>

                @endif
            </div>
            @endif
        </div>

        </div>

        <div id="myCarousel" class="carousel slide " data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active ">
                    <img class="d-block w-100" src="{{ asset('img/c22.jpg') }}" alt="First slide" />
                    <div class="carousel-caption ">
                        <h5>¿A QUIÉN VA DIRIGIDO?</h5>
                        <p>A las personas que tengan carencia en el acceso a la alimentación y a grupos sociales
                            vulnerables; que radiquen en los municipios, localidades y/o colonias que se establezcan en las
                            convocatorias que emita la SEDESO y soliciten su ingreso al programa.</p>
                    </div>
                </div>
                <div class="carousel-item">

                    <img class="d-block w-100" src="{{ asset('img/c33.jpg') }}" alt="Second slide" />
                    <div class="carousel-caption">
                        <h5>BENEFICIOS</h5>
                        <p>Recibir apoyo alimentario de manera bimestral para lograr la seguridad alimentaria y nutrimental.
                        </p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="{{ asset('img/c44.jpg') }}" alt="Third slide" />
                    <div class="carousel-caption">
                        <h5>Third slide label</h5>
                        <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
                    </div>
                </div>
            </div>
            <a class="carousel-control left carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control right carousel-control-next" href="#myCarousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>

        <div class="row align-items-center secundario">
            <div class="col-6 col-md-3 text-center">
                <a href="{{ route('register') }}" data-toggle="tooltip" title="Regístrate o inicia sesión"> <img
                        class="img-fluid" src="{{ asset('img/verifica2023.png') }}"></img></a>
            </div>

            <div class="col-6 col-md-3 text-center">
                <a href="https://qroo.gob.mx/sedeso/wp-content/sedeso/uploads/2022/12/COLONIAS-PARTICIPANTES-14.jpg"
                    data-toggle="tooltip" title="Colonias o localidades participantes"> <img class="img-fluid" 
                        src="{{ asset('img/colonias2023.png') }}"></img></a>
            </div>

            <div class="col-6 col-md-3 text-center">
                <a href="https://qroo.gob.mx/sedeso/ubica-tu-centro-entrega/" data-toggle="tooltip"
                    title="Ubica tu Centro de Entrega más cercano"> <img class="img-fluid" 
                        src="{{ asset('img/ubica2023.png') }}"></img></a>
            </div>

            <div class="col-6 col-md-3 text-center">
                <a href="https://qroo.gob.mx/sedeso/como-vamos/" data-toggle="tooltip" title="¿Cómo vamos?"> <img
                        class="img-fluid"  src="{{ asset('img/como2023.png') }}"></img></a>
            </div>

        </div>

        {{-- <div class="row justify-content-center">
            <div class="col-sm-12 col-md-3 text-center">
                <a href="{{ route('register') }}" target="_self"><img class="imagen"
                        src="{{ asset('img/verifica2022.png') }}" /></a>
            </div>

            <div class="col-sm-12 col-md-3 text-center">
                <a href="https://qroo.gob.mx/sedeso/wp-content/sedeso/uploads/2022/12/COLONIAS-PARTICIPANTES-14.jpg"
                    target="_blank"><img class="imagen" src="{{ asset('img/colonias2022.png') }}" /></a>
            </div>

            <div class="col-sm-12 col-md-3 text-center">
                <a href="https://qroo.gob.mx/sedeso/ubica-tu-centro-entrega/" target="_blank"><img class="imagen"
                        src="{{ asset('img/ubica2022.png') }}" /></a>
            </div>

            <div class="col-sm-12 col-md-3 text-center">
                <a href="https://qroo.gob.mx/sedeso/como-vamos/" target="_blank"><img class="imagen"
                        src="{{ asset('img/como2022.png') }}" /></a>
            </div>
        </div> --}}

        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
            integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js"
            integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"
            integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous">
        </script>

    </body>

    </html>
