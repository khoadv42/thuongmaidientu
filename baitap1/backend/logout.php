<?php 
	session_start();
	$_SESSION=array();

	if(isset($_SESSION[session_name()])){
		setcookie(session_name(),time()-36000,'/',0,0);
	}
	session_destroy();
	header('Location:login.php');
 ?>