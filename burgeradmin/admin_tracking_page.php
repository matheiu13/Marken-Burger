<?php
session_start();
include "connection.php";
include "connect_admin_tracking.php";


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
        <link href="css/admin_styles.css" rel="stylesheet" />
        <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-secondary">
            <a class="navbar-brand" href="index.html">Burger Builder Admin</a>
            <button class="btn btn-link btn-sm order-1 order-lg-0 bg-dark" id="sidebarToggle" href="#"><i class="fas fa-bars bg-dark"></i></button>
            <!---------------------------------- Navbar------------------------------------------------------------------------>
            <ul class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0 bg-white">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="userDropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                        <a class="dropdown-item" href="#">Settings</a>
                        <a class="dropdown-item" href="#">Activity Log</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="login.html">Logout</a>
                    </div>
                </li>
            </ul>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark bg-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">Database</div>
                            <a class="nav-link" href="home.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-shopping-cart"></i></div>
                                Shop Related
                            </a>
                                                
                            <div class="sb-sidenav-menu-heading">Add-ons</div>
                            <a class="nav-link" href="#!">
                                <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                                Charts
                            </a>
                            <a class="nav-link" href="#!">
                                <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                                Tables
                            </a>
                        </div>
                    </div>
                </nav>
            </div>
           
	 <!---------------------Admin Tracking Data Content --------------------------->
   

 <div class="col-lg-12" style="margin:5rem auto 18.5rem;">
<h1 style="text-align:center; padding:1rem;">Admin Tracking Data</h1>
<table class="table table-bordered">
    <thead class="thead-dark">
      <tr>
		    <th>Id</th>
        <th>Name</th>
        <th>Order</th>
        <th>Driver</th>
        <th>Location</th>
        <th>Delivered</th>


      </tr>
    </thead>
    <tbody>

<?php
	$res=mysqli_query($con, "select * from tracking_data");
	while($row=mysqli_fetch_array($res))
	{
		echo "<tr>";
		echo "<td>"; echo $row["id"]; echo "</td>";
		echo "<td>"; echo $row["name"]; echo "</td>";
		echo "<td>"; echo $row["food"]; echo "</td>";
		echo "<td>"; echo $row[""]; echo "</td>";
        echo "<td>"; echo $row["feedback"]; echo "</td>";
        echo "<td>"; echo $row["suggestions"]; echo "</td>";
		echo "</tr>";
	}
	
    ?>

      
    </tbody>
  </table>

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