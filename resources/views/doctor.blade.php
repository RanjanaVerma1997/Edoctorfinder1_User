<!DOCTYPE html>
<html lang="en">
<head>
<title>Doctors</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Health medical template project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
<link rel="stylesheet" type="text/css" href="styles/about.css">
<link rel="stylesheet" type="text/css" href="styles/about_responsive.css">
</head>
<body>

<div class="super_container">

	<!-- Menu -->

	<div class="menu trans_500">
		<div class="menu_content d-flex flex-column align-items-center justify-content-center text-center">
			<div class="menu_close_container"><div class="menu_close"></div>
			</div>
			<ul>
				<li class="menu_item"><a href="home">Home</a></li>
				<li class="menu_item"><a href="doctors">Doctors</a></li>
				<li class="menu_item"><a href="patients">Patients</a></li>
				<li class="menu_item"><a href="services">Services</a></li>
				<li class="menu_item"><a href="news">Treatment</a></li>
				<li class="menu_item"><a href="about">About us</a></li>
				<li class="menu_item"><a href="contact">Contact Us</a></li>
			</ul>
		</div>
		<div class="menu_social">
			<ul>
				<li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
				<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
				<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
				<li><a href="#"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
				<li><a href="#"><i class="fa fa-behance" aria-hidden="true"></i></a></li>
				<li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
			</ul>
		</div>
	</div>
	
	<!-- Home -->

	<div class="home">
		<!-- <div class="background_image" style="background-image:url(images/about.jpg)"></div> -->
		<div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="images/about.jpg" data-speed="0.8"></div>

		<!-- Header -->

		<header class="header" id="header">
			<div>
				<div class="header_top">
					<div class="container">
						<div class="row">
							<div class="col">
								<div class="header_top_content d-flex flex-row align-items-center justify-content-start">
									<div class="logo">
										<a href="#">E-Doctor Finder</a>	
									</div>
									<div class="header_top_extra d-flex flex-row align-items-center justify-content-start ml-auto">
										<div class="header_top_nav">
											<ul class="d-flex flex-row align-items-center justify-content-start">
												<li><a href="login">Login</a></li>
												<li><a href="register">Register</a></li>
											</ul>
										</div>
									</div>
									<div class="hamburger ml-auto"><i class="fa fa-bars" aria-hidden="true"></i></div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="header_nav" id="header_nav_pin">
					<div class="header_nav_inner">
						<div class="header_nav_container">
							<div class="container">
								<div class="row">
									<div class="col">
										<div class="header_nav_content d-flex flex-row align-items-center justify-content-start">
											<nav class="main_nav">
												<ul class="d-flex flex-row align-items-center justify-content-start">
													<li><a href="/">Home</a></li>
													<li class="active"><a href="doctors">Doctors</a></li>
													<li><a href="patients">Patients</a></li>
													<li><a href="services">Services</a></li>
													<li><a href="news">Treatment</a></li>
													<li><a href="about">About Us</a></li>
													<li><a href="contact">Contact Us</a></li>
												</ul>
											</nav>
											
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>	
			</div>
		</header>

		<div class="home_container">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="home_content">
							<div class="home_title">Doctors</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="doctors">
		<div class="doctors_image"><img src="{{ URL::to('public/images/doctors.jpg')}}" alt=""></div>
		<div class="container">
			<div class="row">
				<div class="col text-center">
					<div class="section_title">Our Doctors</div>
					<div class="section_subtitle">to choose from</div>
				</div>
			</div>
			<div class="row doctors_row">
				
				@foreach($doctor as $doctor)
				<!-- Doctor -->
				<div class="col-xl-3 col-md-6">
					<div class="doctor">
						<div class="doctor_image"><a href="{{ route('doctor_image',['id'=>$doctor->id])}}"><img src="{{asset('images/'.$doctor->doc_image)}}" height="280" width="220"></a></div>
						<div class="doctor_content">
							<div class="doctor_name"><a href="#">{{$doctor->doc_name}}</a></div>
							<div class="doctor_title">{{$doctor->doc_education}}</div>
							<div class="doctor_link"><a href="{{ route('doctor_image',['id'=>$doctor->id])}}">+</a></div>
						</div>
					</div>
				</div>
				@endforeach

			</div>
				
			<div class="row">
				<div class="col">
					<div class="button doctors_button ml-auto mr-auto"><a href="all_doctors"><span>see all doctors</span><span>see all doctors</span></a></div>
				</div>
			</div>
		</div>
	</div>
	</div>

