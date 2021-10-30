<?php 
include "connection.php";
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
    </head>
    <body style="background:#d1d1d1;">
	<!--content start-->
	<center>
	<div class="row bg-white shadow" style="width:500px;margin-top:100px;">
	<div class="col-lg">
	    <!-- Mask & flexbox options-->
    <div class="mask d-flex align-items-center">
      <!-- Content -->
      <div class="container container-sm transparent-dark-bg">
        <!--Grid row-->
        <div class="row wow fadeIn">
          <!--Grid column-->
          <div class="col-md-12 mb-4 white-text text-center wow fadeIn">
            <h3 class="display-4 font-weight-bold white-text">Admin Login</h3>
            <hr class="hr-light my-4 w-75">
             <div id="login">
			<form action="loginScript.php" method="post">
			  <label>Username :</label>
			  <center>
			    <input id="name" name="username" placeholder="Enter your username" type="text" class="form-control " style="width:70%">
			    <label>Password :</label>
			    <input id="password" name="password" placeholder="Enter your password" type="password" class="form-control"       style="width:70%"><br><br>
			    <input name="submit" type="submit" value=" Login " class="btn bg-success text-white">
			  </center>
			  <span class="text-dark"></span>
			</form>
			</div>

        </div>

      </div>

    
  </div>
  </div>
  </div>
</div>
	
		<!-- content end-->
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
