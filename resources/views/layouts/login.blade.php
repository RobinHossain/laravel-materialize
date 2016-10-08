<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Login CRM</title>

    <!-- CSS  -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="css/app.css" type="text/css" rel="stylesheet" media="screen,projection"/>
</head>
<body class="light-blue loaded">
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
<!--  Scripts-->
<script src="js/app.js"></script>

</body>
</html>
