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
		<!-- Header -->
		<header class="masthead bg" style="background-image: url('img/welcome.jpg'); background-repeat: no-repeat; background-size: cover; background-position: center center; object-fit:cover;">
			<img class="container">
			<div class="masthead-subheading">Burger Builder</div>
			<div class="masthead-heading text-uppercase">Satisfaction with a click of a button.</div>
			<a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" id="sampleClicker" href="#portfolio">SHOW ME</a>
			</div>
		</header>
		<!-- Features -->
		<section class="page-section" id="services">
			<div class="container">
				<div class="text-center">
					<br>
					<h2 class="section-heading text-uppercase">What do we offer?</h2>
					<h3 class="section-subheading text-muted">Here are our services that we guarantee you're gonna like.</h3>
					<hr>
				</div>
				<div class="row  text-center">
					<div class="col-md-4 ">
						<img class="img-fluid" src="img/combo.jpg" alt="" />				                    
						<h4 class="my-3">Combo Meals</h4>
						<p class="text-dark text-justify">Burger is not enough for your taste buds? satisfy yourself with fries, mash potato, or anything that is avaiable on our menu!</p>
					</div>
					<div class="col-md-4 ">
						<img class="img-fluid" src="img/maker.jpg" alt="" />				                    
						<h4 class="my-3">Make Your Own Burger</h4>
						<p class="text-dark text-justify">Want to customize your own burger? Just create your own burger and our top cooks will assemble and cook it for you.</p>
					</div>
					<div class="col-md-4 ">
						<img class="img-fluid" src="img/preset.jpg" alt="" />				                    
						<h4 class="my-3">Burger Presets</h4>
						<p class="text-dark text-justify">Too lazy to make your own burger? Fear not, we got you covered! Select from our burger presets made by our staff fit for everyone's appetite.</p>
					</div>
				</div>
			</div>
		</section>
		<!-- Jumbotron -->
		<div class="jumbotron bg-dark jumbotron-fluid" style="padding-bottom:2px;padding-top:0px;margin-bottom:0px;">
			<div class="container">
				<h1 class="text-center text-light display-4">Top Burger Creations of the Week</h1>
			</div>
		</div>
		<!-- Carousel -->
		<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
			<ol class="carousel-indicators">
				<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
				<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
				<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
			</ol>
			<div class="carousel-inner">
				<div class="carousel-item active">
					<img class="d-block w-100" src="img/slider1.jpg" alt="First slide">
					<div class="carousel-caption d-none bg-dark d-md-block" id="test">
						<h5>The Monster</h5>
						<p>By: Antoine Cooper</p>
					</div>
				</div>
				<div class="carousel-item">
					<img class="d-block w-100" src="img/slider2.jpg" alt="Second slide">
					<div class="carousel-caption d-none bg-dark d-md-block">
						<h5>Chicken Sandwich Deluxe</h5>
						<p>By: Anonymous</p>
					</div>
				</div>
				<div class="carousel-item">
					<img class="d-block w-100" src="img/slider3.jpg" alt="Third slide">
					<div class="carousel-caption d-none bg-dark d-md-block">
						<h5>Vegetarian's Favorite</h5>
						<p>By: Jericho Gesmundo</p>
					</div>
				</div>
			</div>
			<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
			</a>
			<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
			<span class="carousel-control-next-icon" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
			</a>
		</div>
		<!-- Portfolio -->
		<section class="page-section bg-light" id="portfolio">
			<div class="container">
				<div class="text-center">
					<br>
					<h2 class="section-heading text-uppercase">Top selections for the month of October</h2>
					<h3 class="section-subheading text-muted">Combo Meals & Burger Presets</h3>
				</div>
				<div class="row">
					<div class="col-lg-4 col-sm-6 mb-4">
						<div class="portfolio-item">
							<a class="portfolio-link" data-toggle="modal" href="#portfolioModal1">
								<div class="portfolio-hover">
									<div class="portfolio-hover-content"></div>
								</div>
								<img class="img-fluid" src="img/combomeal1.jpg" alt="" />
							</a>
							<div class="portfolio-caption">
								<div class="portfolio-caption-heading">Chicken Burger & Fries</div>
								<div class="portfolio-caption-subheading text-muted">Combo Meals</div>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-sm-6 mb-4">
						<div class="portfolio-item">
							<a class="portfolio-link" data-toggle="modal" href="#portfolioModal2">
								<div class="portfolio-hover">
									<div class="portfolio-hover-content"></div>
								</div>
								<img class="img-fluid" src="img/combomeal2.jpg" alt="" />
							</a>
							<div class="portfolio-caption">
								<div class="portfolio-caption-heading">Cola, Burger, & Fries</div>
								<div class="portfolio-caption-subheading text-muted">Combo Meals</div>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-sm-6 mb-4">
						<div class="portfolio-item">
							<a class="portfolio-link" data-toggle="modal" href="#portfolioModal3">
								<div class="portfolio-hover">
									<div class="portfolio-hover-content"></div>
								</div>
								<img class="img-fluid" src="img/combomeal3.jpg" alt="" />
							</a>
							<div class="portfolio-caption">
								<div class="portfolio-caption-heading">Triple Beef Deluxe</div>
								<div class="portfolio-caption-subheading text-muted">Combo Meals</div>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-sm-6 mb-4 mb-lg-0">
						<div class="portfolio-item">
							<a class="portfolio-link" data-toggle="modal" href="#portfolioModal4">
								<div class="portfolio-hover">
									<div class="portfolio-hover-content"></i></div>
								</div>
								<img class="img-fluid" src="img/preset1.jpg" alt="" />
							</a>
							<div class="portfolio-caption">
								<div class="portfolio-caption-heading">Nuclear Burger</div>
								<div class="portfolio-caption-subheading text-muted">Burger Presets</div>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-sm-6 mb-4 mb-sm-0">
						<div class="portfolio-item">
							<a class="portfolio-link" data-toggle="modal" href="#portfolioModal5">
								<div class="portfolio-hover">
									<div class="portfolio-hover-content"></div>
								</div>
								<img class="img-fluid" src="img/preset2.jpg" alt="" />
							</a>
							<div class="portfolio-caption">
								<div class="portfolio-caption-heading">Dual & Onion Rings</div>
								<div class="portfolio-caption-subheading text-muted">Burger Presets</div>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-sm-6">
						<div class="portfolio-item">
							<a class="portfolio-link" data-toggle="modal" href="#portfolioModal6">
								<div class="portfolio-hover">
									<div class="portfolio-hover-content"></div>
								</div>
								<img class="img-fluid" src="img/preset3.jpg" alt="" />
							</a>
							<div class="portfolio-caption">
								<div class="portfolio-caption-heading">The Simple Classic</div>
								<div class="portfolio-caption-subheading text-muted">Burger Presets</div>
							</div>
						</div>
					</div>
				</div>
				<center><a class="btn btn-primary btn-xl text-uppercase smooth-scroll" id="sampleClicker" href="burgerpresets.php">more</a></center>
				<br>
			</div>
		</section>
		<!-- Sample Modal Portfolio-->
		<div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="close-modal" data-dismiss="modal"><img src="img/close-icon.svg" alt="Close modal" /></div>
					<div class="container">
						<div class="row justify-content-center">
							<div class="col-lg-8">
								<div class="modal-body">
									<!-- Project Details-->
									<h2 class="text-uppercase">Chicken Burger & Fries</h2>
									<p class="item-intro text-muted">Combo Meals</p>
									<img class="img-fluid d-block mx-auto" src="img/combomeal1.jpg" alt="" />
									<p>Chicken burger sandwich with fries as sides, we also offer free drinks at your choice!
									</p>
									<h3>Price: 499 PHP</h3>
									<button class="btn" disabled><i class="fas fa-cart-plus"></i> Add to cart</button>
									<br>
									<small class="text-danger">This item is already sold out!</small>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Sample Modal Portfolio-->
		<div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="close-modal" data-dismiss="modal"><img src="img/close-icon.svg" alt="Close modal" /></div>
					<div class="container">
						<div class="row justify-content-center">
							<div class="col-lg-8">
								<div class="modal-body">
									<!-- Project Details-->
									<h2 class="text-uppercase">Cola, Burger, & Fries</h2>
									<p class="item-intro text-muted">Combo Meals</p>
									<img class="img-fluid d-block mx-auto" src="img/combomeal2.jpg" alt="" />
									<p>Classic burger served with ice cold large cola and a bucket of fries. We really mean it, a whole bucket of thick cut fries just for you!
									</p>
									<h3>Price: 699 PHP</h3>
									<button class="btn" disabled><i class="fas fa-cart-plus"></i> Add to cart</button>
									<br>
									<small class="text-danger">This item is already sold out!</small>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Sample Modal Portfolio-->
		<div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="close-modal" data-dismiss="modal"><img src="img/close-icon.svg" alt="Close modal" /></div>
					<div class="container">
						<div class="row justify-content-center">
							<div class="col-lg-8">
								<div class="modal-body">
									<!-- Project Details-->
									<h2 class="text-uppercase">Triple Beef Deluxe</h2>
									<p class="item-intro text-muted">Combo Meals</p>
									<img class="img-fluid d-block mx-auto" src="img/combomeal3.jpg" alt="" />
									<p>This is what you and your friends are waiting for! Get these three deluxe cheeseburgers for only 799 PHP!
									</p>
									<h3>Price: 799 PHP</h3>
									<button class="btn" disabled><i class="fas fa-cart-plus"></i> Add to cart</button>
									<br>
									<small class="text-danger">This item is already sold out!</small>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Sample Modal Portfolio-->
		<div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" role="dialog" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="close-modal" data-dismiss="modal"><img src="img/close-icon.svg" alt="Close modal" /></div>
					<div class="container">
						<div class="row justify-content-center">
							<div class="col-lg-8">
								<div class="modal-body">
									<!-- Project Details-->
									<h2 class="text-uppercase">Nuclear Burger</h2>
									<p class="item-intro text-muted">Burger Presets</p>
									<img class="img-fluid d-block mx-auto" src="img/preset1.jpg" alt="" />
									<p>Prepare to get destroyed! This is one of the spiciest and hottest burger we will ever offer. DONT ORDER this if you have low tolerance 
										for spicy foods.
									</p>
									<h1>Price: 449 PHP</h1>
									<button class="btn" disabled><i class="fas fa-cart-plus"></i> Add to cart</button>
									<br>
									<small class="text-danger">This item is already sold out!</small>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Sample Modal Portfolio-->
		<div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" role="dialog" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="close-modal" data-dismiss="modal"><img src="img/close-icon.svg" alt="Close modal" /></div>
					<div class="container">
						<div class="row justify-content-center">
							<div class="col-lg-8">
								<div class="modal-body">
									<!-- Project Details-->
									<h2 class="text-uppercase">Dual & Onion Ring</h2>
									<p class="item-intro text-muted">Burger Presets</p>
									<img class="img-fluid d-block mx-auto" src="img/preset2.jpg" alt="" />
									<p>Two 100% angus beef patties stacked on top each other with a cheese in between. Add on top of that loads of bacon and a generous amount of onion rings. Can you really ask for more?
									</p>
									<h1>Price: 259 PHP</h1>
									<button class="btn" disabled><i class="fas fa-cart-plus"></i> Add to cart</button>
									<br>
									<small class="text-danger">This item is already sold out!</small>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Sample Modal Portfolio-->
		<div class="portfolio-modal modal fade" id="portfolioModal6" tabindex="-1" role="dialog" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="close-modal" data-dismiss="modal"><img src="img/close-icon.svg" alt="Close modal" /></div>
					<div class="container">
						<div class="row justify-content-center">
							<div class="col-lg-8">
								<div class="modal-body">
									<!-- Project Details-->
									<h2 class="text-uppercase">The Simple Classic</h2>
									<p class="item-intro text-muted">Burger Presets</p>
									<img class="img-fluid d-block mx-auto" src="img/preset3.jpg" alt="" />
									<p>This burger is for those people who love the classic. A burger with all the right premium ingredients; nothing more, nothing less.
									</p>
									<h1>Price: 299 PHP</h1>
									<button class="btn" disabled><i class="fas fa-cart-plus"></i> Add to cart</button>
									<br>
									<small class="text-danger">This item is already sold out!</small>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

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
		        <!-- Contact form JS-->
        <script src="assets/mail/jqBootstrapValidation.js"></script>
        <script src="assets/mail/contact_me.js"></script>
	</body>
</html>