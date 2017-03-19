<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="_token" content="{{ csrf_token() }}"/>
    <title>Social Login</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            padding-top : 70px;
        }
    </style>
</head>
<body>
    <div class="container">
        @yield('content')
    </div>


</body>
<script src="http://code.jquery.com/jquery-2.1.4.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAvZtQOIf5GmXC4r_DymvtBuYIGdnENXb4&callback=initMap"></script>
</html>