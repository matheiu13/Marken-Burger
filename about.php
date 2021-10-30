<?php

include "cart-badge.php";

?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta http-equiv="x-ua-compatible" content="ie=edge">
		<title>Burger Builder: Heaven's Creation</title>
		<!-- MDB icon -->
		<link rel="icon" href="img/favicon.ico" type="image/x-icon">
		<!-- Font Awesome -->
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
		<!-- Google Fonts Roboto -->
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
		<!-- Bootstrap core CSS -->
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<!-- Material Design Bootstrap -->
		<link rel="stylesheet" href="css/mdb.min.css">
		<!-- Custom styles -->
		<link rel="stylesheet" href="css/style.css">
		<!-- Custom styles -->
		<link rel="stylesheet" href="css/aboutstyle.css">
		<!-- Custom JavaScript -->
		<script src="js/script.js"></script>
	</head>
	<body>
		<!-- Start your project here-->  
		<!-- Navigation -->
		<nav class="navbar navbar-expand-sm navbarBG-custom navbar-light sticky-top scrolling-navbar" id="mainNav">
			<img class="navbar-brand" src="img/logo.png" height="70px" width="160px">
			<button class="navbar-toggler" data-toggle="collapse" data-target="#navbarMenu">
			<span class="navbar-toggler-icon active">
			</button>
			<div class="collapse navbar-collapse" id="navbarMenu">
				<ul class="navbar-nav text-uppercase ml-auto">
				<li class="nav-item">
					<a href="index.php" class="nav-link">Home</a>
				</li>
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Shop</a>
					<div class="dropdown-menu dropdown-primary" aria-labelledby="navbarDropdownMenuLink">
						<a class="dropdown-item text-dark" style="font-size:25px;" href="burgerpresets.php">Burger Preset</a>
						<a class="dropdown-item" style="font-size:25px;" href="builder.php">Burger Builder</a>
					</div>
				</li>
				<li class="nav-item">
					<a href="track.php" class="nav-link">Track</a>
				</li>
				<li class="nav-item">
					<a href="about.php" class="nav-link">About</a>
				</li>
				<li class="nav-item">
					<a href="contact.php" class="nav-link">Contact</a>
				</li>
				<li class="nav-item">
					<a href="#!" class="nav-link"><i class="fas fa-user"></i></a>
				</li>
				<li class="nav-item">
					<a href="cart.php" class="nav-link"><i class="fas fa-shopping-cart"><span class="badge badge-danger ml-2"><?php echo $numms; ?></span></i></a>
				</li>
			</div>
		</nav>
		<!--navigation end-->
		
		<!-- Image description -->
		
		<section class="container-fluid bg-dark" style="padding:50px;" id="team">
			<div class="container ">
				<div class="text-left">
					<h1 class="section-heading text-white">Our Story</h1>
				</div>
				<div class="row">
					<div class="col-sm">
						<img src="img/developers/TIP.jpg" alt="" class="w-100 mb-4 border border-md border-white shadow-sm">
					</div>
					<div class="col-sm">
						<p class="text-white text-justify company-description">Burger Builders was founded in 2021 by the Technological Institute of the Philippines, Information Technology Graduates. 
						Initially, a college project development website then turned into a start-up company after demands surge for online food companies. 
						Burger Builder was built with a simple principle; and that is to give the highest possible quality of service to all of its customers. 
						From the website design to the quality of food, Burger Builder maintains its good reputation of being one of the most transparent online food shop company. 
						Currently, Burger Builder plans to expand its company by being an online food supplier for local restaurants.</p>
					</div>
				</div>
			</div>
		</section>

		<!-- Team-->
		<section class="page-section about-padding py-5" id="team">
			<div class="container">
				<div class="text-center">
					<h1 class="section-heading text-uppercase">The Company Founding Members</h1>
				</div>
				<div class="row">
					<div class="col-lg-4">
						<div class="team-member">
							<img class="mx-auto rounded-circle bg-dark" src="img/developers/danward.jpg" alt="" />
							<h4>Danward Bautista</h4>
							<p class="text-muted">Founder</p>
							<a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-twitter"></i></a>
							<a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-facebook-f"></i></a>
							<a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-linkedin-in"></i></a>
						</div>
					</div>
					<div class="col-lg-4">
						<div class="team-member">
							<img class="mx-auto rounded-circle bg-dark" src="img/developers/mat.jpg" alt="" />
							<h4>Matheiu Perdido</h4>
							<p class="text-muted">Founder</p>
							<a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-twitter"></i></a>
							<a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-facebook-f"></i></a>
							<a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-linkedin-in"></i></a>
						</div>
					</div>
					<div class="col-lg-4">
						<div class="team-member">
							<img class="mx-auto rounded-circle bg-dark" src="img/developers/apo.jpg" alt="" />
							<h4>Jomar Apo</h4>
							<p class="text-muted">Founder</p>
							<a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-twitter"></i></a>
							<a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-facebook-f"></i></a>
							<a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-linkedin-in"></i></a>
						</div>
					</div>
					<div class="col-lg-4">
						<div class="team-member">
							<img class="mx-auto rounded-circle bg-dark" src="img/developers/julian.jpg" alt="" />
							<h4>Julian Signo</h4>
							<p class="text-muted">Founder</p>
							<a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-twitter"></i></a>
							<a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-facebook-f"></i></a>
							<a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-linkedin-in"></i></a>
						</div>
					</div>
					<div class="col-lg-4">
						<div class="team-member">
							<img class="mx-auto rounded-circle bg-dark" src="img/developers/tumpalan.jpg" alt="" />
							<h4>Kathleen Tumpalan</h4>
							<p class="text-muted">Founder</p>
							<a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-twitter"></i></a>
							<a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-facebook-f"></i></a>
							<a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-linkedin-in"></i></a>
						</div>
					</div>
					<div class="col-lg-4">
						<div class="team-member">
							<img class="mx-auto rounded-circle bg-dark" src="img/developers/sales.png" alt="" />
							<h4>Mark Sales</h4>
							<p class="text-muted">Founder</p>
							<a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-twitter"></i></a>
							<a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-facebook-f"></i></a>
							<a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-linkedin-in"></i></a>
						</div>
					</div>
					<div class="col-lg-4">
						<div class="team-member">
							<img class="mx-auto rounded-circle bg-dark" src="img/developers/dioso.jpg" alt="" />
							<h4>Johnlex Dioso</h4>
							<p class="text-muted">Founder</p>
							<a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-twitter"></i></a>
							<a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-facebook-f"></i></a>
							<a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-linkedin-in"></i></a>
						</div>
					</div>
					<div class="col-lg-4">
						<div class="team-member">
							<img class="mx-auto rounded-circle bg-dark" src="img/developers/esguerra.png" alt="" />
							<h4>James Esguerra</h4>
							<p class="text-muted">Founder</p>
							<a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-twitter"></i></a>
							<a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-facebook-f"></i></a>
							<a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-linkedin-in"></i></a>
						</div>
					</div>
					<div class="col-lg-4">
						<div class="team-member">
							<img class="mx-auto rounded-circle bg-dark" src="img/developers/fernandez.png" alt="" />
							<h4>Lyncon Fernandez</h4>
							<p class="text-muted">Founder</p>
							<a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-twitter"></i></a>
							<a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-facebook-f"></i></a>
							<a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-linkedin-in"></i></a>
						</div>
					</div>
					<div class="col-lg-4">
						<div class="team-member">
							<img class="mx-auto rounded-circle bg-dark" src="img/developers/gonzales.png" alt="" />
							<h4>Ralph Gonzales</h4>
							<p class="text-muted">Founder</p>
							<a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-twitter"></i></a>
							<a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-facebook-f"></i></a>
							<a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-linkedin-in"></i></a>
						</div>
					</div>
					<div class="col-lg-4">
						<div class="team-member">
							<img class="mx-auto rounded-circle bg-dark" src="img/developers/malilay.png" alt="" />
							<h4>Ernest Malilay</h4>
							<p class="text-muted">Founder</p>
							<a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-twitter"></i></a>
							<a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-facebook-f"></i></a>
							<a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-linkedin-in"></i></a>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-8 mx-auto text-center">
						<p class="large text-muted">Group members and their following contributions to the website are located on the website documentation.</p>
					</div>
				</div>
			</div>
		</section>
		<!-- Office location -->
		
		<section class="container-fluid grey lighten-3" style="padding:50px;" id="team">
			<div class="container ">
				<div class="text-left">
					<h1 class="section-heading ">Company Information</h1>
				</div>
				<div class="row">
					<div class="col-sm">
											<h3><b>Company Address:</b>  Penthouse 1, One Corporate Center Meralco Ave cor Julia Vargas Ave, Ortigas Center, Pasig, 1605 Metro Manila</h3>
					<h3><b>Company Phone:</b> #245-8874</h3>
					<h3><b>Email:</b> support@burgerbuilders.com</h3>
					</div>
					<div class="col-sm">
						<div id="map-container-google-8" class="z-depth-1-half map-container-5" style="height:400px;width:100%;">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3861.2651663559823!2d121.06191935107266!3d14.583960518491523!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397c81146cc8027%3A0x8f5075cefa059dca!2sLOFT%20Coworking%20Philippines!5e0!3m2!1sen!2sph!4v1604912767729!5m2!1sen!2sph" width="100%" height="100%" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
        </div>
					</div>
				</div>
			</div>
		</section>
		<!-- About -->
		<section class="page-section bg-dark"  id="about">
			<div class="container">
			<div class="row">
				<div class="col-lg-4">
					<div class="team-member">
						<h3 class="feature-title text-white">Questions? Contact us!</h3>
						<hr class="bg-white">
						<a class="btn bg-info btn-xl text-uppercase smooth-scroll" id="sampleClicker" href="contact.php">F.A.Q</a>
					</div>
				</div>
				<div class="col-lg-4">
					<div class="team-member">
						<h3 class="feature-title text-white">Our Social Media Pages</h3>
						<hr class="bg-white">
						<p class="text-light">Engage with us</p>
						<a class="btn btn-light btn-social text-dark mx-2" href="#!"><i class="fab fa-twitter"></i></a>
						<a class="btn btn-light btn-social text-dark mx-2" href="#!"><i class="fab fa-facebook-f"></i></a>
						<a class="btn btn-light btn-social text-dark mx-2" href="#!"><i class="fab fa-linkedin-in"></i></a>					
					</div>
				</div>
				<div class="col-lg-4">
					<div class="team-member">
						<h3 class="text-light">Copyright and Content</h3>
						<hr class="bg-white">
						<p class="large text-white text-justify">The contents for this page is purely used for educational and academic purposes.
							Licenses for the content of this page falls under free and non-commercial use.
							The design and style of this page is inspired or based on free content provided by MDBootstrap.
					</div>
				</div>
			</div>
		</section>
		<!-- End your project here-->
		<!-- jQuery -->
		<script type="text/javascript" src="js/jquery.min.js"></script>
		<!-- Bootstrap tooltips -->
		<script type="text/javascript" src="js/popper.min.js"></script>
		<!-- Bootstrap core JavaScript -->
		<script type="text/javascript" src="js/bootstrap.min.js"></script>
		<!-- MDB core JavaScript -->
		<script type="text/javascript" src="js/mdb.min.js"></script>
		<!-- Your custom scripts (optional) -->
		<script type="text/javascript"></script>
	</body>
</html>