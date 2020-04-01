<?php
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:200,300,400,600,700,800,900" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">

    
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
	<title></title>
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar" >
	    <div class="container">
	      <p class="navbar-brand"> JobPortal</p>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav" style="background-color: black;" >
	        <ul class="navbar-nav ml-auto">
	          <li class="nav-item"><a href="index.html" class="nav-link">Home</a></li>
	          <li class="nav-item"><a href="about.html" class="nav-link">About</a></li>
	          <li class="nav-item"><a href="blog.html" class="nav-link">Blog</a></li>
	          <li class="nav-item"><a href="contact.html" class="nav-link">Contact</a></li>
	          <li class="nav-item cta mr-md-2"><a href="new-post.html" class="nav-link">Logout</a></li>
	          

	        </ul>
	      </div>
	    </div>
	  </nav>
    <br><br><br>
    <!-- END nav -->


	  <section>
	  	<form enctype="multipart/form-data" method="post" action="createuser.php">
	  	<div class="ftco-section bg-light">
	  		<div class="container">
	  			<div class="row">
	  				<div class="col-md-12 col-lg-8 mb-4">
	  					<div class="row form-group">
			                <div class="col-md-12 mb-3 mb-md-0">
			                  <label class="font-weight-bold" for="fullname">First Name:</label>
			                  <input type="text" name="fname" class="form-control" placeholder="">
			                </div>
			              </div>
			              <div class="row form-group">
			                <div class="col-md-12 mb-3 mb-md-0">
			                  <label class="font-weight-bold" for="fullname">Last Name:</label>
			                  <input type="text" name="lname" class="form-control" placeholder="">
			                </div>
			              </div>

			              <div class="row form-group">
			                <div class="col-md-12 mb-3 mb-md-0">
			                  <label class="font-weight-bold" for="fullname">Emailid:</label>
			                  <input type="email" name="emailid" class="form-control" placeholder="">
			                </div>
			              </div>

			              <div class="row form-group">
			                <div class="col-md-12 mb-3 mb-md-0">
			                  <label class="font-weight-bold" >Password:</label>
			                  <input type="password" name="password" class="form-control" placeholder="">
			                </div>
			              </div>

			              <div class="row form-group">
			                <div class="col-md-12 font-weight-bold">Gender</div>
			                <div class="col-md-12 mb-3 mb-md-0">
			                  <select name="gender" class="col-md-12 mb-3 mb-md-0 form-control">
			                    <option>-----------</option>
			                    <option>Male</option>
			                    <option>Female</option>
			                  </select>                  
			                </div>
			              </div>

			              <div class="row form-group">
			                <div class="col-md-12 mb-3 mb-md-0">
			                  <label class="font-weight-bold" >Company Name</label>
			                  <input type="text" name="companyname" class="form-control" placeholder="">
			                </div>
			              </div>

			              <div class="row form-group">
			                <div class="col-md-12 mb-3 mb-md-0">
			                  <label class="font-weight-bold">Company Address:</label>
			                  <input type="text" name="companyaddress" class="form-control" placeholder="">
			                </div>
			              </div>

			              <div class="row form-group">
			              	<div class="col-md-12 mb-3 mb-md-0">
			              		<input type="file" name="pimg" class="form-control">
			              		
			              	</div>
			              	
			              </div>

			              <div class="row form-group">
			                <div class="col-md-12">
			                  <input type="submit" value="Signup" name="create" class="btn btn-primary  py-2 px-5">
			                </div>
			              </div>
		              	  <a href="login.php" class="nav-link">Existing User? Login</a>

	  						
	  					</div>
	  					
	  				</div>
	  				
	  			</div>
	  			
	  		</div>
	  		
	  	</div>
	  </form>








	  	

	  
	<!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>

<script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/bootstrap-datepicker.js"></script>
  <script src="js/jquery.timepicker.min.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>
    
</body>
</html>