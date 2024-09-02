<!DOCTYPE html>
<html>
<head>
	<title>Yee Barber</title>
</head>
<!-- bootstrap Style CSS File -->
<link rel="stylesheet" href="{{ asset('font/css/bootstrap.min.css')}}">
<!-- Custom Style CSS File -->
<link rel="stylesheet" type="text/css" href="{{ asset('font/css/custom-style.css')}}">
<link rel="stylesheet" type="text/css" href="{{ asset('font/css/loaders.css')}}"/>
<!-- Font-Awesome Style CSS File -->
<link rel="stylesheet" type="text/css" href="{{ asset('font/font-awesome/css/font-awesome.min.css')}}">
<body>

<!-- Page loading animation -->
<div class="loader loader-bg">
	<div class="loader-inner ball-pulse">
		<div></div>
		<div></div>
		<div></div>
	</div>
</div>

<!-- Top navigation -->
<nav class="navbar navbar-expand-md fixed-top top-nav">
	<div class="container-fluid">
		  <a class="navbar-brand" href="index.html"><strong>Yee Barber</strong></a>
		  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		    <span class="navbar-toggler-icon"><img src="img/icons/menu.png"></span>
		  </button>

		  <div class="collapse navbar-collapse" id="navbarSupportedContent">
		    <ul class="navbar-nav m-auto text-sm-center text-md-center">
		      <li class="nav-item">
		        <a class="nav-link" href="#home">Home <span class="sr-only">(current)</span></a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="#services">Services</a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="#about">About</a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="#price">Prices</a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="#testimonial">Testimonials</a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="/booking">Booking</a>
		      </li>
          <li class="nav-item">
		        <a class="nav-link" href="/login">Login</a>
		      </li>
		    </ul>
		  </div>	
		  
	</div>
</nav>

<!-- Intro Three -->
<section id="home" class="intro intro-bg bg-overlay parallax">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 col-md-12 caption-two-panel ml-auto pt-5">
				<div class="intro-caption mt-5">
				<h1 class="text-white mb-2">It's not really hard to stand out in crowd</h1>
				<p class="text-white mb-4"> These are the voyages of the Starship Enterprise. Its five-year mission: to explore strange new worlds, to seek out new life and new civilizations, to boldly go where no man has gone before.</p>
				<a class="btn btn-primary text-white mr-3">Explore More</a>
			</div>
		</div>
	</div>
</section>

<!-- Info block 1 -->
<section id="services" class="info-section text-white bg-right bg-dark">
	<div class="container">
		<div class="row">
			<div class="col-md-8">
				<div class="head-box">
					<h2 class="font-abril ">Services We offered!</h2>
				</div>
				<div class="three-panel-block mt-5">
					<div class="row">
						<div class="col-lg-6 col-md-6 col-sm-6">
							<div class="service-block mb-5">
								<i class="icon-box mb-3 float-left w-100"><img src="img/icons/scissors.png" class="img-fluid"></i>
								<h3 class="text-primary">Scissor Cut</h3>
								<p>Never in all their history have men been able truly to conceive of the world as one a single sphere</p>
							</div>
						</div>
						<div class="col-lg-6 col-md-6 col-sm-6">
							<div class="service-block mb-5">
								<i class="icon-box mb-3 float-left w-100"><img src="img/icons/razor-1.png" class="img-fluid"></i>
								<h3 class="text-primary">Razor Cut</h3>
								<p>Never in all their history have men been able truly to conceive of the world as one a single sphere</p>
							</div>
						</div>
						<div class="col-lg-6 col-md-6 col-sm-6">
							<div class="service-block mb-5">
								<i class="icon-box mb-3 float-left w-100"><img src="img/icons/brush.png" class="img-fluid"></i>
								<h3 class="text-primary">Head Shave</h3>
								<p>Never in all their history have men been able truly to conceive of the world as one a single sphere</p>
							</div>
						</div>
						<div class="col-lg-6 col-md-6 col-sm-6">
							<div class="service-block">
								<i class="icon-box mb-3 float-left w-100"><img src="img/icons/hair-clip.png" class="img-fluid"></i>
								<h3 class="text-primary">Clipper Cut</h3>
								<p>Never in all their history have men been able truly to conceive of the world as one a single sphere</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		
	</div>
</section>

<!-- Content block 1 -->
<section id="about" class="copy-content-sec sec-bg-02 h-100">
	<div class="container">
		<div class="row">
			<div class="col-lg-5 col-md-12 copy-container ml-auto">
				<div class="copy-content pr-4">
					<h2 class="font-abril text-primary">
						Who We Are
					</h2>
					<p class="lead ml-2">
						Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
					</p>
					<p class="ml-2">
						Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
					</p>
					<p class="mt-4 ml-2">
						<a href="#" class="text-primary">Read More</a>
					</p>
				</div>
			</div>
		</div>
	</div>
</section>

<!-- Info block 2 -->
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
						<p class="px-4">Never in all their history have men been able truly to conceive of the world as one a single sphere</p>
					</div>
				</div>
				<div class="col-lg-6 col-md-6 col-sm-6 pr-md-5 mb-4">
					<div class="service-block-bg text-center p-3">
						<div class="price-count font-abril"><span>$</span>27</div>
						<h3>Shave</h3>
						<p class="px-4">Never in all their history have men been able truly to conceive of the world as one a single sphere</p>
					</div>
				</div>
				<div class="col-lg-6 col-md-6 col-sm-6 pl-md-5 mb-4">
					<div class="service-block-bg text-center p-3">
						<div class="price-count font-abril"><span>$</span>20</div>
						<h3>Moustache </h3>
						<p class="px-4">Never in all their history have men been able truly to conceive of the world as one a single sphere</p>
					</div>
				</div>
				<div class="col-lg-6 col-md-6 col-sm-6 pr-md-5">
					<div class="service-block-bg text-center p-3">
						<div class="price-count font-abril"><span>$</span>15</div>
						<h3>Beard Trim</h3>
						<p class="px-4">Never in all their history have men been able truly to conceive of the world as one a single sphere</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>



