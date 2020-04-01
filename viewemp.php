<?php
session_start();
$empid=$_GET['eid'];
if (!isset($_SESSION["employeid"])) {
    header('Location:login.php?error=please_login_first');
}
$conn=mysqli_connect('localhost','root','','jobportal');
$query="SELECT * FROM employe_details WHERE employe_id='$empid'";
$result=mysqli_query($conn,$query);
$edetails=$result->fetch_assoc();
$conn->close();
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
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
	          <li class="nav-item cta mr-md-2"><a href="logout.php" class="nav-link">Logout</a></li>
	          

	        </ul>
	      </div>
	    </div>
	  </nav>
    <br><br><br>

    <div class="ftco-section bg-light">
      <div class="container">
        <div class="row">
       
          <div class="col-md-12 col-lg-8 mb-5">
          
                 <form action="createjob.php" method="post" class="p-5 bg-white">

              <div class="row form-group">
                <div class="col-md-12 font-weight-bold">Degree:</div>
                </div>
                <div class="row form-group">
                <div class="col-md-4 mb-3 mb-md-0 form-control"><?php echo $edetails["degreename"];?></div>
                <div class="col-md-4 mb-3 mb-md-0 form-control"><?php echo $edetails["sc1type"];?></div>
                <div class="col-md-4 mb-3 mb-md-0 form-control"><?php echo $edetails["sc1"];?></div>
                                    
                 </div>


              <div class="row form-group">
                <div class="col-md-12 font-weight-bold">Class XII</div>
                
                <div class="col-md-6 mb-3 mb-md-0 form-control"><?php echo $edetails["sc2type"];?></div>
                <div class="col-md-6 mb-3 mb-md-0 form-control"><?php echo $edetails["sc2"];?></div>
                                   
                </div>
             
              <div class="row form-group">
                <div class="col-md-12 font-weight-bold">Job Title</div>
                <div class="col-md-6 mb-3 mb-md-0 form-control"><?php echo $edetails["sc3type"];?></div>
                <div class="col-md-6 mb-3 mb-md-0 form-control"><?php echo $edetails["sc3"];?></div>                                    
                </div>

                <div class="row form-group">
                <div class="col-md-6 font-weight-bold">Gender-</div>
                <div class="col-md-6 mb-3 mb-md-0 form-control"><?php echo $edetails["gender"];?></div>
                </div>                 

  
            </form>
          </div>

          <div class="col-lg-4">
            <div class="p-4 mb-3 bg-white">
              <img style="width: 100%;height: 100%;" src="<?php echo $edetails["imgsrc"]; ?>">
              
            </div>
            
            <div class="p-4 mb-3 bg-white">
              <h3 class="h5 text-black mb-3"><?php echo "".$edetails["first_name"]." ".$edetails["last_name"];?></h3>
              <p class="font-weight-bold"><?php echo $edetails["gender"];?></p>
              <p class="font-weight-bold"><?php echo $edetails["email_id"];?></p>
              
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