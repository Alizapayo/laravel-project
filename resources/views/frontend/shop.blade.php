<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Yee Barber</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('font/css/bootstrap.min.css') }}">
    <!-- Custom Styles -->
    <link rel="stylesheet" href="{{ asset('font/css/custom-style.css') }}">
    <!-- Loaders CSS -->
    <link rel="stylesheet" href="{{ asset('font/css/loaders.css') }}">
    <!-- Font-Awesome CSS -->
    <link rel="stylesheet" href="{{ asset('font/font-awesome/css/font-awesome.min.css') }}">
    <!-- Additional CSS for enhanced design -->
    <style>
        /* Navigation Bar */
        .navbar {
            background-color: #333;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }
        .navbar-nav .nav-link {
            color: #fff;
            font-weight: bold;
            transition: color 0.3s ease;
        }
        .navbar-nav .nav-link:hover {
            color: #f0ad4e;
        }

        /* Testimonial Section */
        .testimonial-section {
            background: url('{{ asset('img/testimonial-bg.jpg') }}') no-repeat center center/cover;
            color: #ffc107;
            padding: 60px 0;
        }
        .card {
            border: none;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        .card:hover {
            transform: translateY(-10px);
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.2);
        }
        .card-img-top {
            height: 200px;
            object-fit: cover;
        }
        .testimonial-section .card-title {
            color: #0a0a0a;
        }

        /* Contact Section */
        .contact-section {
            background-color: #333;
            color: #fd7e14;
            padding: 60px 0;
        }
        .form-sec {
            background: rgba(255, 255, 255, 0.9);
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
        }
        .contact-section .form-control {
            color: #212529;
        }

        /* General Styles */
        .btn-primary {
            background-color: #f0ad4e;
            border-color: #f0ad4e;
            transition: background-color 0.3s ease, border-color 0.3s ease;
        }
        .btn-primary:hover {
            background-color: #ec971f;
            border-color: #ec971f;
        }
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
                                <li class="nav-item"><a class="nav-link" href="/login">Login</a></li>
            </ul>
        </div>
    </div>
</nav>

<!-- Intro Section -->
<section id="home" class="intro intro-bg bg-overlay parallax">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-12 caption-two-panel ml-auto pt-5">
                <div class="intro-caption mt-5">
                    <h1 class="text-white mb-2">It's not really hard to stand out in the crowd</h1>
                    <p class="text-white mb-4">Explore strange new worlds, seek out new life and new civilizations, to boldly go where no man has gone before.</p>
                    <a href="#" class="btn btn-primary text-white mr-3">Explore More</a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Services Section -->
<section id="services" class="info-section text-white bg-right bg-dark">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="head-box">
                    <h2 class="font-abril">Services We Offer!</h2>
                </div>
                <div class="three-panel-block mt-5">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="service-block-bg mb-5">
                                <img src="{{ asset('img/icons/scissors.png') }}" class="img-fluid mb-3" alt="Scissor Cut">
                                <h3 class="text-primary">Scissor Cut</h3>
                                <p>Explore strange new worlds.</p>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="service-block-bg mb-5">
                                <img src="{{ asset('img/icons/razor-1.png') }}" class="img-fluid mb-3" alt="Razor Cut">
                                <h3 class="text-primary">Razor Cut</h3>
                                <p>Explore strange new worlds.</p>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="service-block-bg mb-5">
                                <img src="{{ asset('img/icons/brush.png') }}" class="img-fluid mb-3" alt="Head Shave">
                                <h3 class="text-primary">Head Shave</h3>
                                <p>Explore strange new worlds.</p>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="service-block-bg">
                                <img src="{{ asset('img/icons/hair-clip.png') }}" class="img-fluid mb-3" alt="Clipper Cut">
                                <h3 class="text-primary">Clipper Cut</h3>
                                <p>Explore strange new worlds.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- About Section -->
<section id="about" class="copy-content-sec sec-bg-02 h-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-5 col-md-12 copy-container ml-auto">
                <div class="copy-content pr-4">
                    <h2 class="font-abril text-primary">Who We Are</h2>
                    <p class="lead ml-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    <p class="ml-2">Explore strange new worlds, seek out new life and new civilizations, to boldly go where no man has gone before.</p>
                    <p class="mt-4 ml-2"><a href="#" class="text-primary">Read More</a></p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Pricing Section -->
<section id="price" class="info-section sec-bg-03 bg-overlay">
    <div class="container text-white">
        <div class="head-box text-center mb-5">
            <h2 class="font-abril">Our Jaw Drop Prices</h2>
        </div>
        <div class="three-panel-block my-4">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6 pl-md-5 mb-4">
                    <div class="service-block-bg text-center p-3">
                        <div class="price-count font-abril"><span>$</span>39</div>
                        <h3>Haircut</h3>
                        <p>Explore strange new worlds.</p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 pr-md-5 mb-4">
                    <div class="service-block-bg text-center p-3">
                        <div class="price-count font-abril"><span>$</span>27</div>
                        <h3>Shave</h3>
                        <p>Explore strange new worlds.</p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 pl-md-5 mb-4">
                    <div class="service-block-bg text-center p-3">
                        <div class="price-count font-abril"><span>$</span>20</div>
                        <h3>Moustache</h3>
                        <p>Explore strange new worlds.</p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 pr-md-5">
                    <div class="service-block-bg text-center p-3">
                        <div class="price-count font-abril"><span>$</span>15</div>
                        <h3>Beard Trim</h3>
                        <p>Explore strange new worlds.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Testimonials Section -->
<section id="testimonial" class="testimonial-section sec-bg-04 py-5 h-100">
    <div class="container">
        <div class="row">
            <div class="head-box text-center mb-3 col-md-12 mt-5">
                <h2 class="font-abril">Our Barber</h2>
            </div>
        </div>
        <div class="row">
            @foreach($users as $user)
                <div class="col-md-4">
                    <div class="card text-center" style="width: 18rem; margin: 20px auto;">
                        <img src="{{ asset($user->image) }}" class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title">{{ $user->name }}</h5>
                            <p class="card-text">เบอร์โทร: {{ $user->phone }}</p>
                            <a href="/booking?user_id={{ $user->id }}&user_name={{ urlencode($user->name) }}" class="btn btn-primary">จองเลย</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        
    
</section>

<!-- Contact Section -->
<section id="contact" class="contact-section h-100 bg-dark">
    <div class="container py-5">
        
    </div>
</section>



<!-- Javascript Files -->
<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script src="{{ asset('font/js/bootstrap.min.js') }}"></script>
<script async defer src="https://maps.google.com/maps/api/js?key=AIzaSyB52BfJHBtqiqYBn_D4ZUqujiWxAOiRyTc&callback=initMap"></script>
<script src="{{ asset('font/js/core.js') }}"></script>
<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