<!-- Testimonial Block 01-->
<section id="testimonial" class="testimonial-section sec-bg-04 py-5 h-100">
    <div class="container">
        <div class="row">
            <div class="head-box text-center mb-3 col-md-12 mt-5">
                <h2 class="font-abril">What Our Clients Say About Us</h2>
            </div>
        </div>
        <div class="row">
            <!-- Card 1 -->
            <div class="col-md-4">
				<div class="card text-center" style="width: 18rem; margin: 20px auto;">
					<!-- เพิ่มรูปภาพที่นี่ -->
					<img src="path_to_your_image.jpg" class="card-img-top" alt="Image Description">
				
					<div class="card-body">
						
                        @foreach($users as $user)
                        <div class="col-md-4">
                            <div class="card text-center" style="width: 18rem; margin: 20px auto;">
                                <img src="{{ asset('storage/' . $user->image) }}" class="card-img-top" alt="{{ $user->name }}">
                                <div class="card-body">
                                    <h5 class="card-title">{{ $user->name }}</h5>
                                    <p class="card-text">เบอร์โทร: {{ $user->phone }}</p>
                                    <a href="/booking" class="btn btn-primary">จองเลย</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
					</div>
				</div>
			</div>
				
            <!-- Card 2 -->
			<div class="col-md-4">
			<div class="card text-center" style="width: 18rem; margin: 20px auto;">
				<div class="card-body">
					<h5 class="card-title">Vehicles</h5>
					<p class="card-text">View and manage your vehicles</p>
					<a href="#" class="btn btn-primary">My Vehicles</a>
				</div>
			</div>
		</div>
            <!-- Card 3 -->
			<div class="col-md-4">
            <div class="card text-center" style="width: 18rem; margin: 20px auto;">
				<div class="card-body">
					<h5 class="card-title">Vehicles</h5>
					<p class="card-text">View and manage your vehicles</p>
					<a href="#" class="btn btn-primary">My Vehicles</a>
				</div>
			</div>
        </div>
    </div>
</section>


<!-- Contact Block -->
<section id="contact" class="contact-section h-100 bg-dark">
	
	<div class="container py-5">
	  <div class="col-lg-8 col-md-10 col-sm-12 form-sec bg-white rounded shadow my-5 p-5 mx-auto">
		<form>
		  <h2 class="mb-4 text-center text-primary">จองเลย</h2>
		  <div class="row">
			<div class="col-md-6">
			  <div class="form-group">
				<label class="sr-only" for="fullName">ชื่อ-สกุล</label>
				<input class="form-control" id="fullName" placeholder="ชื่อ-สกุล" onfocus="this.placeholder=''" onblur="this.placeholder='ชื่อ-สกุล'" type="text">
			  </div>
			</div>
			<div class="col-md-6">
			  <div class="form-group">
				<label class="sr-only" for="service">การบริการ</label>
				<select class="form-control" id="service">
				  <option value="" disabled selected>การบริการ</option>
				  <option value="service1">Service 1</option>
				  <option value="service2">Service 2</option>
				  <option value="service3">Service 3</option>
				</select>
			  </div>
			</div>
		  </div>
		  
		  <div class="row">
			<div class="col-md-6">
			  <div class="form-group">
				<label class="sr-only" for="date">วันที่</label>
				<input class="form-control" id="date" placeholder="วันที่" onfocus="this.placeholder=''" onblur="this.placeholder='วันที่'" type="date">
			  </div>
			</div>
			<div class="col-md-6">
			  <div class="form-group">
				<label class="sr-only" for="time">เวลา</label>
				<input class="form-control" id="time" placeholder="เวลา" onfocus="this.placeholder=''" onblur="this.placeholder='เวลา'" type="time">
			  </div>
			</div>
		  </div>
		  
		  <div class="row">
			<div class="col-md-12">
			  <div class="form-group">
				<label class="sr-only" for="phone">เบอร์โทรติดต่อ</label>
				<input class="form-control" id="phone" placeholder="เบอร์โทรติดต่อ" onfocus="this.placeholder=''" onblur="this.placeholder='เบอร์โทรติดต่อ'" type="tel">
			  </div>
			</div>
		  </div>
		  
		  <div class="row">
			<div class="col-md-12">
			  <div class="form-group">
				<label class="sr-only" for="message">ความต้องการเพิ่มเติม</label>
				<textarea class="form-control" id="message" placeholder="ความต้องการเพิ่มเติม" rows="4" onfocus="this.placeholder=''" onblur="this.placeholder='ความต้องการเพิ่มเติม'"></textarea>
			  </div>
			</div>
		  </div>
		  
		  <div class="row">
			<div class="col-md-12 text-center">
			  <button class="btn btn-primary btn-capsul px-4">บันทึก</button>
			</div>
		  </div>
		</form>
	  </div>
	</div>
  </section>
  



<!-- Javascript Files  -->
<script  src="https://code.jquery.com/jquery-3.2.1.min.js" ></script>
<script src="{{ asset('font/js/bootstrap.min.js')}}" ></script>
<script async deffer type="text/javascript" src="https://maps.google.com/maps/api/js?key= AIzaSyB52BfJHBtqiqYBn_D4ZUqujiWxAOiRyTc&callback=initMap"></script>
<script src="{{ asset('font/js/core.js')}}"></script>
<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>