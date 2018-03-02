<?php 
	include_once('connect.php');
	$id=$_GET['id'];
	$query="delete from auditorum where id =$id";
	$result=mysqli_query($conn,$query);
	if($result){
		header('location:auditorum.php');
	}
 ?>