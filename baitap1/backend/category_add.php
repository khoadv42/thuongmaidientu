<?php include('connect.php') ; ?>
<!DOCTYPE html>
<html>
<head>
	<title>Panel Controller</title>
	<script type="text/javascript" src="../public/jquery.js"></script>
	<script type="text/javascript" src="../public/client.js"></script>
	<script type="text/javascript" src="../public/backend.js"></script>
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
		
		<div id="header" class="contaner" style="height: 40px;">
		</div> <!-- end header -->
		<div id="content-section" class="row">
			<form method="GET" action="" class="offset-md-3 col-md-3">
			  <div class="form-group">
			    <label >Category ADD</label>
			    <input type="text" class="form-control" name="category_name"  placeholder="category_name" required>
			  </div>
			  <div class="form-group">
			    <label >Description</label>
			    <input type="text" class="form-control" name="description" placeholder="Description">
			  </div>
			  <button type="submit" class="btn btn-secondary" name="submit" value="">Add</a>
			</form>
		</div> <!-- end content-section -->
		
		<div id="footer">
			
		</div> <!-- end footer -->

	</div> <!-- end myWrapper -->
	<?php 
		if(isset($_GET['submit'])){
			$category_name=mysqli_real_escape_string($conn,$_GET['category_name']);
			$description=mysqli_real_escape_string($conn,$_GET['description']);
			echo $category_name;
			$sql="insert into category(category_name,description) values('$category_name','$description')";
			$res=mysqli_query($conn,$sql) or die(mysqli_error($conn));
			if($res){
				 header('location:category.php');
			}else{
				echo 'fail';
			}
		}

	 ?>

	<script type="text/javascript" src="../public/jquery.js"></script>
	<script src="../public/bootstrap/dist/js/bootstrap.bundle.js" type="text/javascript" charset="utf-8" ></script>
	<script src="../public/bootstrap/dist/js/bootstrap.js" type="text/javascript" charset="utf-8" ></script>
	<script src="../public/bootstrap/dist/js/bootstrap.min.js" type="text/javascript" charset="utf-8" ></script>
	<script src="../public/owlcarousel/dist/owl.carousel.js"></script>
	<script src="../public/owlcarousel/dist/owl.carousel.min.js"></script>
	<script type="text/javascript" src="../public/clockpicker/dist/bootstrap-clockpicker.min.js"></script>
</body>
</html>