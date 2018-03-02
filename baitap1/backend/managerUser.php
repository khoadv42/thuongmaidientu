<?php session_start(); ?>
<?php 
	include_once("connect.php");
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Manager Users</title>
	<script type="text/javascript" src="../public/jquery.js"></script>
	<script type="text/javascript" src="../public/client.js"></script>
	<link rel="stylesheet" type="text/css" href="../public/bootstrap/dist/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="../public/bootstrap/dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="../public/owlcarousel/dist/assets/owl.carousel.min.css">
	<link rel="stylesheet" href="../public/owlcarousel/dist/assets/owl.theme.default.min.css">
	<link rel="shortcut icon" type="image/png" href="../public/img/x.jpg"/>
	<link rel="stylesheet" type="text/css" href="../public/stylePanel.css">
</head>
<body>
	<div id="myWrapper">
		<div id="header">
			<ul class="nav justify-content-end">
				<li class="nav-item">
			    <a class="nav-link active" href="#">Movies</a>
			  </li>
			  <li class="nav-item">
			    <a class="nav-link active" href="#">Subcategory</a>
			  </li>
			  <li class="nav-item">
			    <a class="nav-link" href="#">Category</a>
			  </li>
			  <li class="nav-item">
			    <a class="nav-link" href="#">Menu</a>
			  </li>
			  <li class="nav-item dropdown">
			    	<button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				    Dropdown
				  </button>
				  <div class="dropdown-menu margin3" aria-labelledby="dropdownMenu2">
				    <button class="dropdown-item" type="button">Action</button>
				    <button class="dropdown-item" type="button">Another action</button>
				    <button class="dropdown-item" type="button">Something else here</button>
				  </div>
			  </li>
			</ul>
		</div> <!-- end header -->
		<div id="content-section">
			<div class="container">
				<table class="table table-striped">
				  <thead>
				    <tr>
				      <th scope="col">#</th>
				      <th scope="col">id</th>
				      <th scope="col">username</th>
				    </tr>
				  </thead>
				  <tbody>
				  	<?php 
				  		$display=10;
				  		if(isset($_GET['entries']) && (int)$_GET['entries']){
				  			$display=$_GET['entries'];
				  		}
				  		// tinh tong so trang 
				  		if(isset($_GET['page']) && (int)$_GET['page']){
				  			$page = $_GET['page'];
				  		}else{
				  			$query = "select count(id) from users";

				  			$res= mysqli_query($conn,$query) or die('could not select users');

				  			$rows = mysqli_fetch_array($res,MYSQLI_NUM);
				  			$record = $rows[0];
				  			
				  			if($record>$display){
				  				$page=ceil($record/$display);
				  			}else{
				  				$page = 1;
				  			}

				  			$start = (isset($_GET['start']) && (int)$_GET['start']) ? $_GET['start']:0;
				  			$select = "select * from users order by id limit $start,$display";
				  			$result = mysqli_query($conn,$select) or die(mysqli_error($conn));
				  			$count=1;
				  			while($set=mysqli_fetch_array($result,MYSQLI_ASSOC)){
				  				$id = $set['id'];
				  				$username = $set['username'];

				  	 ?>
				    <tr>
				      <th scope="row"><?php echo $count++; ?></th>
				      <td><?php echo $id; ?></td>
				      <td><?php echo $username; ?></td>
				    </tr>
				    <?php 
				    		}
				  		}
				     ?>
				  </tbody>
				</table>
				<ul class="pagination">
					<?php 
					if($page>1){
						$next = $start+$display;
						$prev = $start-$display;
						$current=($start/$display)+1;
						if($current!=1){
							echo "<li class='page-item'><a class='page-link' href='managerUser.php?start=$prev'>Prev</a></li>";
						}
						for($i=1;$i<=$page;$i++){
							echo '<li class="page-item"><a class="page-link" href="managerUser.php?start='.($display*($i-1)).'">'.$i.'</a></li>';
						}

						if($current != $page){
							echo "<li class='page-item'><a class='page-link' href='managerUser.php?start=$next'>Next</a></li>";
						}
					}
				 ?>
				  </ul>
			</div>
		</div> <!-- end content-section -->
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