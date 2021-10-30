<?php

include "cart-badge.php";
include "connect.php";

if(isset($_POST["insertForm"]))
				{
					mysqli_query($link, "insert into tbl_feedback values(NULL, '$_POST[senderName]','$_POST[senderEmail]','$_POST[senderMessage]',current_timestamp, default)");

					?>
					<script type="text/javascript">
					window.location.href="contact_finish.php";
					
					</script>
					
					<?php

				}

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
		<link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    />
		<!-- Google Fonts Roboto -->
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
		<!-- Bootstrap core CSS -->
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<!-- Material Design Bootstrap -->
		<link rel="stylesheet" href="css/mdb.min.css">
		<!-- Custom styles -->
		<link rel="stylesheet" href="css/style.css">
		<!-- Custom styles -->
		<link rel="stylesheet" href="css/contactstyle.css">
		<!-- Custom JavaScript -->
		
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
		<!-- FAQ -->
		<div class=" faq-container text-justify">
			<h1 class="text-left">
			Frequently Asked Questions:
			<h1>
			<h2 class="font-weight-bold">Q: How will I know that my order is arriving?</h2>
			<h3 class="">A: You can go to our "Track" page located at our navigation bar to track your order. Furthermore, our riders would notify you through text. Click here to go to tracking page.</h3>
			<h2 class="font-weight-bold">Q: Can I still cancel my order?</h2>
			<h3 class="">A: You can still cancel your order if it's still in "Queue" but if it's being "Made" or "On-Delivery" you can't cancel it anymore. Go to "Track" page to see your order status.</h3>
			<h2 class="font-weight-bold">Q: Do I need to make an account to be able to order food?</h2>
			<h3 class="">A: No, you can order as a guess but we still advice you make your own account when ordering to keep track of your orders and we can even recommend you some burger builds that you will like.</h3>
			<h2 class="font-weight-bold">Q: How do I give my feedback regarding a product or service?</h2>
			<h3 class="">A: After an item has been delivered to you, on the "Track" page you will be able to give a feedback that our human resource would review.</h3>
			<h2 class="font-weight-bold">Q: Do you have options for vegetarians?</h2>
			<h3 class="">A: Yes, we offer non-meat options for our vegetarian costumers both on our preset selections and our burger builder.</h3>
			<h2 class="font-weight-bold">Q: There is something that is not available on the menu, can I make a request?</h2>
			<h3 class="">A: You can send a message to us using our contact form below. We do not guarantee that your item requested would be added immediately.</h3>
			<hr>
			<h5> Your question wasn't answered above? Leave a message below and our customer support would answer you as soon as possible. <h5>
		</div>
		<!-- Contact-->
		<section class="page-section " style="background-image: url('img/contactBG.jpg'); background-repeat: no-repeat; background-size: cover; background-position: center center; object-fit:cover; " id="contact"   >
			<div class="mask rgba-gradient align-items-center contact-padding">
				<div class="container justify-content-center">
					<div class="text-center ">
						<h2 class="section-heading text-uppercase text-white">Contact Us</h2>
						<h3 class="section-subheading text-light">Don't hesitate to ask if you have specific questions.</h3>
					</div>
					<form  id="contactForm" name="contactForm" method="post">
						<center>
						<div class="form-group form-margin-fix">
							
							<input onkeyup="NameChecker()" id="senderName" class="form-control" name="senderName" type="text" placeholder="Your Full Name*"/>
							<p class="text-left text-form-color" id="nameError"></p>
						</div>
						<div class="form-group form-margin-fix">
							<input onkeyup="EmailChecker()" class="form-control" id="senderEmail" name="senderEmail" type="email" placeholder="Your Email*" />
							<p class="text-left text-form-color" id="emailError"></p>
						</div>
						<div class="form-group form-group-textarea mb-md-0">
							<textarea onkeyup="MessageChecker()" class="form-control" id="senderMessage" name="senderMessage" placeholder="Your Message*"></textarea>
							<p class="text-left text-form-color" id="messageError"></p>
						</div>
						<div class="text-center">
							<div id="success"></div>
							<button class="btn btn-primary btn-xl text-uppercase contact-btn-margin" id="insertForm" name="insertForm" onclick="return FormValidate()" value="submit" type="submit">SUBMIT</button>
						</div>
					</form>
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
						<a class="btn bg-info btn-xl text-uppercase smooth-scroll" id="sampleClicker" href="#">F.A.Q</a>
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
		<script src="js/script.js"></script>
	</body>
</html>