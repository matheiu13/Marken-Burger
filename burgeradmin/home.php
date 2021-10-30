<?php 
session_start();
	include "connection.php";
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


include "connection.php";
if (isset($_SESSION['username']) && isset($_SESSION['password'])) {?> 

<?php 

?>
	
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Employee BG</title>
        <link href="css/styles.css" rel="stylesheet" />
        <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js" crossorigin="anonymous"></script>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-secondary">
		<img class="navbar-brand" src="img/logo.png" height="70px" width="160px">
            <button class="btn btn-link btn-sm order-1 order-lg-0 bg-dark" id="sidebarToggle" href="#"><i class="fas fa-bars bg-dark"></i></button>
            <!-- Navbar-->
            <ul class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0 bg-white">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="userDropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                        <a class="dropdown-item" href="#">Welcome: <u><?php echo $_SESSION['username']; ?></u></a>
                        <a class="dropdown-item" href="#">Activity Log</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="logout.php">Logout</a>
                    </div>
                </li> 
            </ul>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark bg-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">Database Edit</div>
                            <a class="nav-link" href="home.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-shopping-cart"></i></div>
                                Shop Related
                            </a>
							<a class="nav-link" href="tracking.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-truck-pickup"></i></div>
                                Customer Order Tracking
                            </a>
                                                
                            <div class="sb-sidenav-menu-heading">Database View</div>
                            <a class="nav-link" href="admin_feedback_data.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-hdd"></i></div>
                                User Service Feedback
                            </a>
                        </div>
                    </div>
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>
				
				<!--Edit-->
				<h2 style="padding-left:10px;">Shop Database Editor</h2>
                    <div class="col-6">
					  
					  <form action="" name=form1 method="post">
						<div class="form-group">
						  <label for="name">Name:</label>
						  <input type="text" class="form-control" id="name" placeholder="Enter product name" name="name">
						</div>
						<div class="form-group">
						  <label for="image">Image name: (with extension)</label>
						  <input type="text" class="form-control" id="image" placeholder="Enter image name ex:(test.jpg)" name="image">
						</div>
						<div class="form-group">
						  <label for="price">Price:</label>
						  <input type="text" class="form-control" id="price" placeholder="Enter exact price" name="price">
						</div>
						<div class="form-group">
						  <label for="description">Description:</label>
						  <input type="text" class="form-control" id="description" placeholder="Enter product information" name="description">
						</div>
						<div class="form-group">
						  <label for="category">Category:</label>
						  <input type="text" class="form-control" id="category" placeholder="combo/single/sides/drinks/vegan" name="category">
						</div>
						
						<button type="submit" name="insert" class="btn btn-default btn-warning">Insert</button>
						<br>
						<br>

					</div>
					
					<!--Table-->
					<div class="col-lg-12">

					<table class="table table-bordered">
						<thead>
						  <tr>
							<th>Database ID</th>
							<th>Name</th>
							<th>Image Name</th>
							<th>Price</th>
							<th>Description</th>
							<th>Category</th>
							<th>Modify</th>
							<th>Remove</th>
						  </tr>
						</thead>
						<tbody>
						
						<?php
						$res=mysqli_query($link, "select * from tbl_product");
						while($row=mysqli_fetch_array($res))
						{
							echo "<tr>";
							echo "<td>"; echo $row["id"]; echo "</td>";
							echo "<td>"; echo $row["name"]; echo "</td>";
							echo "<td>"; echo $row["image"]; echo "</td>";
							echo "<td>"; echo $row["price"]; echo "</td>";
							echo "<td>"; echo $row["description"]; echo "</td>";
							echo "<td>"; echo $row["category"]; echo "</td>";
							echo "<td>"; ?> <a href="edit.php?id=<?php echo $row["id"]; ?>"> <button type="button" class="btn btn-success">Edit</button></a> <?php echo "</td>";
							echo "<td>"; ?> <a href="delete.php?id=<?php echo $row["id"]; ?>"> <button type="button" class="btn btn-danger">Delete</button></a> <?php echo "</td>";
							echo "</tr>";
						}
						?>	
						
						</tbody>
					  </table>

					</div>

<!-- test run -->
    <h2 style="padding-left:10px;"> Shop Page Test Run</h2>

		<div class="container py-5 bg-light">
		
			<div class="row">
			<br>
			<?php
			$query = "SELECT * FROM tbl_product ORDER BY id ASC";
			$statement = $connect->prepare($query);
			$statement->execute();
			$result = $statement->fetchAll();
			foreach($result as $row)
			{
			?>
			
			<div class="col-lg-4 py-4">
				<form method="post">
						<div class="card shadow">
							<div>
								<img src="img/presets/<?php echo $row["image"]; ?>" alt="Image 1" class="img-fluid card-img-top" style="max-width: 100%;height:250px">
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
								<center><button name="" href="#!" style="margin-top:5px;" class="btn btn-success">Add<i class="fas fa-shopping-cart"></i></input></center>
							</div>
							
						</div>
					</form>
			
					</div>
				<?php
					}
					?>
					</div>
			
			
			
					</div>


                </main>
				
			<!--PHP codes-->
				<?php
				if(isset($_POST["insert"]))
				{
					mysqli_query($link, "insert into tbl_product values(NULL, '$_POST[name]','$_POST[image]','$_POST[price]','$_POST[description]','$_POST[category]')");

					?>
					<script type="text/javascript">
					window.location.href=window.location.href;
					</script>
					
					<?php

				}

				?>

				
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/chart-area-demo.js"></script>
        <script src="assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/datatables-demo.js"></script>
    </body>
</html>
<?php }
else{
	session_destroy();	
	header("Location: login.php?illegalaccess");
	exit();
}?>