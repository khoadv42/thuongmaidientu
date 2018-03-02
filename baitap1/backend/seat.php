<?php include 'header.php'; ?>
<style type="text/css" media="screen">
	.seat{
	width: 20px;
	height: 20px;
	background-color:yellow;
	border: solid 1px black; 
	float: left;
	
}
</style>
<div style='width: 100%'>
	<h1 class="btn btn-primary" id="demo">Seat</h1>
</div>

<div class="container">
	<div class="row">
		<form action="" method="get" accept-charset="utf-8">
			<?php
		include 'connect.php';
		$conn->set_charset('utf-8');

		$result=mysqli_query($conn,"select * from auditorum");
		$output='';
		while($rows=mysqli_fetch_array($result,MYSQLI_ASSOC)){
			$id=$rows['id'];
			$name=$rows['name'];
			$output.='
			 <div class="custom-control custom-radio custom-control-inline act">
			  <input type="radio" id="'.$id.'" name="auditorum" class="custom-control-input" value="'.$name.'" >
			  <label class="custom-control-label" for="'.$id.'">'.$name.'</label>
			</div>
			';
		}
		echo $output;
		?>
		</form>
	</div>
	
	<div class="row" id="noidung" style="" >
		<div id="shown">
			
		</div>
	</div>
	<script>
		$(".act").click(function(){
			var val=$(this).find("input:first").val();
			$.post('seat_2.php',{auditorum:val},function(data){
				$("#shown").html(data);
			});
			
		});
	</script>
</div>



<?php include 'footer.php'; ?>

