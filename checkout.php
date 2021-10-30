<?php 

//cart.php



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
	header("location:cart.php?success=1");
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
				header("location:cart.php?remove=1");
			}
		}
	}
	if($_GET["action"] == "clear")
	{
		setcookie("shopping_cart", "", time() - 3600);
		header("location:cart.php?clearall=1");
	}
}

if(isset($_GET["success"]))
{
	$message = '
	<div class="alert alert-success alert-dismissible">
	  	<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
	  	Item Added into Cart
	</div>
	';
}

if(isset($_GET["remove"]))
{
	$message = '
	<div class="alert alert-success alert-dismissible">
		<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
		Item has been removed from cart.
	</div>
	';
}
if(isset($_GET["clearall"]))
{
	$message = '
	<div class="alert alert-success alert-dismissible">
		<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
			All items have been removed.
	</div>
	';
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
		<link rel="stylesheet" href="css/checkout-style.css">
		<!-- Custom JavaScript -->
		<script src="js/script.js"></script>
		<style>
.row2 {
  display: -ms-flexbox; /* IE10 */
  display: flex;
  -ms-flex-wrap: wrap; /* IE10 */
  flex-wrap: wrap;
  margin: 0 -16px;
}

.col-25 {
  -ms-flex: 25%; /* IE10 */
  flex: 25%;
}

.col-50 {
  -ms-flex: 50%; /* IE10 */
  flex: 50%;
}

.col-75 {
  -ms-flex: 75%; /* IE10 */
  flex: 75%;
}

.col-25,
.col-50,
.col-75 {
  padding: 0 16px;
}

.container2 {
  background-color: #f2f2f2;
  padding: 5px 20px 15px 20px;
  border: 1px solid lightgrey;
  border-radius: 3px;
}

input[type=text] {
  width: 100%;
  margin-bottom: 20px;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 3px;
}

label {
  margin-bottom: 10px;
  display: block;
}

.icon-container {
  margin-bottom: 20px;
  padding: 7px 0;
  font-size: 24px;
}

.btn2 {
  background-color: #4CAF50;
  color: white;
  padding: 12px;
  margin: 10px 0;
  border: none;
  width: 100%;
  border-radius: 3px;
  cursor: pointer;
  font-size: 17px;
}
		</style>
		
	<script type="text/javascript">
        window.addEventListener('load', function(){
            potential_checkboxes = document.getElementsByTagName('input');
            for(i = 0; i < potential_checkboxes.length; i ++) {
                element = potential_checkboxes[i];

                if (element.getAttribute('type') == 'checkbox') {
                    textbox = document.getElementById(element.getAttribute('rel'));
                    textbox.disabled = ! element.checked;

                    element.addEventListener('change', function() {
                        textbox = document.getElementById(this.getAttribute('rel'));
                        textbox.disabled = ! this.checked;
                    }, false);
                }               
            }
        }, false);
        </script>
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
		
		<!-- checkout -->
		<h2 class="py-3">Checkout Form</h2>
<div class="row">
  <div class="col-75">
    <div class="container2">
      <form action="/action_page.php">
      
        <div class="row2">
          <div class="col-50">
            <h3>Billing Address</h3>
            <label for="fname">Full Name</label>
            <input type="text" id="fname" name="firstname" placeholder="Gilmar Mandapat">
            <label for="email">Email</label>
            <input type="text" id="email" name="email" placeholder="el.psy.kongroo@gmail.com">
            <label for="adr">Address</label>
            <input type="text" id="adr" name="address" placeholder="77 Mabilis Street">
            <label for="city">City</label>
            <input type="text" id="city" name="city" placeholder="Quezon City">

            <div class="row">
              <div class="col-50">
                <label for="region">Region</label>
                <input type="text" id="state" name="region" placeholder="NCR">
              </div>
              <div class="col-50">
                <label for="zip">Zip Code</label>
                <input type="text" id="zip" name="zipcode" placeholder="1100">
              </div>
            </div>
          </div>

          <div class="col-50">
            <h3>Payment</h3>
            <label for="fname">Accepted Cards</label>
            <div class="icon-container">
              <i class="fab fa-cc-visa" style="color:blue;"></i>
              <i class="fab fa-cc-amex" style="color:green";></i>
              <i class="fab fa-cc-mastercard" style="color:red;"></i>
              <i class="fab fa-cc-discover" style="color:orange;"></i>
            </div>
            <label for="textbox_1">Name on Card</label>
            <input type="text" id="cname" name="cardname" placeholder="Your Name">
            <label for="ccnum">Credit Card Number</label>
            <input type="text" id="ccnum" name="cardnumber" placeholder="1000-2000-3000-4000">
            <label for="expmonth">Exp Month</label>
            <input type="text" id="expmonth" name="expmonth" placeholder="September">
            <div class="row">
              <div class="col-50">
                <label for="expyear">Exp Year</label>
                <input type="text" id="expyear" name="expyear" placeholder="2023">
              </div>
              <div class="col-50">
                <label for="cvv">CVV</label>
                <input type="text" id="cvv" name="cvv" placeholder="111">
              </div>
            </div>
          </div>
         </div>
	  				<!--Cart -->
		<div class="col-25">
			<div class="container">
			<div style="clear:both"></div>
			<br />
			<h3>Order Details</h3>
			<div class="table-responsive">
			<?php echo $message; ?>
			<div align="right">
				<a href="cart.php?action=clear"><b>Clear Cart</b></a>
			</div>
			<table class="table table-bordered">
				<tr>
					<th width="40%">Item Name</th>
					<th width="10%">Quantity</th>
					<th width="20%">Price</th>
					<th width="15%">Total</th>
					<th width="5%">Action</th>
				</tr>
			<?php
			if(isset($_COOKIE["shopping_cart"]))
			{
				$total = 0;
				$numms = 0;
				$cookie_data = stripslashes($_COOKIE['shopping_cart']);
				$cart_data = json_decode($cookie_data, true);
				foreach($cart_data as $keys => $values)
				{
			?>
				<tr>
					<td><?php echo $values["item_name"]; ?></td>
					<td><?php echo $values["item_quantity"]; ?></td>
					<td>PHP <?php echo $values["item_price"]; ?></td>
					<td>PHP <?php echo number_format($values["item_quantity"] * $values["item_price"], 2);?></td>
					<td><a href="cart.php?action=delete&id=<?php echo $values["item_id"]; ?>"><span class="text-danger">Remove</span></a></td>
				</tr>
			<?php	
					$total = $total + ($values["item_quantity"] * $values["item_price"]);
					
				}
			?>
				<tr>
					<td colspan="3" align="right">Total</td>
					<td align="right">PHP <?php echo number_format($total, 2); ?></td>
					<td></td>
				</tr>
			<?php
			}
			else
			{
				echo '
				<tr>
					<td colspan="5" align="center">Your cart is empty.</td>
				</tr>
				';
			}
			?>
			</table>
			</div>
		</div>		
		    </div>
  </div>
        </div>
        </div>
		
		<div class="row" style="padding-left:150px;padding-right:150px;">
           <div class="col-sm-6">
		   <input id="checkbox_1" label="" for="checkbox_1" type="checkbox" rel="textbox_1"> Cash On Delivery<br><br>
            <label for="textbox_1">
                Amount(in PHP): 
                <input id="textbox_1" type="text" value="1000" disabled="">
            </label>
			</div>
			
			<div class="col-sm-6">
        <label>
          <input type="checkbox" name="sameadr"> Shipping address same as billing
        </label>
        <a href="track.php" input type="submit" value="Place Order" class="btn2 text-center">Place Order</a>
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