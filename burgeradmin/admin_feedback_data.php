<?php
	session_start();

	include "connection.php";
	
	if (isset($_SESSION['username']) && isset($_SESSION['password'])) {?> 

		<?php 
		
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
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
		<img class="navbar-brand" src="img/logo.png" height="70px" width="160px">
			<button class="btn btn-link btn-sm order-1 order-lg-0 bg-dark" id="sidebarToggle" href="#"><i class="fas fa-bars bg-dark"></i></button>
			<!---------------------------------- Navbar------------------------------------------------------------------------>
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
		<!---------------------------ADMIN FEEDBACK DATA CONTENT------------------------------>
		<div id="layoutSidenav_content">
			<main>
				<div class="" style="margin-left:50px;margin-right:50px;">
					<center>
						<h1 style="text-align:center; padding:1rem;">Admin Feedback Data</h1>
						<a href="admin_feedback_data.php"><button type="submit" class="btn btn-info" ><i class="bi bi-arrow-clockwise"></i> Refresh</button></a>
						<br>
					</center>
                    <!--first table-->
                    <h3 class="text-dark" style="padding-top:40px;">PENDING ISSUES</h3>
					<table class="table table-bordered">
						<thead class="thead-dark">
							<tr>
								<th>ID</th>
								<th>NAME</th>
								<th>EMAIL</th>
								<th style="width:35%">MESSAGE</th>
								<th>DATE SUBMITTED</th>
								<th>STATUS</th>
								<th>UPDATE</th>
							</tr>
						</thead>
						<tbody>
							<?php
								$res=mysqli_query($link, "select * from tbl_feedback WHERE sender_review = 'ON QUEUE'");
								while($row=mysqli_fetch_array($res))
								{
									echo "<tr>";
									echo "<td>"; echo $row["id"]; echo "</td>";
									echo "<td>"; echo $row["sender_name"]; echo "</td>";
									echo "<td>"; echo $row["sender_email"]; echo "</td>";
									echo "<td>"; echo $row["sender_message"]; echo "</td>";
								    echo "<td>"; echo $row["sender_date"]; echo "</td>";
								    echo "<td>"; 
								?>
							<form action="statusupdate.php" >
								<select class="bg-dark dropdown text-white" id="senderReview" name="senderReview" style="padding:10px;">
									<option default hidden><?php echo $row["sender_review"] ?></option>
									<option value="ON PROCESS">ON PROCESS</option>
									<option value="RESOLVED">RESOLVED</option>
								</select>
                                <input type="hidden" name="id" value="<?php echo $row['id'] ?>">
								<?php 
									echo "</td>";
									echo "<td>" 
									?> 
								<button type="submit" onclick="return alert('Table will be updated')" class="btn btn-success" name="submit" value="Update">Update</button>
							</form>
							<?php 
								echo"</td>";
								
									
										echo "</tr>";
									}
									
									   ?>
						</tbody>
					</table>
                    <!-- first table -->

                     <!--second table-->
                     <h2 class="text-dark" style="padding-top:40px;">ON PROCESS ISSUES</h2>
					<table class="table table-bordered">
						<thead class="thead-dark">
							<tr>
								<th>ID</th>
								<th>NAME</th>
								<th>EMAIL</th>
								<th style="width:35%">MESSAGE</th>
								<th>DATE SUBMITTED</th>
								<th>STATUS</th>
								<th>UPDATE</th>
							</tr>
						</thead>
						<tbody>
							<?php
								$res=mysqli_query($link, "select * from tbl_feedback WHERE sender_review = 'ON PROCESS'");
								while($row=mysqli_fetch_array($res))
								{
									echo "<tr>";
									echo "<td>"; echo $row["id"]; echo "</td>";
									echo "<td>"; echo $row["sender_name"]; echo "</td>";
									echo "<td>"; echo $row["sender_email"]; echo "</td>";
									echo "<td>"; echo $row["sender_message"]; echo "</td>";
								    echo "<td>"; echo $row["sender_date"]; echo "</td>";
								    echo "<td>"; 
								?>
							<form action="statusupdate.php" >
								<select class="bg-dark dropdown text-white" id="senderReview" name="senderReview" style="padding:10px;">
									<option default hidden><?php echo $row["sender_review"] ?></option>
									<option value="ON PROCESS">ON PROCESS</option>
									<option value="RESOLVED">RESOLVED</option>
								</select>
                                <input type="hidden" name="id" value="<?php echo $row['id'] ?>">
								<?php 
									echo "</td>";
									echo "<td>" 
									?> 
								<button type="submit" onclick="return alert('Table will be updated')" class="btn btn-success" name="submit" value="Update">Update</button>
							</form>
							<?php 
								echo"</td>";
								
									
										echo "</tr>";
									}
									
									   ?>
						</tbody>
					</table>
                    <!-- second table -->

                     <!--third table-->
                     <h2 class="text-dark" style="padding-top:40px;">RESOLVED ISSUES</h2>
					<table class="table table-bordered">
						<thead class="thead-dark">
							<tr>
								<th>ID</th>
								<th>NAME</th>
								<th>EMAIL</th>
								<th style="width:35%">MESSAGE</th>
								<th>DATE SUBMITTED</th>
								<th>STATUS</th>
								<th>UPDATE</th>
							</tr>
						</thead>
						<tbody>
							<?php
								$res=mysqli_query($link, "select * from tbl_feedback WHERE sender_review = 'RESOLVED'");
								while($row=mysqli_fetch_array($res))
								{
									echo "<tr>";
									echo "<td>"; echo $row["id"]; echo "</td>";
									echo "<td>"; echo $row["sender_name"]; echo "</td>";
									echo "<td>"; echo $row["sender_email"]; echo "</td>";
									echo "<td>"; echo $row["sender_message"]; echo "</td>";
								    echo "<td>"; echo $row["sender_date"]; echo "</td>";
								    echo "<td>"; 
								?>
							<form action="statusupdate.php" >
								<select class="bg-dark dropdown text-white" id="senderReview" name="senderReview" style="padding:10px;">
									<option default hidden><?php echo $row["sender_review"] ?></option>
									<option value="ON PROCESS">ON PROCESS</option>
									<option value="RESOLVED">RESOLVED</option>
								</select>
                                <input type="hidden" name="id" value="<?php echo $row['id'] ?>">
								<?php 
									echo "</td>";
									echo "<td>" 
									?> 
								<button type="submit" onclick="return alert('Table will be updated')" class="btn btn-success" name="submit" value="Update">Update</button>
							</form>
							<?php 
								echo"</td>";
								
									
										echo "</tr>";
									}
									
									   ?>
						</tbody>
					</table>
                    <!-- third table -->
				</div>
			</main>
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