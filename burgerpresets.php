<?php 

//burgerpresets.php

include "connect.php";


$message = '';

if(isset($_POST["add_to_cart"]))
{
	if(isset($_COOKIE["shopping_cart"]))
	{
		$cookie_data = stripslashes($_COOKIE['shopping_cart']);

		$cart_data = json_decode($cookie_data, true);
	}
	else
	{
		$cart_data = array();
	}

	$item_id_list = array_column($cart_data, 'item_id');

	if(in_array($_POST["hidden_id"], $item_id_list))
	{
		foreach($cart_data as $keys => $values)
		{
			if($cart_data[$keys]["item_id"] == $_POST["hidden_id"])
			{
				$cart_data[$keys]["item_quantity"] = $cart_data[$keys]["item_quantity"] + $_POST["quantity"];
			}
		}
	}
	else
	{
		$item_array = array(
			'item_id'			=>	$_POST["hidden_id"],
			'item_name'			=>	$_POST["hidden_name"],
			'item_price'		=>	$_POST["hidden_price"],
			'item_quantity'		=>	$_POST["quantity"]
		);
		$cart_data[] = $item_array;
	}

	
	$item_data = json_encode($cart_data);
	setcookie('shopping_cart', $item_data, time() + (86400 * 30));
	header("location:burgerpresets.php?success=1");
}

if(isset($_GET["action"]))
{
	if($_GET["action"] == "delete")
	{
		$cookie_data = stripslashes($_COOKIE['shopping_cart']);
		$cart_data = json_decode($cookie_data, true);
		foreach($cart_data as $keys => $values)
		{
			if($cart_data[$keys]['item_id'] == $_GET["id"])
			{
				unset($cart_data[$keys]);
				$item_data = json_encode($cart_data);
				setcookie("shopping_cart", $item_data, time() + (86400 * 30));
				header("location:burgerpresets.php?remove=1");
			}
		}
	}
	if($_GET["action"] == "clear")
	{
		setcookie("shopping_cart", "", time() - 3600);
		header("location:burgerpresets.php?clearall=1");
	}
}

if(isset($_GET["success"]))
{
	$message = "test";
}

