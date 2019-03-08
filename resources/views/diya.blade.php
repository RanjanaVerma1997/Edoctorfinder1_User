<!DOCTYPE html>
<html>
<head>
	<title>Patients</title>
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

	<!-- Card -->
<div style="background-image: url('images/box_3.jpg');" class="card testimonial-card">

  <!-- Background color -->
  <div  class="card-up indigo lighten-1"></div>

<div class="avatar mx-auto white">
    <img src="{{ asset('images/'.$patimg->pat_image) }}" class="rounded-circle">
  </div>

  <!-- Content -->
  <div class="card-body">
    <!-- Name -->
    <h4 class="card-title">{{ $patimg->pat_name }}</h4>
    <hr>
    <!-- Quotation -->
    <p> <ul type="disc">
      <li><b>Treatment:</b>
    	  {{$patimg->treatment}}
    </li>

    <li><b>Age:</b>
        {{$patimg->pat_age}}
    </li>

    <li><b>Email_id:</b>
        {{$patimg->pat_email_id}}
    </li>
	</ul>

    	</p>
  </div>

</div>
</body>
</html>