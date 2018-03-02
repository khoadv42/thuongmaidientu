<!DOCTYPE html>
<html>
<head>
	<title>Edit</title>
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
	<?php include 'connect.php';$conn->set_charset('utf-8'); ?>
	
	<?php 
			$myid=$_GET['id'];
			$select="select * from auditorum where id=$myid";
			$res=mysqli_query($conn,$select) or die(mysqli_error());
			$cur=mysqli_fetch_array($res,MYSQLI_ASSOC);
			
	?>

	

<div  class="container row" style="margin-top:30px;">
		<form class="offset-md-3" action="" method="POST">
			<input type="hidden" name="id" value="<?php echo $cur['id']; ?>">
		  <div class="form-group">
		    <label for="">Auditorum:</label>
		    <input type="text" class="form-control" name="name" value="<?php echo $cur['name']; ?>" >
		  </div>
		  <div class="form-group">
		    <label for="">Seats No:</label>
		    <input type="number" name="seats_no" class="form-control" value="<?php echo $cur['seats_no']; ?>">
		  </div>
		  <button type="submit" name="submit" class="btn btn-primary">Save</button>
		</form>
</div>

	<?php 
		if(isset($_POST['submit'])){
			$name=$_POST['name'];
			$seats_no=$_POST['seats_no'];
			$id=$_POST['id'];
			$sql="update auditorum set name='$name',seats_no='$seats_no' where id=$id";
			
			$result=mysqli_query($conn,$sql) or die(mysqli_error($conn));
			header('location: auditorum.php');
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