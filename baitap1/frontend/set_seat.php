<!DOCTYPE html>
<html>
<head>
	<title>Index</title>
	<script type="text/javascript" src="../public/jquery.js"></script>
	<script type="text/javascript" src="../public/client.js"></script>
	<link rel="stylesheet" type="text/css" href="../public/bootstrap/dist/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="../public/bootstrap/dist/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../public/style.css">
	<link rel="stylesheet" href="../public/owlcarousel/dist/assets/owl.carousel.min.css">
	<link rel="stylesheet" href="../public/owlcarousel/dist/assets/owl.theme.default.css">
	<link rel="stylesheet" href="../public/owlcarousel/dist/assets/owl.theme.default.min.css">
	<link rel="shortcut icon" type="image/png" href="../public/img/x.jpg"/>
	<style type="text/css" media="screen">
	.seat{
		width: 20px;
		height: 20px;
		background-color:yellow;
		border: solid 1px black; 
		text-align: center;
		float: left;
	}
</style>
</head>
<body class="bg-light">
	<script>
	$(document).ready(function(){
		var count=0;
		for($i=1;$i<=52;$i++){
			$("#left").append("<input class='seat' name='arraySeat[]'>");
		}
		for($i=1;$i<=150;$i++){
			$("#center").append("<input class='seat' name='arraySeat[]'>");
		}
		for($i=1;$i<=52;$i++){
			$("#right").append("<input class='seat' name='arraySeat[]'>");
		}

		$(".seat").mouseover(function(){
			$(this).css({'background-color':"green"});
		});
		$(".seat").mouseout(function(){
			$(this).css({'background-color':"yellow"});
		});
		$('.seat').click(function(){
			if($(this).val()==""){
				count++
				if(count%2==1){
					$(this).val("X");
				}else{
					$(this).val("O");
				}
			}else{
				alert("an gian ak !");
			}
			
		});











     });
	</script>
	<div id="myWrapper" class="row bg-dark" style="margin-top: 60px;">
		<div class="count"></div>
		<div id="left" class='offset-md-1 col-md-1'>
			
		</div>
		<div id="center" class='col-md-2'>
			
		</div>

		<div id="right" class='col-md-1'>
			
		</div>
		<div class="col-md-7 bg-secondary">
			
		</div>
		<div style="clear:left;"></div>

		<div>
			<h1 style="text-align: center; margin-left: 270px;margin-top:50px" class='bg-light'>Screen</h1>
		</div>
	</div> <!-- end myWrapper -->


	<script type="text/javascript" src="../public/jquery.js"></script>
	<script src="../public/bootstrap/dist/js/bootstrap.bundle.js" type="text/javascript" charset="utf-8" ></script>
	<script src="../public/bootstrap/dist/js/bootstrap.js" type="text/javascript" charset="utf-8" ></script>
	<script src="../public/bootstrap/dist/js/bootstrap.min.js" type="text/javascript" charset="utf-8" ></script>
	<script src="../public/owlcarousel/dist/owl.carousel.js" type="text/javascript" charset="utf-8"></script>
	<script src="../public/owlcarousel/dist/owl.carousel.min.js" type="text/javascript" charset="utf-8"></script>
</body>
</html>