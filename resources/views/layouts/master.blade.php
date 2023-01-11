<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="{{asset('css/style.css')}}" rel="stylesheet" type="text/css">

    <title> @yield('title')</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&amp;display=swap" rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Red+Hat+Display:wght@500&family=Ramabhadra:wght@900&family=Archivo+Black&display=swap"
        rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/css/toastr.css" rel="stylesheet" />

    @yield('style')
</head>

<body>

    @include('layouts.header')

    @section('content')
    @show
    @include('layouts.footer')

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

    <script src="https://npmcdn.com/tether@1.2.4/dist/js/tether.min.js"></script>

    <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js"
        integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous">
    </script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js"
        integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous">
    </script>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js"
        integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous">
    </script>

 

    <script
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBqgE_Gu8x26dFBZBcZvprKOef-X_aiAX4&libraries=places&callback=initAutocomplete">
    </script>

    <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>

    <script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/js/toastr.js"></script>


    </script>

    <script>



    $(document).ready(function() {
        $('#add_more').click(function() {
            var form_name = $(this).data("id");
            var url = form_name == 'child' ? "{{url('/schoolchildinfo')}}" : "{{url('/office')}}";

            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                type: "post",
                data: $('#submit_form').serialize(),
                url: url,

                success: function(data) {
                    $('#submit_form')[0].reset();
                    toastr.success("Info Added successfully");
                    $('#latitude').val("");
                    $('#longitude').val("");
                    $('#latitude2').val("");
                    $('#longitude2').val("");

                    
                    var  directionsDisplay = new google.maps.DirectionsRenderer();
                    var pakistan = new google.maps.LatLng(30.3753, 69.3451);
                    var mapOptions = {
                        zoom: 6,
                        center: pakistan
                    };
                    map = new google.maps.Map(document.getElementById('map-canvas'),
                        mapOptions);
                    directionsDisplay.setMap(map);

                }
            });
        });

    });



    var lat1;
    var lat2;
    var long1;
    var long2;

    function initialize() {
        var input = document.getElementById('pickup_location');
        var autocomplete = new google.maps.places.Autocomplete(input);

        autocomplete.addListener('place_changed', function() {

            // Get place info
            var place = autocomplete.getPlace();

            $('#latitude').val(place.geometry.location.lat());
            $('#longitude').val(place.geometry.location.lng());
        });
    }
    google.maps.event.addDomListener(window, 'load', initialize);

    function initialize2() {
        var input = document.getElementById('drop_off_location');
        var autocomplete = new google.maps.places.Autocomplete(input);
        autocomplete.addListener('place_changed', function() {

            // Get place info
            var place = autocomplete.getPlace();

            $('#latitude2').val(place.geometry.location.lat());
            $('#longitude2').val(place.geometry.location.lng());

            var lat1 = $('#latitude').val();
            var long1 = $('#longitude').val();
            var lat2 = $('#latitude2').val();
            var long2 = $('#longitude2').val();

            $('#routebtn').click();
        });
    }
    google.maps.event.addDomListener(window, 'load', initialize2);

    function mapLocation() {
        var directionsDisplay;
        var directionsService = new google.maps.DirectionsService();
        var map;

        function initialize() {
            directionsDisplay = new google.maps.DirectionsRenderer();
            var pakistan = new google.maps.LatLng(30.3753, 69.3451);
            var mapOptions = {
                zoom: 6,
                center: pakistan
            };
            map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);
            directionsDisplay.setMap(map);
            google.maps.event.addDomListener(document.getElementById('routebtn'), 'click', calcRoute);
        }

        function calcRoute() {


            var start = new google.maps.LatLng($('#latitude').val(), $('#longitude').val());
            var end = new google.maps.LatLng($('#latitude2').val(), $('#longitude2').val());
            // var pinImage = new google.maps.MarkerImage("http://www.googlemapsmarkers.com/v1/009900/");

            var startMarker = new google.maps.Marker({
                position: start,
                map: map,
                strokeColor: "blue",
                draggable: true
            });
            var endMarker = new google.maps.Marker({
                position: end,
                map: map,
                // icon: pinImage,
                draggable: true
            });


            var bounds = new google.maps.LatLngBounds();
            bounds.extend(start);
            bounds.extend(end);
            map.fitBounds(bounds);
            var request = {
                origin: start,
                destination: end,
                travelMode: google.maps.TravelMode.DRIVING
            };
            directionsService.route(request, function(response, status) {
                if (status == google.maps.DirectionsStatus.OK) {
                    directionsDisplay.setDirections(response);
                    directionsDisplay.setMap(map);
                } else {
                    alert("Directions Request from " + start.toUrlValue(6) + " to " + end.toUrlValue(6) +
                        " failed: " + status);
                }
            });
        }

        google.maps.event.addDomListener(window, 'load', initialize);
    }
    mapLocation();



    </script>
</body>

</html>