if(isset($_GET["remove"]))
{
	$message = "Item has been removed";
}
if(isset($_GET["clearall"]))
{
	$message ="Item list has been purged.";
}


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
		<link rel="stylesheet" href="css/burgerpresets-style.css">
		<!-- Custom JavaScript -->
		<script src="js/script.js"></script>
		<script>
		function myFunction() {
		alert("Item has been added to your cart");
		}
		</script>
	</head>
	<body class="bg-light">
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
		
		<!-- Burger Presets -->
				<br />
		<!-- Cheesy Cheese Boys -->
		<div class="jumbotron bg-dark jumbotron-fluid" style="padding-bottom:2px;padding-top:0px;margin-bottom:0px;margin-top:0px;">
			<div class="container">
				<h1 class="text-center text-white display-4">COMBO MEALS</h1>
			</div>
		</div>

		<div class="container py-5 ">
			<div class="row">
			<br>
			<?php
			$query = "SELECT * FROM tbl_product WHERE category = 'combo'";
			$statement = $connect->prepare($query);
			$statement->execute();
			$result = $statement->fetchAll();
			foreach($result as $row)
			{
			?>
			
			<div class="col-lg-4">
				<form method="post">
						<div class="card shadow">
							<div>
							<img src="./img/presets/<?php echo $row["image"]; ?>" alt="Image 1" class="img-fluid card-img-top" style="max-width: 100%;height:250px;object-fit: cover;">
							</div>
							<div class="card-body">
								<h5 class="card-title"><?php echo $row["name"]; ?></h5>
								<h6 class="text-center" style="color:yellowgreen;">
								<i class="fas fa-star"></i>
								<i class="fas fa-star"></i>
								<i class="fas fa-star"></i>
								<i class="fas fa-star"></i>
								<i class="fas fa-star-half-alt" style="color:yellowgreen;"></i>														
								</h6>
								<p class="card-text">
									<?php echo $row["description"]; ?>
								</p>
								<h5>
									<span class="price">PHP <?php echo $row["price"]; ?></span>
								</h5>
								
								<input type="text" name="quantity" value="1" class="form-control" />
								<input type="hidden" name="hidden_name" value="<?php echo $row["name"]; ?>" />
								<input type="hidden" name="hidden_description" value="<?php echo $row["description"]; ?>" />
								<input type="hidden" name="hidden_price" value="<?php echo $row["price"]; ?>" />
								<input type="hidden" name="hidden_id" value="<?php echo $row["id"]; ?>" />
								<center><button type="submit" name="add_to_cart" onclick="myFunction()" style="margin-top:25px;" class="btn btn-success">Add to cart <i class="fas fa-shopping-cart"></i></input></center>
							</div>
							
						</div>
					</form>
			
			</div>
			<?php
			}
			?>
			</div>
			
			
			
		</div>
		
		<!-- Meat Lovers -->
		<div class="jumbotron bg-dark jumbotron-fluid" style="padding-bottom:2px;padding-top:0px;margin-bottom:0px;margin-top:0px;">
			<div class="container">
				<h1 class="text-center text-white display-4">CHEESE BURGERS</h1>
			</div>
		</div>

		<div class="container py-5 ">
			<div class="row">
			<br>
			<?php
			$query = "SELECT * FROM tbl_product WHERE category = 'cheese'";
			$statement = $connect->prepare($query);
			$statement->execute();
			$result = $statement->fetchAll();
			foreach($result as $row)
			{
			?>
			
			<div class="col-lg-4">
				<form method="post">
						<div class="card shadow">
							<div>
							<img src="./img/presets/<?php echo $row["image"]; ?>" alt="Image 1" class="img-fluid card-img-top" style="max-width: 100%;height:250px;object-fit: cover;">
							</div>
							<div class="card-body">
								<h5 class="card-title"><?php echo $row["name"]; ?></h5>
								<h6 class="text-center" style="color:yellowgreen;">
								<i class="fas fa-star"></i>
								<i class="fas fa-star"></i>
								<i class="fas fa-star"></i>
								<i class="fas fa-star"></i>
								<i class="fas fa-star-half-alt" style="color:yellowgreen;"></i>														
								</h6>
								<p class="card-text">
									<?php echo $row["description"]; ?>
								</p>
								<h5>
									<span class="price">PHP <?php echo $row["price"]; ?></span>
								</h5>
								
								<input type="text" name="quantity" value="1" class="form-control" />
								<input type="hidden" name="hidden_name" value="<?php echo $row["name"]; ?>" />
								<input type="hidden" name="hidden_description" value="<?php echo $row["description"]; ?>" />
								<input type="hidden" name="hidden_price" value="<?php echo $row["price"]; ?>" />
								<input type="hidden" name="hidden_id" value="<?php echo $row["id"]; ?>" />
								<center><button type="submit" name="add_to_cart" onclick="myFunction()" style="margin-top:25px;" class="btn btn-success">Add to cart <i class="fas fa-shopping-cart"></i></input></center>
							</div>
							
						</div>
					</form>
			
			</div>
			<?php
			}
			?>
			</div>
			
			
			
		</div>


