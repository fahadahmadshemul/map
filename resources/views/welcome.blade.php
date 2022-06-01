<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Get Location</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="main-content">
        <button id="LocationButton" class="btn btn-info">Save Location</button>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        //show current location
        document.getElementById('LocationButton').addEventListener("click", () => {
            // Try HTML5 geolocation.
            
          });
        $('body').on('click', '#LocationButton', function (){
            // if (navigator.geolocation) {
            //   navigator.geolocation.getCurrentPosition(
            //     (position) => {
            //     //   const pos = {
            //     //     lat: position.coords.latitude,
            //     //     lng: position.coords.longitude,
            //     //   };
            //       console.log(lat: position.coords.latitude);

            //       $.ajax({
            //         url: 'save-location/'+pos,
            //         method: 'get',
            //         success: function(result){
            //             console.log(result);
            //         }
            //         });
            //     },
            //     () => {
            //       handleLocationError(true, infoWindow, map.getCenter());
            //     }
            //   );
            // } else {
            //   // Browser doesn't support Geolocation
            //   handleLocationError(false, infoWindow, map.getCenter());
            // }

            if ("geolocation" in navigator){ //check geolocation available 
                //try to get user current location using getCurrentPosition() method
                navigator.geolocation.getCurrentPosition(function(position){ 
                    var lat = position.coords.latitude;
                    var lng = position.coords.longitude;

                    $.ajax({
                         url: 'save-location/'+lat+'/'+lng,
                         method: 'get',
                         success: function(result){
                             console.log(result);
                         }
                        });
                });
            }else{
                console.log("Browser doesn't support geolocation!");
            }
        });
    </script>
</body>
</html>