<!-- Footer -->

	<footer class="footer">
		<div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="images/footer.jpg" data-speed="0.8"></div>
		<div class="footer_content">
			<div class="container">
				<div class="row">

					<!-- Footer About -->
					<div class="col-lg-3 footer_col">
						<div class="footer_about">
							<div class="logo">
								<a href="#">E-Doctor Finder</a>	
							</div>
							<div class="footer_about_text">Doctors are medical professionals. They are qualified and trained health care professionals who diagnose and treat various health conditions in human beings. There are various branches of medicine.</div>
							<div class="footer_social">
								<ul class="d-flex flex-row align-items-center justify-content-start">
							
									<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
									
									<li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
								</ul>
							</div>
							<div class="copyright"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> Kevalya Infotech
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
</div>
						</div>
					</div>
					
					<!-- Footer Contact -->
					<div class="col-lg-5 footer_col">
						<div class="footer_contact">
							<div class="footer_contact_title">Quick Feedback</div>
							<div class="footer_contact_form_container">
								<form action="#" class="footer_contact_form" id="footer_contact_form">
									<div class="d-flex flex-xl-row flex-column align-items-center justify-content-between">
										<input type="text" class="footer_contact_input" placeholder="Name" required="required">
										<input type="email" class="footer_contact_input" placeholder="E-mail" required="required">
									</div>
									<textarea class="footer_contact_input footer_contact_textarea" placeholder="Feedback" required="required"></textarea>
									<textarea class="footer_contact_input footer_contact_textarea" placeholder="Comment" required="required"></textarea>
									
									<button class="footer_contact_button"><a href="{{ URL('/')}}">Give Feedback</a></button>
								</form>
							</div>
						</div>
					</div>

					<!-- Footer Hours -->
					<div class="col-lg-4 footer_col">
						<div class="footer_hours">
							<div class="footer_hours_title">Opening Hours</div>
							<ul class="hours_list">
								<li class="d-flex flex-row align-items-center justify-content-start">
									<div>Monday – Thursday</div>
									<div class="ml-auto">8.00 A.M – 8.00 P.M</div>
								</li>
								<li class="d-flex flex-row align-items-center justify-content-start">
									<div>Friday</div>
									<div class="ml-auto">8.00 A.M - 6.30 P.M</div>
								</li>
								<li class="d-flex flex-row align-items-center justify-content-start">
									<div>Saturday</div>
									<div class="ml-auto">10.00 A.M – 5.00 P.M</div>
								</li>
								<li class="d-flex flex-row align-items-center justify-content-start">
									<div>Sunday</div>
									<div class="ml-auto">9.30 A.M – 3.00 P.M</div>
	
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="footer_bar">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="footer_bar_content d-flex flex-sm-row flex-column align-items-lg-center align-items-start justify-content-start">
							<nav class="footer_nav">
								<ul class="d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-start">
									<li class="active"><a href="/">Home</a></li>
									<li><a href="doctors">Doctors</a></li>
									<li><a href="patients">Patients</a></li>
									<li><a href="services">Services</a></li>
									<li><a href="news">Treatment</a></li>
									<li><a href="about">About Us</a></li>
									<li><a href="contact">Contact Us</a></li>
								</ul>
							</nav>
							<div class="footer_links">
								<ul class="d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-start">
									<li><a href="#">Login</a></li>
									<li><a href="#">Register</a></li>
								</ul>
							</div>
							<div class="footer_phone ml-lg-auto">
								<i class="fa fa-phone" aria-hidden="true"></i>
								<span>+91 9033769329</span>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</footer>
</div>

<script src="js/jquery-3.3.1.min.js"></script>
<script src="styles/bootstrap4/popper.js"></script>
<script src="styles/bootstrap4/bootstrap.min.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="plugins/parallax-js-master/parallax.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyCIwF204lFZg1y4kPSIhKaHEXMLYxxuMhA"></script>
<script src="js/contact.js"></script>
</body>
</html>