<!-- Meat Lovers -->
<div class="jumbotron bg-dark jumbotron-fluid" style="padding-bottom:2px;padding-top:0px;margin-bottom:0px;margin-top:0px;">
			<div class="container">
				<h1 class="text-center text-white display-4">REGULAR BURGERS</h1>
			</div>
		</div>

		<div class="container py-5 ">
			<div class="row">
			<br>
			<?php
			$query = "SELECT * FROM tbl_product WHERE category = 'REGULAR'";
			$statement = $connect->prepare($query);
			$statement->execute();
			$result = $statement->fetchAll();
			foreach($result as $row)
			{
			?>
			
			<div class="col-lg-4">
				<form method="post">
						<div class="card shadow">
							<div>
							<img src="./img/presets/<?php echo $row["image"]; ?>" alt="Image 1" class="img-fluid card-img-top" style="max-width: 100%;height:250px;object-fit: cover;">
							</div>
							<div class="card-body">
								<h5 class="card-title"><?php echo $row["name"]; ?></h5>
								<h6 class="text-center" style="color:yellowgreen;">
								<i class="fas fa-star"></i>
								<i class="fas fa-star"></i>
								<i class="fas fa-star"></i>
								<i class="fas fa-star"></i>
								<i class="fas fa-star-half-alt" style="color:yellowgreen;"></i>														
								</h6>
								<p class="card-text">
									<?php echo $row["description"]; ?>
								</p>
								<h5>
									<span class="price">PHP <?php echo $row["price"]; ?></span>
								</h5>
								
								<input type="text" name="quantity" value="1" class="form-control" />
								<input type="hidden" name="hidden_name" value="<?php echo $row["name"]; ?>" />
								<input type="hidden" name="hidden_description" value="<?php echo $row["description"]; ?>" />
								<input type="hidden" name="hidden_price" value="<?php echo $row["price"]; ?>" />
								<input type="hidden" name="hidden_id" value="<?php echo $row["id"]; ?>" />
								<center><button type="submit" name="add_to_cart" onclick="myFunction()" style="margin-top:25px;" class="btn btn-success">Add to cart <i class="fas fa-shopping-cart"></i></input></center>
							</div>
							
						</div>
					</form>
			
			</div>
			<?php
			}
			?>
			</div>
			
			
			
		</div>

		

		<!-- Vegan Paradise -->
		<div class="jumbotron bg-dark jumbotron-fluid" style="padding-bottom:2px;padding-top:0px;margin-bottom:0px;margin-top:0px;">
			<div class="container">
				<h1 class="text-center text-white display-4">SIDES AND EXTRAS</h1>
			</div>
		</div>

		<div class="container py-5 ">
			<div class="row">
			<br>
			<?php
			$query = "SELECT * FROM tbl_product WHERE category = 'sides'";
			$statement = $connect->prepare($query);
			$statement->execute();
			$result = $statement->fetchAll();
			foreach($result as $row)
			{
			?>
			
			<div class="col-lg-4">
				<form method="post">
						<div class="card shadow">
							<div>
							<img src="./img/presets/<?php echo $row["image"]; ?>" alt="Image 1" class="img-fluid card-img-top" style="max-width: 100%;height:250px;object-fit: cover;">
							</div>
							<div class="card-body">
								<h5 class="card-title"><?php echo $row["name"]; ?></h5>
								<h6 class="text-center" style="color:yellowgreen;">
								<i class="fas fa-star"></i>
								<i class="fas fa-star"></i>
								<i class="fas fa-star"></i>
								<i class="fas fa-star"></i>
								<i class="fas fa-star-half-alt" style="color:yellowgreen;"></i>														
								</h6>
								<p class="card-text">
									<?php echo $row["description"]; ?>
								</p>
								<h5>
									<span class="price">PHP <?php echo $row["price"]; ?></span>
								</h5>
								
								<input type="text" name="quantity" value="1" class="form-control" />
								<input type="hidden" name="hidden_name" value="<?php echo $row["name"]; ?>" />
								<input type="hidden" name="hidden_description" value="<?php echo $row["description"]; ?>" />
								<input type="hidden" name="hidden_price" value="<?php echo $row["price"]; ?>" />
								<input type="hidden" name="hidden_id" value="<?php echo $row["id"]; ?>" />
								<center><button type="submit" name="add_to_cart" onclick="myFunction()" style="margin-top:25px;" class="btn btn-success">Add to cart <i class="fas fa-shopping-cart"></i></input></center>
							</div>
							
						</div>
					</form>
			
			</div>
			<?php
			}
			?>
			</div>
			
			
			
		</div>

		<!-- drink -->
		<div class="jumbotron bg-dark jumbotron-fluid" style="padding-bottom:2px;padding-top:0px;margin-bottom:0px;margin-top:0px;">
			<div class="container">
				<h1 class="text-center text-white display-4">DRINKS</h1>
			</div>
		</div>

		<div class="container py-5 ">
			<div class="row">
			<br>
			<?php
			$query = "SELECT * FROM tbl_product WHERE category = 'drinks'";
			$statement = $connect->prepare($query);
			$statement->execute();
			$result = $statement->fetchAll();
			foreach($result as $row)
			{
			?>
			
			<div class="col-lg-4">
				<form method="post">
						<div class="card shadow">
							<div>
							<img src="./img/presets/<?php echo $row["image"]; ?>" alt="Image 1" class="img-fluid card-img-top" style="max-width: 100%;height:250px;object-fit: cover;">
							</div>
							<div class="card-body">
								<h5 class="card-title"><?php echo $row["name"]; ?></h5>
								<h6 class="text-center" style="color:yellowgreen;">
								<i class="fas fa-star"></i>
								<i class="fas fa-star"></i>
								<i class="fas fa-star"></i>
								<i class="fas fa-star"></i>
								<i class="fas fa-star-half-alt" style="color:yellowgreen;"></i>														
								</h6>
								<p class="card-text">
									<?php echo $row["description"]; ?>
								</p>
								<h5>
									<span class="price">PHP <?php echo $row["price"]; ?></span>
								</h5>
								
								<input type="text" name="quantity" value="1" class="form-control" />
								<input type="hidden" name="hidden_name" value="<?php echo $row["name"]; ?>" />
								<input type="hidden" name="hidden_description" value="<?php echo $row["description"]; ?>" />
								<input type="hidden" name="hidden_price" value="<?php echo $row["price"]; ?>" />
								<input type="hidden" name="hidden_id" value="<?php echo $row["id"]; ?>" />
								<center><button type="submit" name="add_to_cart" onclick="myFunction()" style="margin-top:25px;" class="btn btn-success">Add to cart <i class="fas fa-shopping-cart"></i></input></center>
							</div>
							
						</div>
					</form>
			
			</div>
			<?php
			}
			?>
			</div>
			
			
			
		</div>

		<!-- vegan -->
		<div class="jumbotron bg-dark jumbotron-fluid" style="padding-bottom:2px;padding-top:0px;margin-bottom:0px;margin-top:0px;">
			<div class="container">
				<h1 class="text-center text-white display-4">VEGAN OR MEAT-FREE MEALS</h1>
			</div>
		</div>

		<div class="container py-5 ">
			<div class="row">
			<br>
			<?php
			$query = "SELECT * FROM tbl_product WHERE category = 'vegan'";
			$statement = $connect->prepare($query);
			$statement->execute();
			$result = $statement->fetchAll();
			foreach($result as $row)
			{
			?>
			
			<div class="col-lg-4">
				<form method="post">
						<div class="card shadow">
							<div>
							<img src="./img/presets/<?php echo $row["image"]; ?>" alt="Image 1" class="img-fluid card-img-top" style="max-width: 100%;height:250px;object-fit: cover;">
							</div>
							<div class="card-body">
								<h5 class="card-title"><?php echo $row["name"]; ?></h5>
								<h6 class="text-center" style="color:yellowgreen;">
								<i class="fas fa-star"></i>
								<i class="fas fa-star"></i>
								<i class="fas fa-star"></i>
								<i class="fas fa-star"></i>
								<i class="fas fa-star-half-alt" style="color:yellowgreen;"></i>														
								</h6>
								<p class="card-text">
									<?php echo $row["description"]; ?>
								</p>
								<h5>
									<span class="price">PHP <?php echo $row["price"]; ?></span>
								</h5>
								
								<input type="text" name="quantity" value="1" class="form-control" />
								<input type="hidden" name="hidden_name" value="<?php echo $row["name"]; ?>" />
								<input type="hidden" name="hidden_description" value="<?php echo $row["description"]; ?>" />
								<input type="hidden" name="hidden_price" value="<?php echo $row["price"]; ?>" />
								<input type="hidden" name="hidden_id" value="<?php echo $row["id"]; ?>" />
								<center><button type="submit" name="add_to_cart" onclick="myFunction()" style="margin-top:25px;" class="btn btn-success">Add to cart <i class="fas fa-shopping-cart"></i></input></center>
							</div>
							
						</div>
					</form>
			
			</div>
			<?php
			}
			?>
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
	</body>
</html>
