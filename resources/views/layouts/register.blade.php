<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Registration Dashboard</title>

    <!-- CSS  -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="{{ url('css/app.css') }}" type="text/css" rel="stylesheet" media="screen,projection"/>
</head>
<body class="loaded">
<div class="container">
    <div class="row">
        <div class="col l4 m3"></div>
        <div class="col l4 s12 m6">

            <div id="loader-wrapper">
                <div id="loader"></div>
                <div class="loader-section section-left"></div>
                <div class="loader-section section-right"></div>
            </div>
            <div id="login-page" class="row">
                <div class="col s12 z-depth-4 card-panel">
                    @yield('content')
                </div>
            </div>
        </div>
        <div class="col l4 m3"></div>
    </div>
</div>


<!--  Scripts-->
<script src="{{ url('js/app.js') }}"></script>

</body>
</html>
