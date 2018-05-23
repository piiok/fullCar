<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="imagenes/icon.ico" type="image/x-icon" />
    <title>Ofrecer Ruta</title>
    <style>
      .search{
        position: fixed;
        width: 50vw;
        z-index: 1;
        top: 5vh;
        left:25vw;
      }
      .continuar{
        position: fixed;
        z-index: 1;
        bottom:5vh;
        left:30vw;
        width:40vw; 
      }
      #map {
        height: 100%;
      }
      html, body {
        height: 100%;
        margin: 0;
        padding: 0;
      }
    </style>
  </head>
  <body>
    <div id="map"></div>
     <script> 

      function initMap() {
        var mapCanvas = document.getElementById("map");
        var myCenter=new google.maps.LatLng(7.0996656,-73.1095528);
        var mapOptions = {center: myCenter, zoom: 13};
        
        var map = new google.maps.Map(mapCanvas, mapOptions);
          // google.maps.event.addListener(map, 'click', function(event) {
          //   placeMarker(map, event.latLng,marker);
          // });
        var marker = new google.maps.Marker({
          position: myCenter,
          map: map,
        });
        var infowindow = new google.maps.InfoWindow({
            content: 'Cacique El Centro Comercial'
          });
          infowindow.open(map,marker);
          
        }
    </script>

    <!-- Input de buscar-->
    <form action="OfrecerRutaLoad.php" method="get" accept-charset="utf-8">

      <input class="search" type="search" name="search" disabled="true" value="Cacique El Centro Comercial, Transversal 93, Bucaramanga, Santander">

      
      <script src="https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/markerclusterer.js">
      </script> 

      <!-- Librería google maps api -->
      <script async defer
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDG0UHJOVdceIrurCcXNeWtkYg9--hhXbs&callback=initMap">
      </script>
      
      <!-- boton continuar -->
      <button class="continuar" type="submit">Finalizar</button>
    </form>
  </body>
</html>
