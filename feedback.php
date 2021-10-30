
<?php 
ob_start(); 
require 'config.php';

$view = $_POST['view'];
$name = $_POST['name'];
$comments = $_POST['comments'];
$email = $_POST['email'];
$num = $_POST['num'];


$query = mysqli_query($con, "INSERT INTO `feedback_data`(`id`, `name`, `email`, `phone`, `feedback`, `suggestions`) VALUES ('','$name','$email','$num','$view','$comments')");

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
        <!---Custom Style for page----->
        <link href="feedback_style.css" rel="stylesheet" type="text/css" media="all" />
        <link href="//fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">
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



<!------------------------USER RATING SECTION----------------------------->

<div class="col-md-6" style="margin:5rem auto;">
<h1 class="font-weight-bold" style="text-align:center; font-size:4.5rem; padding:2rem; font-family:Roboto;">User Rating</h1>
<!---------------->
<table class="table table-bordered">
    <thead >
      <tr>
        <th class="bg-success font-weight-bold w-25 p-3">Excellent</th>
        <th class="bg-primary font-weight-bold w-25 p-3">Good</th>
        <th class="bg-warning font-weight-bold w-25 p-3">Neutral</th>
        <th class="bg-danger font-weight-bold w-25 p-3">Poor</th>
      </tr>
    </thead>
    <tbody>
<?php

$excellent="SELECT count(id) AS total FROM feedback_data where feedback='excellent'";
$good="SELECT count(id) AS total2 FROM feedback_data where feedback='good'";
$neutral="SELECT count(id) AS total3 FROM feedback_data where feedback='neutral'";
$poor="SELECT count(id) AS total4 FROM feedback_data where feedback='poor'";


$result=mysqli_query($con, $excellent);
$result2=mysqli_query($con, $good);
$result3=mysqli_query($con, $neutral);
$result4=mysqli_query($con, $poor);

$values=mysqli_fetch_assoc($result);
$values2=mysqli_fetch_assoc($result2);
$values3=mysqli_fetch_assoc($result3);
$values4=mysqli_fetch_assoc($result4);

$num_rows=$values['total'];
$num_rows_two=$values2['total2'];
$num_rows_three=$values3['total3'];
$num_rows_four=$values4['total4'];



        echo "<tr>";
		echo "<td>"; echo $num_rows; echo "</td>";
		echo "<td>"; echo $num_rows_two; echo "</td>";
		echo "<td>"; echo $num_rows_three; echo "</td>";
		echo "<td>"; echo $num_rows_four; echo "</td>";
        echo "</tr>";
         
    

	
    ?>

      
    </tbody>
  </table>
  <!--------------->


<table class="table table-bordered">
    <thead class="thead-dark">
      <tr>
        <th>Picture</th>
        <th>Name, and Comment</th>
        <th>Given Rate</th>
      </tr>
    </thead>
    <tbody>

<?php
   
    $res=mysqli_query($con, "select * from feedback_data");
  	while($row=mysqli_fetch_array($res))
	{
        echo "<tr>";
        echo "<td style='width:150px;'>"; echo '<img src="./img/driver_icon.jpg" style="width:150px"; height:100%;/>';
      	echo "<td>"; echo $row["name"];  echo"<br>"; echo"<br>"; echo $row["suggestions"]; echo "</td>" ;
		echo "<td>"; echo $row["feedback"]; echo "</td>";
        echo "</tr>";
         
    
	}
	
    ?>

      
    </tbody>
  </table>

</div>




<!--------------END OF TeSTING KO-------------------------->



		<!-- About -->
		<section class="page-section bg-dark"  id="about">
			<div class="container">

			<div class="row">
				<div class="col-lg-4">
					<div class="team-member">
						<h3 class="feature-title text-white">Questions? Contact us!</h3>
						<hr class="bg-white">
						<input type="submit" class="btn btn-info btn-block" value="F.A.Q" name="">
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