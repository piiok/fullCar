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
        }
        //var image = './images/icono.png';


        // Create an array of alphabetical characters used to label the markers.
        var labels = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';

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
        function placeMarker(map, location,marker) {
          //var marker = new google.maps.Marker({
          //  position: location,
          //  map: map
          //});
          var latlng = new google.maps.LatLng(location.lat(),location.lng())
          marker.setPosition(latlng);
          var infowindow = new google.maps.InfoWindow({
            content: 'Latitude: ' + location.lat() + '<br>Longitude: ' + location.lng()
          });
          infowindow.open(map,marker);
        }
      

        // Add a marker clusterer to manage the markers.
        //var markerCluster = new MarkerClusterer(map, markers,
            //{imagePath: 'https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/m'});
          //}

    </script>
    <script src="https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/markerclusterer.js">
    </script>

    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCXyvCsjT_I4FcKCIm7Bl3fJqhGYO-MDJ4&callback=initMap">
    </script>
  </body>
</html>
