<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="imagenes/icon.ico" type="image/x-icon" />
    <title>Mapa maxtercell</title>
    <style>
      /* Always set the map height explicitly to define the size of the div
       * element that contains the map. */
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
        /*-webkit-filter: grayscale(100%);
        filter: grayscale(100%);*/   /*escala de gris*/

      }
      /* Optional: Makes the sample page fill the window. */
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
        var myCenter=new google.maps.LatLng(7.140292875841898,-73.12015504377644);
        var mapOptions = {center: myCenter, zoom: 13};
        
        var map = new google.maps.Map(mapCanvas, mapOptions);
          google.maps.event.addListener(map, 'click', function(event) {
            placeMarker(map, event.latLng,marker);
          });
        var marker = new google.maps.Marker({
          position: myCenter,
          map: map,
          //icon: image,
          //animation: google.maps.Animation.BOUNCE,
        });
        var infowindow = new google.maps.InfoWindow({
            content: 'UIS, a 26a-91, Calle 8, Bucaramanga, Santander'
          });
          infowindow.open(map,marker);
          
        }
        //var image = './images/icono.png';


        // Create an array of alphabetical characters used to label the markers.
        // var labels = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';

        // Add some markers to the map.
        // Note: The code uses the JavaScript Array.prototype.map() method to
        // create an array of markers based on a given "locations" array.
        // The map() method here has nothing to do with the Google Maps API.
        //var markers = locations.map(function(location, i) {
         // return new google.maps.Marker({
          //position: location,
          //label: labels[i % labels.length]
          //});
        //});
        // function placeMarker(map, location,marker) {
          //var marker = new google.maps.Marker({
          //  position: location,
          //  map: map
          //});
          // var latlng = new google.maps.LatLng(location.lat(),location.lng())
          // marker.setPosition(latlng);
          // var infowindow = new google.maps.InfoWindow({
            // content: 'Latitude: ' + location.lat() + '<br>Longitude: ' + location.lng()
          // });
          // infowindow.open(map,marker);
        // }
      

        // Add a marker clusterer to manage the markers.
        

    </script>
    <!-- <script> 
      function initMap() {
        //get api uses
        var directionsService = new google.maps.DirectionsService;
        var directionsDisplay = new google.maps.DirectionsRenderer;

        var waypts = [{ location: { lat: 41.94, lng: 1.56 }, stopover: true },
            { location: { lat: 41.99, lng: 1.53 }, stopover: true },
            { location: { lat: 41.98, lng: 1.52 }, stopover: true }];

        var mapa = new GMaps({
            el: '#map',
            lat: waypts[0].location.lat,
            lng: waypts[0].location.lng,
            zoom: 4
        });
        mapa.drawRoute({
            origin: [waypts[0].location.lat, waypts[0].location.lng],
            destination: [waypts[waypts.length - 1].location.lat, waypts[waypts.length - 1].location.lng],
            travelMode: 'walking',
            strokeColor: '#0054c2',
            strokeOpacity: 0.6,
            strokeWeight: 6
        });
    }

    </script>-->
    <input class="search" type="search" name="search" disabled="true" value="UIS, a 26a-91, Calle 8, Bucaramanga, Santander">
    <script src="https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/markerclusterer.js">
    </script>

    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDG0UHJOVdceIrurCcXNeWtkYg9--hhXbs&callback=initMap">
    </script>
    <button class="continuar" type="">Continuar</button>
  </body>
</html>
