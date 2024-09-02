<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'Yee Barber')</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('font/css/bootstrap.min.css') }}">
    <!-- Custom Styles -->
    <link rel="stylesheet" href="{{ asset('font/css/custom-style.css') }}">
    <!-- Loaders CSS -->
    <link rel="stylesheet" href="{{ asset('font/css/loaders.css') }}">
    <!-- Font-Awesome CSS -->
    <link rel="stylesheet" href="{{ asset('font/font-awesome/css/font-awesome.min.css') }}">
    <style>
        /* Add any additional styles here */
    </style>
</head>
<body>

<!-- Page Loading Animation -->
<div class="loader loader-bg">
    <div class="loader-inner ball-pulse">
        <div></div>
        <div></div>
        <div></div>
    </div>
</div>

<!-- Top Navigation -->
<nav class="navbar navbar-expand-md fixed-top top-nav">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{ url('/') }}"><strong>Yee Barber</strong></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"><img src="{{ asset('img/icons/menu.png') }}" alt="Menu"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav m-auto text-center">
                <li class="nav-item"><a class="nav-link" href="#home">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="#services">Services</a></li>
                <li class="nav-item"><a class="nav-link" href="#about">About</a></li>
                <li class="nav-item"><a class="nav-link" href="#price">Prices</a></li>
                <li class="nav-item"><a class="nav-link" href="#testimonial">Testimonials</a></li>
                <li class="nav-item"><a class="nav-link" href="/booking">Booking</a></li>
                <li class="nav-item"><a class="nav-link" href="/login">Login</a></li>
            </ul>
        </div>
    </div>
</nav>

<!-- Main Content -->
<div class="content">
    @yield('content')
</div>

<!-- Javascript Files -->
<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script src="{{ asset('font/js/bootstrap.min.js') }}"></script>
<script async defer src="https://maps.google.com/maps/api/js?key=AIzaSyB52BfJHBtqiqYBn_D4ZUqujiWxAOiRyTc&callback=initMap"></script>
<script src="{{ asset('font/js/core.js') }}"></script>
<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
