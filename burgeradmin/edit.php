<?php
session_start();
include "connection.php";
$id=$_GET["id"];

$name = "";
$image = "";
$price = "";
$description = "";

$res=mysqli_query($link, "select * from tbl_product where id=$id");
while($row=mysqli_fetch_array($res))
{
	$name=$row["name"];
	$image=$row["image"];
	$price=$row["price"];
	$description=$row["description"];
	$category=$row["category"];
}

if (isset($_SESSION['username']) && isset($_SESSION['password'])) {?> 

<?php 

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

          <link href="css/styles.css" rel="stylesheet" />
        <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js" crossorigin="anonymous"></script>
</head>
<body>

<div class="container">
<div class="row">
<div class="col-lg">
  <h2>Edit Product Information</h2>
  <form action="" name=form1 method="post">
    <div class="form-group">
      <label for="name">Name:</label>
      <input type="text" class="form-control" id="name" placeholder="Edit product name" name="name" value="<?php echo $name; ?>">
    </div>
    <div class="form-group">
      <label for="image">Image name: (with extension)</label>
      <input type="text" class="form-control" id="image" placeholder="Edit image name" name="image" value="<?php echo $image; ?>">
    </div>
	<div class="form-group">
      <label for="price">Price:</label>
      <input type="text" class="form-control" id="price" placeholder="Edit price" name="price" value="<?php echo $price; ?>">
    </div>
	<div class="form-group">
      <label for="description">Description:</label>
      <input type="text" class="form-control" id="description" placeholder="Edit description" name="description" value="<?php echo $description; ?>">
    </div>
	<div class="form-group">
      <label for="category">Category:</label>
      <input type="text" class="form-control" id="category" placeholder="Edit category" name="category" value="<?php echo $category; ?>">
    </div>
	
	<button type="submit" name="update" class="btn btn-default btn-warning">Update</button>


  </form>
</div>


<div class="col-lg-4">
				<form method="post">
						<div class="card shadow">
							<div>
								<img src="img/presets/<?php echo $image; ?>" alt="Image 1" class="img-fluid card-img-top" style="max-width: 100%;height:250px">
							</div>
							<div class="card-body">
								<h5 class="card-title"><?php echo $name; ?></h5>
								<h6 class="text-center" style="color:yellowgreen;">
								<i class="fas fa-star"></i>
								<i class="fas fa-star"></i>
								<i class="fas fa-star"></i>
								<i class="fas fa-star"></i>
								<i class="fas fa-star-half-alt" style="color:yellowgreen;"></i>														
								</h6>
								<p class="card-text">
									<?php echo $description; ?>
								</p>
								<h5>
									<span class="price">PHP <?php echo $price; ?></span>
								</h5>
								
								<input type="text" name="quantity" value="1" class="form-control" />
								<input type="hidden" name="hidden_name" value="<?php echo $name; ?>" />
								<input type="hidden" name="hidden_description" value="<?php echo $description; ?>" />
								<input type="hidden" name="hidden_price" value=<?php echo $price; ?>" />
								<input type="hidden" name="hidden_id" value="<?php echo $row["id"]; ?>" />
								<center><button type="submit" name="add_to_cart" onclick="myFunction()" style="margin-top:5px;" class="btn btn-success">Add<i class="fas fa-shopping-cart"></i></input></center>
							</div>
							
						</div>
					</form>
			
					</div>
</div>
</div>



</body>

<?php
if(isset($_POST["update"]))
{
	mysqli_query($link, "update tbl_product set name='$_POST[name]', image='$_POST[image]', price='$_POST[price]', description='$_POST[description]', category='$_POST[category]' where id=$id");
	
	?>
	<script type="text/javascript">
	window.location="home.php";
	</script>
	<?php
}

?>

</html>
<?php }
else{
	session_destroy();	
	header("Location: login.php?illegalaccess");
	exit();
}?>