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
                        <li class="menu_item"><a href="index">Home</a></li>
                        <li class="menu_item"><a href="#">Doctors</a></li>
                        <li class="menu_item"><a href="patients">Patients</a></li>
                        <li class="menu_item"><a href="#">Services</a></li>
                        <li class="menu_item"><a href="news">Treatment</a></li>
                         <li class="menu_item"><a href="#">About us</a></li>
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
                                            @if(Auth::check())
                                            <span>Welcome</span>
                                            <a href="{{route('Logout')}}"><span>Logout</span></a>
                                            @endif
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
                                    <div class="home_title">Medical Services that you can trust</div>
                                    <div class="home_text">Doctors are medical professionals. They are qualified and trained health care professionals who diagnose and treat various health conditions in human beings. There are various branches of medicine.</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Info Boxes -->
            <div class="info">
                <div class="container">
                    <div class="row row-eq-height">
                        <!-- Info Box -->
                        <div class="col-lg-4 info_box_col">
                            <div class="info_box">
                                <div class="info_image"><img src="images/info_1.jpg" alt=""></div>
                                <div class="info_content">
                                    <div class="info_title">Consultations</div>
                                    <div class="info_text">Doctors are medical professionals. They are qualified and trained health care professionals who diagnose and treat various health conditions in human beings. There are various branches of medicine. Doctors specialize in studying and treating diseases of the different parts of the body.</div>
                                </div>
                            </div>
                        </div>
                        <!-- Info Box -->
                        <div class="col-lg-4 info_box_col">
                            <div class="info_box">
                                <div class="info_image"><img src="images/info_2.jpg" alt=""></div>
                                <div class="info_content">
                                    <div class="info_title">Emergency Care</div>
                                    <div class="info_text">Due to the unplanned nature of patient attendance, the department must provide initial treatment for a broad spectrum of illnesses and injuries, some of which may be life-threatening and require immediate attention. In some countries, emergency departments have become important entry points for those without other means of access to medical care.
                                        The emergency departments of most hospitals operate 24 hours a day, although staffing levels may be varied in an attempt to reflect patient volume.
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Info Form -->
                        <div class="col-lg-4 info_box_col">
                            <div class="info_form_container">
                                <div class="info_form_title">Make an Appointment</div>
                                <form action="{{ route('make-appointment') }}" class="info_form" id="info_form" method="post">
                                    {{ csrf_field() }}
                                    <input type="text" class="info_input" placeholder="Patient Name" name="pat_name">
                                    <!-- <select name="info_form_dep" id="info_form_dep" class="info_form_dep info_input info_select">
                                        <option>Patient Name</option>
                                        <option>Kirti</option>
                                        <option>Mihir</option>
                                        <option>Jack</option>
                                        <option>Sweety</option>
                                    </select> -->
                                    <select name="doc_id" id="info_form_doc" class="info_form_doc info_input info_select">
                                        <option value="">Doctor Name</option>
                                        @foreach($docs as $doc)
                                        <option value="{{ $doc->id }}">{{ $doc->doc_name}} </option>
                                        @endforeach
                                    </select>
                                    <input type="text" class="info_input" placeholder="Status" name="status">
                                    <input type="text" class="info_input" placeholder="Date_Time" required="required" name="date_time">
                                    <input type="text" class="info_input" placeholder="Comment" required="required" name="description">
                                    <button class="info_form_button" type="submit">Make an Appointment</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- CTA -->
            <div class="cta">
                <div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="images/cta_1.jpg" data-speed="0.8"></div>
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <div class="cta_container d-flex flex-xl-row flex-column align-items-xl-start align-items-center justify-content-xl-start justify-content-center">
                                <div class="cta_content text-xl-left text-center">
                                    <div class="cta_title">Make an appointment with one of our professional Doctors.</div>
                                </div>
                                <div class="button cta_button ml-xl-auto"><a href="{{ URL('/')}}"><span>Make Appointment</span><span>Make Appointment</span></a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Services -->
            <div class="services">
                <div class="container">
                    <div class="row">
                        <div class="col text-center">
                            <div class="section_title">Our Services</div>
                            <div class="section_subtitle">to choose from</div>
                        </div>
                    </div>
                    <div class="row icon_boxes_row">
                        <!-- Icon Box -->
                        <div class="col-xl-4 col-lg-6">
                            <div class="icon_box">
                                <div class="icon_box_title_container d-flex flex-row align-items-center justify-content-start">
                                    <div class="icon_box_icon"><img src="images/icon_1.svg" alt=""></div>
                                    <div class="icon_box_title">Cardiology</div>
                                </div>
                                <div class="icon_box_text">The term cardiology is derived from the Greek words “cardia,” which refers to the heart and “logy” meaning “study of.” Cardiology is a branch of medicine that concerns diseases and disorders of the heart, which may range from congenital defects through to acquired heart diseases such as coronary artery disease and congestive heart failure.</div>
                            </div>
                        </div>
                        <!-- Icon Box -->
                        <div class="col-xl-4 col-lg-6">
                            <div class="icon_box">
                                <div class="icon_box_title_container d-flex flex-row align-items-center justify-content-start">
                                    <div class="icon_box_icon"><img src="images/icon_2.svg" alt=""></div>
                                    <div class="icon_box_title">Gastroenterology</div>
                                </div>
                                <div class="icon_box_text">A Gastroenterologist is a physician with dedicated training and unique experience in the management of diseases of the gastrointestinal tract and liver.Gastroenterology is the study of the normal function and diseases of the esophagus, stomach, small intestine, colon and rectum, pancreas, gallbladder, bile ducts and liver. </div>
                            </div>
                        </div>
                        <!-- Icon Box -->
                        <div class="col-xl-4 col-lg-6">
                            <div class="icon_box">
                                <div class="icon_box_title_container d-flex flex-row align-items-center justify-content-start">
                                    <div class="icon_box_icon"><img src="images/icon_3.svg" alt=""></div>
                                    <div class="icon_box_title">Medical Lab</div>
                                </div>
                                <div class="icon_box_text">A medical laboratory or clinical laboratory is a laboratory where clinical pathology tests are carried out on clinical specimens to obtain information about the health of a patient to aid in diagnosis, treatment, and prevention of disease.Clinical Medical laboratories are an example of applied science, as opposed to research laboratories that focus on basic science, such as found in some academic institutions.</div>
                            </div>
                        </div>
                        <!-- Icon Box -->
                        <div class="col-xl-4 col-lg-6">
                            <div class="icon_box">
                                <div class="icon_box_title_container d-flex flex-row align-items-center justify-content-start">
                                    <div class="icon_box_icon"><img src="images/icon_4.svg" alt=""></div>
                                    <div class="icon_box_title">Dental Care</div>
                                </div>
                                <div class="icon_box_text">Dental or oral health is concerned with your teeth, gums and mouth. The goal is to prevent complications such as tooth decay (cavities) and gum disease and to maintain the overall health of your mouth.
                                    A healthy mouth, free of infections, injuries and other problems with teeth and gums, is important in maintaining your overall health.
                                </div>
                            </div>
                        </div>
                        <!-- Icon Box -->
                        <div class="col-xl-4 col-lg-6">
                            <div class="icon_box">
                                <div class="icon_box_title_container d-flex flex-row align-items-center justify-content-start">
                                    <div class="icon_box_icon"><img src="images/icon_5.svg" alt=""></div>
                                    <div class="icon_box_title">Surgery</div>
                                </div>
                                <div class="icon_box_text">Description Surgery is a medical specialty that uses operative manual and instrumental techniques on a patient to investigate or treat a pathological condition such as a disease or injury, to help improve bodily function or appearance or to repair unwanted ruptured areas.</div>
                            </div>
                        </div>
                        <!-- Icon Box -->
                        <div class="col-xl-4 col-lg-6">
                            <div class="icon_box">
                                <div class="icon_box_title_container d-flex flex-row align-items-center justify-content-start">
                                    <div class="icon_box_icon"><img src="images/icon_6.svg" alt=""></div>
                                    <div class="icon_box_title">Neurology</div>
                                </div>
                                <div class="icon_box_text">Description Neurology is a branch of medicine dealing with disorders of the nervous system. Neurology deals with the diagnosis and treatment of all categories of conditions and disease involving the central and peripheral nervous systems, including their coverings, blood vessels, and all effector tissue, such as muscle.</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Departments -->
        <div class="departments">
            <div class="container">
                <div class="row">
                    <div class="col text-center">
                        <div class="section_title">Our Departments</div>
                        <div class="section_subtitle">to choose from</div>
                    </div>
                </div>
                <div class="row dept_row">
                    <div class="col">
                        <div class="dept_slider_container_outer">
                            <div class="dept_slider_container">
                                <!-- Slider -->
                                <div class="owl-carousel owl-theme dept_slider">
                                    <!-- Slide -->
                                    <div class="owl-item dept_item">
                                        <div class="dept_image"><img src="images/dept_1.jpg" alt=""></div>
                                        <div class="dept_content">
                                            <div class="dept_title">Neonatology</div>
                                            <div class="dept_link"><a href="neonatology">Read More</a></div>
                                        </div>
                                    </div>
                                    <!-- Slide -->
                                    <div class="owl-item dept_item">
                                        <div class="dept_image"><img src="images/dept_2.jpg" alt=""></div>
                                        <div class="dept_content">
                                            <div class="dept_title">Dentistry</div>
                                            <div class="dept_link"><a href="dentist">Read More</a></div>
                                        </div>
                                    </div>
                                    <!-- Slide -->
                                    <div class="owl-item dept_item">
                                        <div class="dept_image"><img src="images/dept_3.jpg" alt=""></div>
                                        <div class="dept_content">
                                            <div class="dept_title">Orthopedics</div>
                                            <div class="dept_link"><a href="orthopedic">Read More</a></div>
                                        </div>
                                    </div>
                                    <!-- Slide -->
                                    <div class="owl-item dept_item">
                                        <div class="dept_image"><img src="images/dept_4.jpg" alt=""></div>
                                        <div class="dept_content">
                                            <div class="dept_title">Laboratory</div>
                                            <div class="dept_link"><a href="laboratory">Read More</a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Dept Slider Nav -->
                            <div class="dept_slider_nav"><i class="fa fa-chevron-right" aria-hidden="true"></i></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
         <!-- FAQ & News -->
        <div class="stuff">
            <div class="container">
                <div class="row">
                    <!-- FAQ -->
                    <div class="col-lg-7">
                        <div class="faq">
                            <div class="faq_title">Simple Treatment</div>

                            <div class="faq_subtitle">read all about it</div>
                            <div class="elements_accordions">
                                <div class="accordions">
                                    <div class="accordion_container">
                                        <div class="accordion d-flex flex-row align-items-center active">
                                            <div>Blood Pressure</div>
                                        </div>
                                        <div class="accordion_panel">
                                            <div>
                                                <p>Rarely, people with chronic high blood pressure might have symptoms such as:
                                                <ul>
                                                    <li>Dull headaches</li>
                                                    <li>Dizzy spells</li>
                                                    <li>Nosebleeds</li>
                                                </ul>
                                                <b>Treatment</b>
                                                The Dietary Approaches to Stop Hypertension (DASH) diet is one example of a food plan prescribed by doctors to keep blood pressure in order. The focus is on low-sodium and low-cholesterol foods such as fruits, vegetables, and whole grains.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion_container">
                                        <div class="accordion d-flex flex-row align-items-center">
                                            <div>Tuber Culosis</div>
                                        </div>
                                        <div class="accordion_panel">
                                            <div>
                                                <p>TB bacteria or Mycobacterium tuberculosis most commonly grow in the lungs, and can cause severe symptoms such as:
                                                <ul>
                                                    <li>Coughing up blood (mucus from deep inside the lungs)
                                                        A bad cough that lasts 3 weeks or longer.
                                                    </li>
                                                    <li>Weakness or fatigue.</li>
                                                    <li>Sweating at night.</li>
                                                    <li>Pain in the chest.</li>
                                                    <li>Weight loss.</li>
                                                    <li>No appetite.</li>
                                                    <li>Chills and Fever.</li>
                                                </ul>
                                                <b>Treatment</b>
                                                Drug treatment is one of the most efficient ways to treat this infectious diseases. For patients with Latent TB infections doctors generally prescribe an antibiotics called isoniazid for preventing the latent infection from becoming active.
                                                Active TB Diseases will be deadly if it is left untreated. The procedure involves in taking a combination of ethambutol, INH, priftin and pyrazinamide for a term of three months followed by a mix of INH and pyrazinamide for 12 months.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion_container">
                                        <div class="accordion d-flex flex-row align-items-center">
                                            <div>Dengue</div>
                                        </div>
                                        <div class="accordion_panel">
                                            <div>
                                                <p><b>What are the symptoms of dengue?</b>
                                                    It is a severe flu-like illness beginning with a sudden onset of fever and painful headache. Other symptoms include a skin rash, muscle and joint pain, nausea and vomiting. In extreme cases, it can lead to excessive bleeding (hemorrhaging) and death.
                                                    <b>What is the treatment for dengue? Are there any vaccines available?</b>
                                                    There is no specific treatment available for dengue; appropriate management of symptoms is crucial, especially maintaining an adequate volume of body fluids.
                                                    There is a commercially available vaccine against dengue, which is available in Mexico, Brazil, El Salvador, and the Philippines. The WHO has not taken a formal position on the universal use of the vaccine, but has recommended that endemic countries should consider introduction of the vaccine into their national immunization programs. While there are several vaccine candidates currently under research and development worldwide, one should continue to take adequate precautions to prevent mosquito bites and dengue.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion_container">
                                        <div class="accordion d-flex flex-row align-items-center active">
                                            <div>Heart Attack</div>
                                        </div>
                                        <div class="accordion_panel">
                                            <div>
                                                <p><b>Symptoms for a heart attack may include:</b>
                                                <ul>
                                                    <li>Chest pain or discomfort</li>
                                                    <li>Nausea</li>
                                                    <li>Sweating</li>
                                                    <li>Lightheadedness or dizziness</li>
                                                    <li>Fatigue</li>
                                                </ul>
                                                <b>Your doctor may also prescribe medications to treat your heart attack, including:</b>
                                                <ul>
                                                    <li>Aspirin</li>
                                                    <li>Drugs to break up clots</li>
                                                    <li>Antiplatelet and anticoagulants, also known as blood thinners</li>
                                                    <li>Painkillers</li>
                                                    <li>Nitroglycerin</li>
                                                    <li>Blood pressure medication</li>
                                                </ul>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Latest News -->
                    <div class="col-lg-5">
                        <div class="news">
                            <div class="news_title">Latest News</div>
                            <div class="news_subtitle">read all about it</div>
                            <div class="news_container">
                                <!-- Latest News Post -->
                                <div class="latest d-flex flex-row align-items-start justify-content-start">
                                    <div>
                                        <div class="latest_image"><img src="images/latest_1.jpg" alt=""></div>
                                    </div>
                                    <div class="latest_content">
                                        <div class="latest_title"><a href="news.html">Heart Attack</a></div>
                                        <div class="latest_info">
                                            <ul class="d-flex flex-row align-items-start justify-content-start">
                                                <li><a href="#">By Dr. Atul Gupta</a></li>
                                                <li><a href="#">April 25, 2019</a></li>
                                            </ul>
                                        </div>
                                        <div class="latest_comments"><a href="#">To Naman Sharma</a></div>
                                    </div>
                                </div>
                                <!-- Latest News Post -->
                                <div class="latest d-flex flex-row align-items-start justify-content-start">
                                    <div>
                                        <div class="latest_image"><img src="images/latest_2.jpg" alt=""></div>
                                    </div>
                                    <div class="latest_content">
                                        <div class="latest_title"><a href="news.html">Blood Pressure</a></div>
                                        <div class="latest_info">
                                            <ul class="d-flex flex-row align-items-start justify-content-start">
                                                <li><a href="#">By Balasubramanya</a></li>
                                                <li><a href="#">March 05, 2019</a></li>
                                            </ul>
                                        </div>
                                        <div class="latest_comments"><a href="#">To Mysha</a></div>
                                    </div>
                                </div>
                                <!-- Latest News Post -->
                                <div class="latest d-flex flex-row align-items-start justify-content-start">
                                    <div>
                                        <div class="latest_image"><img src="images/latest_3.jpg" alt=""></div>
                                    </div>
                                    <div class="latest_content">
                                        <div class="latest_title"><a href="news.html">Orthopedics</a></div>
                                        <div class="latest_info">
                                            <ul class="d-flex flex-row align-items-start justify-content-start">
                                                <li><a href="#">By Dr. Chandrashekar</a></li>
                                                <li><a href="#">May 25, 2019</a></li>
                                            </ul>
                                        </div>
                                        <div class="latest_comments"><a href="#">To Nyra</a></div>
                                    </div>
                                </div>
                            </div>
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
                                <div class="footer_about_text">Doctors are medical professionals. They are qualified and trained health care professionals who diagnose and treat various health conditions in human beings. There are various branches of medicine. </div>
                                <div class="footer_social">
                                    <ul class="d-flex flex-row align-items-center justify-content-start">
                                        <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                                    </ul>
                                </div>
                                <div class="copyright">
                                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
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
                                    <form action="{{ route('post-quick-feedback') }}" class="footer_contact_form" id="footer_contact_form" method="post">
                                        {{ csrf_field() }}
                                        <div class="d-flex flex-xl-row flex-column align-items-center justify-content-between">
                                            <input type="text" class="footer_contact_input" placeholder="Name" required="required" name="name">
                                            <input type="email" class="footer_contact_input" placeholder="E-mail" required="required" name="email">
                                        </div>
                                        <textarea class="footer_contact_input footer_contact_textarea" placeholder="Feedback" required="required" name="feedback"></textarea>
                                        <textarea class="footer_contact_input footer_contact_textarea" placeholder="Comment" required="required" name="comments"></textarea>
                                        <button class="footer_contact_button" type="submit">Give Feedback</button>
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
                                        <li class="active"><a href="index">Home</a></li>
                                        <li><a href="doctors">Doctors</a></li>
                                        <li><a href="patients">Patients</a></li>
                                        <li><a href="services">Services</a></li>
                                        <li><a href="news">Treatment</a></li>
                                        <li><a href="about">About</a></li>
                                        <li><a href="contact">Contact</a></li>
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
        <script src="plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
        <script src="plugins/easing/easing.js"></script>
        <script src="plugins/parallax-js-master/parallax.min.js"></script>
        <script src="js/custom.js"></script>
    </body>
</html>