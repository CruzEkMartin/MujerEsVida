<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.2/dist/leaflet.css" integrity="sha256-sA+zWATbFveLLNqWO2gtiw3HL/lh1giY/Inf1BJ0z14=" crossorigin="" />
    <script src="https://unpkg.com/leaflet@1.9.2/dist/leaflet.js" integrity="sha256-o9N1jGDZrf5tS+Ft4gbIK7mYMipq9lqpVJ91xHSyKhg=" crossorigin=""></script>

    <style>
        #map {
            height: 100%;
        }

        img.huechange {
            filter: hue-rotate(120deg);
        }

        /* 
        * Optional: Makes the sample page fill the window. 
        */
        html,
        body {
            height: 100%;
            margin: 0;
            padding: 0;
        }


        /* modals*/
        .modal-header.Encabezado-Modal {
            display: flex;
            align-items: flex-start;
            justify-content: space-between;
            padding: .25rem;
            border-bottom: 1px solid #e9ecef;
            border-top-left-radius: 0.3rem;
            border-top-right-radius: 0.3rem;
            background: #AB0A3D;
            color: white;
        }

        .modal-lg {
            max-width: 93%;
        }

        .modal-footer {
            padding: .5rem;
        }
    </style>

</head>

<body>

    <div class="container-fluid" style="background-image: url('/img/back.png'); width: 100%;" >
        <div class="row justify-content-between align-items-center">

            <img class="img-fluid" style="width: 3%" src="img/logo_qroo.png" alt="">

            <img class="img-fluid " style="width: 12%" src="img/logo_unidos.png" alt="">

            <img class="img-fluid " style="width: 10%" src="img/logo_mujer_es_vida2.png" alt="">

            <img class="img-fluid" style="width: 10%" src="img/logo_sedeso.png" alt="">

        </div>
    </div>

    <div id="map"></div>

    <div id="mymodal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header Encabezado-Modal">
                    <h5 class="modal-title" id="titulo"></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Cerrar"><span aria-hidden="true">&times;</span></button>

                </div>
                <div class="modal-body" id="info"></div>
                <div class="modal-footer bg-light btn-toolbar justify-content-end " role="toolbar">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
</body>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>



<script>
    var map = L.map('map').setView([19.758289, -88.704269], 8);
    var latitud = 0;
    var longitud = 0;

    
    L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
        maxZoom: 18,
        attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
    }).addTo(map);
</script>

</html>