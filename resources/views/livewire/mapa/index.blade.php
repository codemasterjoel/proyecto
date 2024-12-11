<div class="main-content mt-5">
    <div class="content" id="page-content-wrapper">
        <div class="container card bg-white">
            <div class="section">
                <h2 class="title text-center">MAPA DE NBC</h2>
                <div class="team">
                    <div class="row">
                        <div class="col-sm-12">
                            <div id="map" style= "width: 100%; height: 600px;" class="mb-4"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
{{-- <script>
    function initMap() 
    {
        var map = new google.maps.Map(document.getElementById('map'),
        {
            zoom: 6.5,
            center:new google.maps.LatLng(7.735217273856046,-65.326115365625),
        });
        @foreach ($nbcs as $nbc)
            var marker{{$nbc->codigo}}
            const contentString{{ $nbc->codigo }} =
                '<div id="content" style="color:black;">' +
                    '<h2 id="firstHeading" class="firstHeading">{{ $nbc->nombre }}</h2>' +
                    '<div id="bodyContent">'+
                        '<p><b>JEFE DEL NBC: </b>{{ (isset($nbc->jefe->NombreCompleto)) ? $nbc->jefe->NombreCompleto : '' }}'+
                        '<p><b>ESTADO: </b>{{ (isset($nbc->estado->nombre)) ? $nbc->estado->nombre : '' }}'+
                        '<p><b>MUNICIPIO: </b>{{ (isset($nbc->municipio->nombre)) ? $nbc->municipio->nombre : '' }}'+
                        '<p><b>PARROQUIA: </b>{{ (isset($nbc->parroquia->nombre)) ? $nbc->parroquia->nombre : '' }}'+
                        '<p><b>CONCEJOS COMUNALES: </b>{{ $nbc->cant_consejos_comunales }}'+
                        '<p><b>BASES DE MISIONES: </b>{{ $nbc->cant_bases_misiones }}'+
                    "</div>" +
                "</div>";
                const infowindow{{$nbc->codigo}} = new google.maps.InfoWindow({
                content: contentString{{$nbc->codigo}},
                });    

            marker{{$nbc->codigo}} = new google.maps.Marker({
                map: map,
                animation: google.maps.Animation.DROP,
                position: new google.maps.LatLng({{$nbc->latitud}},{{$nbc->longitud}}),
                title: '{{ $nbc->nombre }}',
            });

            marker{{$nbc->codigo}}.addListener("click", () => {
                infowindow{{$nbc->codigo}}.open({
                    anchor: marker{{$nbc->codigo}},
                    map,
                    shouldFocus: false,
                });
            });                       
        @endforeach     
    } 
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCZhH6WXRQpmvkrpZ6w-kBIQTqOwHuPncI&callback=initMap&v=weekly" defer></script> --}}

<script>
    // initialize the map on the "map" div with a given center and zoom

    var BING_KEY = 'AuhiCJHlGzhg93IqUH_oCpl_-ZUrIE6SPftlyGYUvr9Amx5nzA-WqGcPquyFZl4L'

    var map = L.map('map').setView([7.1195102, -67.0456545], 6)

    var bingLayer = L.tileLayer.bing(BING_KEY).addTo(map)
    
</script>