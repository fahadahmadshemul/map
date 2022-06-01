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
    <div class="content col-md-8 mx-auto mt-3 mb-3">
        <h3 class="text-center">Save Data</h3>
        <form action="{{route('save-info')}}" method="post">
            @csrf
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="">Latitude</label>
                        <input type="text" readonly id="latitude" name="latitude" class="form-control">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="">Longitude</label>
                        <input type="text" readonly id="longitude" name="longitude" class="form-control">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="">A</label>
                        <input type="text" name="a" class="form-control">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="">B</label>
                        <input type="text" name="b" class="form-control">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="">c</label>
                        <input type="text" name="c" class="form-control">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="">D</label>
                        <input type="text" name="d" class="form-control">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="">E</label>
                        <input type="text" name="e" class="form-control">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="">F</label>
                        <input type="text" name="f" class="form-control">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="">G</label>
                        <input type="text" name="g" class="form-control">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="">H</label>
                        <input type="text" name="h" class="form-control">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="">I</label>
                        <input type="text" name="i" class="form-control">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="">J</label>
                        <input type="text" name="j" class="form-control">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="">K</label>
                        <input type="text" name="k" class="form-control">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="">L</label>
                        <input type="text" name="l" class="form-control">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="">M</label>
                        <input type="text" name="m" class="form-control">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="">N</label>
                        <input type="text" name="n" class="form-control">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="">O</label>
                        <input type="text" name="o" class="form-control">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="">P</label>
                        <input type="text" name="p" class="form-control">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="">Q</label>
                        <input type="text" name="q" class="form-control">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="">R</label>
                        <input type="text" name="r" class="form-control">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="">S</label>
                        <input type="text" name="s" class="form-control">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="">T</label>
                        <input type="text" name="t" class="form-control">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="">U</label>
                        <input type="text" name="u" class="form-control">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="">V</label>
                        <input type="text" name="v" class="form-control">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="">W</label>
                        <input type="text" name="w" class="form-control">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="">X</label>
                        <input type="text" name="x" class="form-control">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="">Y</label>
                        <input type="text" name="y" class="form-control">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="">z</label>
                        <input type="text" name="z" class="form-control">
                    </div>
                </div>
            </div>
            <div class="text-center p-4">
                <input type="submit" value="Submit" class="btn btn-success">
            </div>
        </form>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        $(window).on('load', function (){
            if ("geolocation" in navigator){ //check geolocation available 
                //try to get user current location using getCurrentPosition() method
                navigator.geolocation.getCurrentPosition(function(position){ 
                    var lat = position.coords.latitude;
                    var lng = position.coords.longitude;

                    $('#latitude').val(lat);
                    $('#longitude').val(lng);
                });
            }else{
                console.log("Browser doesn't support geolocation!");
            }
        });
    </script>
</body>
</html>