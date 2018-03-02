<?php session_start(); ?>
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
		<div id="header">
			<ul class="nav justify-content-end bg-dark">
				<li class="nav-item">
			    <a class="nav-link active bg-light" href="#">Movies Schedule</a>
			  </li>
			  <li class="nav-item">
			    <a class="nav-link " href="#">Sub Category</a>
			  </li>
			  <li class="nav-item">
			    <a class="nav-link" href="#">Category</a>
			  </li>
			  <li class="nav-item">
			    <a class="nav-link" href="#">Movie Schedule</a>
			  </li>
			  <li class="nav-item">
			    <a class="nav-link" href="#">Auditorum</a>
			  </li>
			  <li class="nav-item dropdown">
			    	<button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				    Dropdown
				  </button>
				  <div class="dropdown-menu margin3" aria-labelledby="dropdownMenu2">
				    <button class="dropdown-item" type="button">Manager Employee</button>
				    <a href="" class="dropdown-item" type="button btn-primary">Logout</a>
				  </div>
			  </li>
			</ul>
		</div> <!-- end header -->
		<div id="content-section">
			<input class="form-control clockpicker bg-light" style="width: 100px;" id="single-input" value="" placeholder="Now" >
                <script type="text/javascript">
                var input = $('.clockpicker-with-callbacks').clockpicker({
                    donetext: 'Done',
                        init: function() { 
                            console.log("colorpicker initiated");
                        },
                        beforeShow: function() {
                            console.log("before show");
                        },
                        afterShow: function() {
                            console.log("after show");
                        },
                        beforeHide: function() {
                            console.log("before hide");
                        },
                        afterHide: function() {
                            console.log("after hide");
                        },
                        beforeHourSelect: function() {
                            console.log("before hour selected");
                        },
                        afterHourSelect: function() {
                            console.log("after hour selected");
                        },
                        beforeDone: function() {
                            console.log("before done");
                        },
                        afterDone: function() {
                            console.log("after done");
                        }
                });

                // Manually toggle to the minutes view
                $('#check-minutes').click(function(e){
                    // Have to stop propagation here
                    e.stopPropagation();
                    input.clockpicker('show')
                            .clockpicker('toggleView', 'minutes');
                });
                </script>
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
	<script type="text/javascript" src="../public/clockpicker/dist/bootstrap-clockpicker.min.js"></script>
</body>
</html>