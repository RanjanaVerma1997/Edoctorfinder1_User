<!DOCTYPE html>
<html lang="en">
    <head>
        <title>E-Doctor Finder</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="description" content="Health medical template project">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="../css/bootstrap4/bootstrap.min.css">
        <link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" type="text/css" href="../plugins/OwlCarousel2-2.2.1/owl.carousel.css">
        <link rel="stylesheet" type="text/css" href="../plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
        <link rel="stylesheet" type="text/css" href="../plugins/OwlCarousel2-2.2.1/animate.css">
        <link rel="stylesheet" type="text/css" href="../css/main_styles.css">
        <link rel="stylesheet" type="text/css" href="../css/responsive.css">
    </head>
    <body>
        <div class="super_container">
            <!-- Menu -->
            <div class="menu trans_500">
                <div class="menu_content d-flex flex-column align-items-center justify-content-center text-center">
                    <div class="menu_close_container">
                        <div class="menu_close"></div>
                    </div>
                    <ul>
                        <li class="menu_item"><a href="index.html">Home</a></li>
                        <li class="menu_item"><a href="#">About us</a></li>
                        <li class="menu_item"><a href="#">Doctors</a></li>
                        <li class="menu_item"><a href="patients">Patients</a></li>
                        <li class="menu_item"><a href="#">Services</a></li>
                        <li class="menu_item"><a href="news.html">Treatment</a></li>
                        <li class="menu_item"><a href="contact.html">Contact Us</a></li>
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
                <div class="background_image" style="background-image:url(images/index_hero.jpg)"></div>
                <!-- Header -->
                <header class="header" id="header">
                    <div>
                        <div class="header_top">
                            <div class="container">
                                <div class="row">
                                    <div class="col">
                                        <div class="header_top_content d-flex flex-row align-items-center justify-content-start">
                                            <div class="logo">
                                                <a href="#">E-doctor Finder</a> 
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
                                                            <li class="active"><a href="home">Home</a></li>
                                                            <li><a href="doctors">Doctors</a></li>
                                                            <li><a href="patients">Patients</a></li>
                                                            <li><a href="services">Services</a></li>
                                                            <li><a href="news">Treatment</a></li>
                                                            <li><a href="about">About</a></li>
                                                            <li><a href="contact">Contact</a></li>
                                                        </ul>
                                                    </nav>
                                                    <div class="search_content d-flex flex-row align-items-center justify-content-end ml-auto">
                                                        <form action="#" id="search_container_form" class="search_container_form">
                                                            <input type="text" class="search_container_input" placeholder="Search" required="required">
                                                            <button class="search_container_button"><i class="fa fa-search" aria-hidden="true"></i></button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </header>
                

<div style="background-image: url('images/box_3.jpg');" class="card testimonial-card">

  <!-- Background color -->
  <div  class="card-up indigo lighten-1"></div>

  <!-- Avatar -->
  <div class="avatar mx-auto white">
    <img src="{{ asset('images/'.$sing->doc_image) }}" class="rounded-circle">
  </div>

  <!-- Content -->
  <div class="card-body">
    <!-- Name -->
    <h4 class="card-title">{{ $sing->doc_name }}</h4>
    <hr>
    <!-- Quotation -->
    <p> <ul type="disc">
      <li><b>Education:</b>
    HOD - Senior Consultant - Periodontist & Laser Practitioner
    MDS Periodontist & Laser Practitioner (Biberach, Germany2010, Slovenia 2012, India 2015), Diploma & Master (SOLA) Vienna University Austria.</li>

    <li><b>Area(s) of Specialization:</b>
    He is very familiar with the latest techniques and technologies in Laser Dentistry. With his expert diagnosis to treat gum diseases and bone loss including laser gum surgery, periodontal plastic surgery, scaling/root planning, and sedation he has become a renowned doctor in a short span of time. 
    </li>

    <li><b>Experience:</b>
     Periodontist & Laser Practitioner: 10 years
      MDS Periodontist & Laser Practitioner: 9 years
    </li>
  </ul>

      </p>
  </div>

</div>
</body>
</html>