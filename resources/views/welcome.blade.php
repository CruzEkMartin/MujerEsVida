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

        .carousel-caption h5 {
            margin-bottom: 0;
        }

        @media (max-width: 767px) {
            .carousel-caption {
                position: relative;
                height: 110px;
                right: 0;
                bottom: 0;
                left: 0;
                padding: 15px;
                background: #ab0a3d;

            }

        }



        /* Style the Image Used to Trigger the Modal */
    </style>

</head>

<body>
    <div class="container-fluid" style="background-image: url('/img/back.png'); width: 100%;" >
        <div class="row justify-content-between align-items-center">

            <img class="img-fluid" style="width: 3%" src="img/logo_qroo.png" alt="">

            <img class="img-fluid " style="width: 12%" src="img/logo_unidos.png" alt="">

            {{-- <img class="img-fluid " style="width: 10%" src="img/logo_mujer_es_vida2.png" alt=""> --}}

            <img class="img-fluid" style="width: 10%" src="img/logo_sedeso.png" alt="">

        </div>

        <div class="row justify-content-end primario text-white ">


            {{-- @if (Route::has('login'))
                <div>
                    @auth
                        <a href="{{ url('/home') }}">Inicio</a>
                    @else
                        <a href="{{ route('login') }}">Administración</a>

                @endif
            </div>
            @endif --}}
        </div>

        </div>

        <nav class="navbar navbar-light primario">
            <a class="navbar-brand" href="#">
              <img src="img/MUJER-ES-VIDA-WHITE.png" width="69" height="30" alt="">
            </a>
          </nav>

        <div id="myCarousel" class="carousel slide " data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
                <li data-target="#myCarousel" data-slide-to="3"></li>
                <li data-target="#myCarousel" data-slide-to="4"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active ">
                    <img class="d-block w-100" src="{{ asset('img/c111.jpg') }}" alt="MujerEsVida" />
                    <div class="carousel-caption ">
                        <h4>Secretaría de Desarrollo Social</h4>
                        <p>MujerEsVida</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="{{ asset('img/c221.jpg') }}" alt="¿A quién va dirigido?" />
                    <div class="carousel-caption ">
                        <h4>¿A QUIÉN VA DIRIGIDO?</h4>
                        <p>A las personas que tengan carencia en el acceso a la alimentación y a grupos sociales
                            vulnerables.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="{{ asset('img/c331.jpg') }}" alt="Beneficios" />
                    <div class="carousel-caption">
                        <h4>BENEFICIOS</h4>
                        <p>Recibir apoyo alimentario de manera bimestral para lograr la seguridad alimentaria y nutrimental.
                        </p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="{{ asset('img/c441.jpg') }}" alt="¿En qué consiste?" />
                    <div class="carousel-caption">
                        <h4>¿EN QUÉ CONSISTE?</h4>
                        <p>En la entrega de un paquete alimentario por hogar, que contendrá productos de la canasta básica.
                        </p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="{{ asset('img/c551.jpg') }}" alt="Requisitos" />
                    <div class="carousel-caption">
                        <h4>REQUISITOS</h4>
                        <p>Radicar en los municipios, localidades y/o colonias que se establezcan en las convocatorias que
                            emita la SEDESO y soliciten su ingreso al programa.</p>
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

        <div class="row justify-content-around secundario">
            <div class="col-6 col-md-3 text-center">
                <a href="#" data-toggle="modal" data-target="#modalRegistro" data-toggle="tooltip" title="Regístrate en línea o inicia sesión"> <img class="img-fluid"
                        src="{{ asset('img/registro2023.png') }}"></img></a>
            </div>

            <div class="col-6 col-md-3 text-center">
                <a href="{{ route('modulos') }}" target="_blank"" data-toggle="tooltip" title="Localiza tu módulo para registro presencial"> <img class="img-fluid"
                        src="{{ asset('img/modulos2023.png') }}"></img></a>
            </div>

            <div class="col-sm-12 col-md-3 text-center" title="Ubica tu Centro de Entrega">
                <a href="#"><img class="imagen" src="{{ asset('img/ubicaCE2023.png') }}" /></a>
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


       
        <div id="modalLanding" class="modal">
            <div class="modal-dialog modal-lg modal-dialog-centered justify-content-center" role="document">
                <img class="modal-content" id="img01" src="{{ asset('img/REGISTRO.jpg') }}">
            </div>
        </div>

        <div id="modalRegistro" class="modal">
            <div class="modal-dialog modal-lg modal-dialog-centered justify-content-center" role="document">
                <img class="modal-content" id="img02" src="{{ asset('img/REGISTRO.jpg') }}">
            </div>
        </div>

        {{-- <div class="modal fade" id="modalLanding" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-xl  modal-dialog-centered" role="document">
              <div class="modal-content">
                <div class="modal-header bg-danger text-white">
                  <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                    <img class="imagen" src="{{ asset('img/CÓMO-VAMOS-MUJER-ESCRITORIO.jpg') }}" />
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                </div>
              </div>
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

    <script>
        var img1 = document.getElementById("img01");
        var img2 = document.getElementById("img02");

        $(document).ready(function() {
            $('#modalLanding').modal('show')
        })        
        img1.onclick = function() {
            $('#modalLanding').modal('hide');
        }
        img2.onclick = function() {
            $('#modalRegistro').modal('hide');
        }
    </script>

    </html>
