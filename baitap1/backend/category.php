<?php include 'header.php'; ?>
<div style='width: 100%'>
	<h1 class="btn btn-primary">Category</h1>
</div>

<div class="container">
	<?php $count=0; 
	include 'connect.php';
	?>
	<div class="row">
		<div class="offset-md-3 col-md-6">
			<table class="table table-hover">
			  <thead>
			    <tr>
			      <th scope="col">#</th>
			      <th scope="col">Name Category</th>
			      <th scope="col">Description</th>
			      <th scope="col">Edit</th>
			      <th scope="col">Delete</th>
			    </tr>
			  </thead>
			  <tbody>
			  	<?php 
			  		
			  		$display = 5;
			  		if(isset($_GET['page'])&& (int)$_GET['page']){
			  			$page = $_GET['page'];
			  		}else{
			  			$query='select count(id) from category';
			  			$conn->set_charset('utf-8');
			  			$result=mysqli_query($conn,$query) or die(mysqli_error($conn));
			  			$rows=mysqli_fetch_array($result,MYSQLI_NUM);
			  			$record=$rows[0];
			  			if($record > $display){
			  				$page=ceil($record/$display);
			  			}else{
			  				$page=1;
			  			}
			  			$start = (isset($_GET['start'])&& (int)$_GET['start'])?$_GET['start']:0;
			  			$sql="select * from category order by id limit $start,$display";
			  			$res=mysqli_query($conn,$sql) or die(mysqli_error($conn));
			  			while($row=mysqli_fetch_array($res,MYSQLI_ASSOC)){
			  				$id=$row['id'];
			  	 ?>
			    <tr>
			      <th scope="row"><?php echo ++$count; ?></th>
			      <td><?php echo $row['category_name']; ?></td>
			      <td><?php echo $row['description']; ?></td>
			      <td ><a href=<?php echo "category_edit.php?id=$id" ?> >Edit</a></td>
			      <td><a onclick="return confirm('You want delete this category?')" href=<?php echo "category_delete.php?id=$id" ?> >Delete</a></td>
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
							echo "<li class='page-item'><a class='page-link' href='category.php?start=$prev'>Prev</a></li>";
						}
						for($i=1;$i<=$page;$i++){
							echo '<li class="page-item"><a class="page-link" href="category.php?start='.($display*($i-1)).'">'.$i.'</a></li>';
						}

						if($current != $page){
							echo "<li class='page-item'><a class='page-link' href='category.php?start=$next'>Next</a></li>";
						}
					}
				 ?>
				  </ul>
		</div>
		<div class="col-md-3">
			<a class="btn btn-primary" href="category_add.php">Add</a>
		</div>
	</div>
</div>



<?php include 'footer.php'; ?>