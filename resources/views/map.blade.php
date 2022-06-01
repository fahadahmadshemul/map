<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <title>Map</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />
    <style>
      /* Always set the map height explicitly to define the size of the div
       * element that contains the map. */
      #map {
        height: 100%;
      }
      /* Optional: Makes the sample page fill the window. */
      html, body {
        height: 100%;
        margin: 0;
        padding: 0;
      }
      #floating-panel {
        position: absolute;
        top: 10px;
        left: 0%;
        z-index: 5;
        background-color: #fff;
        padding: 5px;
        border: 1px solid #999;
        text-align: center;
        font-family: 'Roboto','sans-serif';
        line-height: 30px;
        padding-left: 10px;
        max-width: 470px;
        width: 100%;
      }

      /*-----tooltip */
      .tooltip {
        position: relative;
        display: inline-block;
        opacity: 1 !important;
      }

      .tooltip .tooltiptext {
        visibility: hidden;
        width: 140px;
        background-color: #555;
        color: #fff;
        text-align: center;
        border-radius: 6px;
        padding: 5px;
        position: absolute;
        z-index: 1;
        bottom: 150%;
        left: 50%;
        margin-left: -75px;
        opacity: 0;
        transition: opacity 0.3s;
      }

      .tooltip .tooltiptext::after {
        content: "";
        position: absolute;
        top: 100%;
        left: 50%;
        margin-left: -5px;
        border-width: 5px;
        border-style: solid;
        border-color: #555 transparent transparent transparent;
      }

      .tooltip:hover .tooltiptext {
        visibility: visible;
        opacity: 1;
      }
      
      @media (max-width:576px) {
          
        #floating-panel {
            position: static;
            max-width: 100%;
            width: 100%;
            min-width: 100%;
        }
      }
    </style>
  </head>
  <body>
    <div id="floating-panel" class="p-4">
        <a href="{{route('save-data')}}" class="btn btn-success">Save Data</a>
    </div>
    
    <div id="map"></div>
    <script>
      let infoWindow;
      function initMap() {
        var directionsService = new google.maps.DirectionsService;
        var directionsDisplay = new google.maps.DirectionsRenderer;
        var map = new google.maps.Map(document.getElementById('map'), {
          mapTypeControl: true,
          center: { lat: 21.3891, lng: 39.8579 },
          zoom: 9,
          clickableIcons:true,
        });
        directionsDisplay.setMap(map);
        infoWindow = new google.maps.InfoWindow();

        var onChangeHandler = function() {
          calculateAndDisplayRoute(directionsService, directionsDisplay);
        };
        //document.getElementById('submit').addEventListener('click', onChangeHandler);
        //document.getElementById('end').addEventListener('click', onChangeHandler);

        //show current location
        $(window).on('load', function (){
            if (navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(
              (position) => {
                const pos = {
                  lat: position.coords.latitude,
                  lng: position.coords.longitude,
                };
                
                var marker = new google.maps.Marker({
                  position: pos,
                  map: map,
                  title: 'Current Location'
                });
                infoWindow.setPosition(pos);
                infoWindow.setContent("Current Location.");
                infoWindow.open(map);
                map.setCenter(pos);
              },
              () => {
                handleLocationError(true, infoWindow, map.getCenter());
              }
            );
          } else {
            // Browser doesn't support Geolocation
            handleLocationError(false, infoWindow, map.getCenter());
          }
        });
      }

      function calculateAndDisplayRoute(directionsService, directionsDisplay) {
        directionsService.route({
          origin: document.getElementById('start').value,
          destination: document.getElementById('end').value,
          travelMode: 'DRIVING'
        }, function(response, status) {
          if (status === 'OK') {
            directionsDisplay.setDirections(response);
          } else {
            window.alert('Directions request failed due to ' + status);
          }
        });
      }
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD0W9P-Gl4lKE_LVYPEm9Ppacd1jvhI0j0&callback=initMap">
    </script>
  </body>
</html>