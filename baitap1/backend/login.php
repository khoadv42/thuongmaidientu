<?php session_start(); ?>
<?php include 'connect.php'; ?>
<?php 
	if(isset($_SESSION['username'])){
		header('Location:index.php');
	}

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<script type="text/javascript" src="../public/jquery.js"></script>
	<script type="text/javascript" src="../public/client.js"></script>
	<link rel="stylesheet" type="text/css" href="../public/bootstrap/dist/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="../public/bootstrap/dist/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../public/stylelogin.css">
	<link rel="stylesheet" href="../public/owlcarousel/dist/assets/owl.carousel.min.css">
	<link rel="stylesheet" href="../public/owlcarousel/dist/assets/owl.theme.default.min.css">
	<link rel="shortcut icon" type="image/png" href="../public/img/x.jpg"/>
</head>
<body>
	<div id="myWrapper">
		<div class="container" style="height:40px;">
			
		</div>
		<div id="header" class="container login-form">
			<div class="loginbox">
				<?php if(isset($_POST['submit'])){
					$errors=array();
					$required=array('username','pword');
					foreach ($required as $key => $fieldname) {
						if(!isset($fieldname)||empty($fieldname)){
							$errors = 'the <strong>$fieldname</strong> is blank';
						}
					}
						if(empty($errors)){
						$conn->set_charset("utf8");
						$username=mysqli_real_escape_string($conn,$_POST['username']);
						$pword=mysqli_real_escape_string($conn,$_POST['pword']);
						$query='select * from users where 
							username="'.$username.'" and 
							pword="'.$pword.'" limit 1
						';
					}
					$result=mysqli_query($conn,$query) or die(mysqli_error($conn));
					while($row=mysqli_fetch_array($result,MYSQLI_ASSOC)){
						$_SESSION['username']=$row['username'];
						header('Location: index.php');
					}
				} 
				?>
				<h1>  Login here</h1>
				<form method='post' action=''>
					<p>Username</p>
					<input type="text" name="username" placeholder="Enter Username">
					<p>Password</p>
					<input type="password" name="pword" placeholder="Enter Password">
					<input type="submit" name="submit" value ="Login">
					<a href="#" >Lost your password?</a><br/>
					<a href="#">Don't have an account?</a>	
				</form>
			</div>
		</div> <!-- end header -->
		
		<div id="footer">
			
		</div> <!-- end footer -->

	</div> <!-- end myWrapper -->


	<script type="text/javascript" src="../public/jquery.js"></script>
	<script src="../public/bootstrap/dist/js/bootstrap.bundle.js" type="text/javascript" charset="utf-8" ></script>
	<script src="../public/bootstrap/dist/js/bootstrap.js" type="text/javascript" charset="utf-8" ></script>
	<script src="../public/bootstrap/dist/js/bootstrap.min.js" type="text/javascript" charset="utf-8" ></script>
	<script src="../public/owlcarousel/dist/owl.carousel.js"></script>
	<script src="../public/owlcarousel/dist/owl.carousel.min.js"></script>
</body>
</html>