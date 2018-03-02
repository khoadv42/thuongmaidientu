<?php session_start(); ?>	

<!DOCTYPE html>
<html>
<head>
	<title>Panel Controller</title>
	<script type="text/javascript" src="../public/jquery.js"></script>
	<link rel="stylesheet" type="text/css" href="../public/bootstrap/dist/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="../public/bootstrap/dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="../public/owlcarousel/dist/assets/owl.carousel.min.css">
	<link rel="stylesheet" href="../public/owlcarousel/dist/assets/owl.theme.default.min.css">
	<link rel="shortcut icon" type="image/png" href="../public/img/x.jpg"/>
	<link rel="stylesheet" type="text/css" href="../public/stylePanel.css">
	<link rel="stylesheet" type="text/css" href="../public/clockpicker/dist/bootstrap-clockpicker.min.css">
</head>
<body>
	<div id="myWrapper">
		<div id="header">
			<ul class="nav justify-content-end bg-dark">
				<li class="nav-item">
			    <a class="nav-link " href="#">Movies Schedule</a>
			  </li>
			  <li class="nav-item">
			    <a class="nav-link" href="category.php">Category</a>
			  </li>
			  <li class="nav-item">
			    <a class="nav-link" href="seat.php">Seat</a>
			  </li>
			  <li class="nav-item">
			    <a class="nav-link" href="auditorum.php">Auditorum</a>
			  </li>
			  <li class="nav-item dropdown">
			    	<button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				    <?php 
						if(isset($_SESSION['username'])){
							echo $_SESSION['username'];
						}
						else{
							header('location:login.php');
						}
					 ?>
				  </button>
				  <div class="dropdown-menu margin3" aria-labelledby="dropdownMenu2">
				    <button class="dropdown-item" type="button">Manager Employee</button>
				    <a href="logout.php" class="dropdown-item" type="button btn-primary">Logout</a>
				  </div>
			  </li>
			</ul>
		</div> <!-- end header -->
		<div id="content-section" style="width: 100%;" class="a">