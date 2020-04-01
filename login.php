<?php
if (isset($_POST['login'])) {
	$mailid=$_POST['mailid'];
	$pswd=$_POST['password'];
	if (empty($mailid)||empty($pswd)) {
		header('Location:login.php?error=empty_fields');
	}
	else{
		$conn=mysqli_connect('localhost','root','','jobportal');
		if ($conn->connect_error) {
			die('connecton error');
		}
		$query1="SELECT * FROM employe_details WHERE email_id='$mailid' and password='$pswd'";
		$query2="SELECT * FROM employer_details WHERE emailid='$mailid' and password='$pswd'";
		$res1=mysqli_query($conn,$query1);
		$res2=mysqli_query($conn,$query2);
		if ($res1->num_rows>0) {
			$res=$res1->fetch_assoc();
			session_start();
			$_SESSION['emailid']=$res['email_id'];
			$_SESSION['first_name']=$res['first_name'];
			$_SESSION['last_name']=$res['last_name'];
			$_SESSION['imgsrc']=$res['imgsrc'];
			$_SESSION['employeid']=$res['employe_id'];
			$_SESSION['utype']='EMPLOYE';
			header('Location:employe.php');

		}
		elseif ($res2->num_rows>0) {
			$res=$res2->fetch_assoc();
			session_start();
			$_SESSION['emailid']=$res['emailid'];
			$_SESSION['first_name']=$res['first_name'];
			$_SESSION['lname']=$res['last_name'];
			$_SESSION['imgsrc']=$res['imgsrc'];
			$_SESSION['employeid']=$res['employer_id'];
			$_SESSION['utype']='EMPLOYER';
			header('Location:employer.php');

		}
		else{
			header('Loocation:login.php?error=incorrect_credentials');
		}

	}
}


?>
<!DOCTYPE html>
<html>
<head>
	<title>Login to your account</title>
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

    <div class="ftco-section bg-light">
      <div class="container">
        <div class="row">
       
          <div class="col-md-12 col-lg-8 mb-5">
          
			 <form action="login.php" method="post" class="p-5 bg-white">
              <div class="row form-group">
                <div class="col-md-12 mb-3 mb-md-0">
                  <p class="font-weight-bold" >Email Id
                  <input type="email" name="mailid" class="form-control" style="width: 60%;"></p>
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-12 mb-3 mb-md-0">
                  <p class="font-weight-bold" >Password
                  <input type="password" name="password" class="form-control" style="width: 60%;"></p>
                </div>
              </div>

	           <div class="row form-group">
	            <div class="col-md-12">
	              <input type="submit" value="login" name="login" class="btn btn-primary  py-2 px-5">
	            </div>
	          </div>
          </div>
          
      </form>

          <div class="col-lg-4">
            <div class="p-4 mb-3 bg-white">
              <h3 class="h5 text-black mb-3">Contact Info</h3>
              <p class="mb-0 font-weight-bold">Address</p>
              <p class="mb-4">203 Fake St. Mountain View, San Francisco, California, USA</p>

              <p class="mb-0 font-weight-bold">Phone</p>
              <p class="mb-4"><a href="#">+1 232 3235 324</a></p>

              <p class="mb-0 font-weight-bold">Email Address</p>
              <p class="mb-0"><a href="#"><span class="__cf_email__" data-cfemail="671e081215020a060e0b2703080a060e094904080a">[email&#160;protected]</span></a></p>

            </div>
            
            <div class="p-4 mb-3 bg-white">
              <h3 class="h5 text-black mb-3">More Info</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa ad iure porro mollitia architecto hic consequuntur. Distinctio nisi perferendis dolore, ipsa consectetur</p>
              <p><a href="#" class="btn btn-primary  py-2 px-4">Learn More</a></p>
            </div>
          </div>


        </div>
       </div>
   </div>
    	
    </div>

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