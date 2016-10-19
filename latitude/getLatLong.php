<!DOCTYPE html>
<html>
  <head>
    <style>
      #map {
        height: 400px;
        width: 100%;
       }
    </style>
  </head>
  <body>
    <h3>My Google Maps Demo</h3>
    <div id="map"></div>
    <script>

      function initMap() {
        var uluru = {lat: 31.4501121, lng: 74.3088879};
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 4,
          center: uluru
        });
        var marker = new google.maps.Marker({
          position: uluru,
          map: map
        });
      }

    </script>
    <script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD5c9GhEcckzgj2zzzHws8ehf2vLFYJt9Q&callback=initMap">
    </script>
  </body>
</html>
<?php 

// Address
$address = 'khkhar chowk township lahore';

// Get JSON results from this request
$geo = file_get_contents('http://maps.googleapis.com/maps/api/geocode/json?address='.urlencode($address).'&sensor=false');

// Convert the JSON to an array
$geo = json_decode($geo, true);

if ($geo['status'] == 'OK') {
  // Get Lat & Long
  echo $latitude = $geo['results'][0]['geometry']['location']['lat'];
  echo $longitude = $geo['results'][0]['geometry']['location']['lng'];
}
?>