<?php
session_start();
if (!isset($_SESSION["employeid"])) {
    header('Location:signinemployer.php');
}
$jid=$_GET['jobid'];
$conn=mysqli_connect('localhost','root','','jobportal');
$query="SELECT * FROM job_details WHERE job_id='$jid'";
$result=mysqli_query($conn,$query);
$details='';
if ($result->num_rows>0) {
	$details=$result->fetch_assoc();
}
$empid=$details['employer_id'];
$query3="SELECT * FROM employer_details WHERE employer_id='$empid'";
$q3result=mysqli_query($conn,$query3);
$edetails=$q3result->fetch_assoc();

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
    <!-- End Nav -->

    <div class="bg-light ">
    	<div class="container">
    		<div class="row">
    			<div class="col-md-12">
    				<div><h2><?php echo $edetails['company_name'];?></h2></div>
    				<div class="font-weight-bold"><?php echo $details['job_post']?></div>


    				<div><h3>Key Skill Needed</h3></div>
    				<div class="font-weight-bold"><?php echo $details['skill1'] ?></div>
    				<div class="font-weight-bold"><?php echo $details['skill2'] ?></div>
    				<div class="font-weight-bold"><?php echo $details['skill3'] ?></div>
    				<div><h3>Job Type</h3></div>
    				<div class="font-weight-bold"><?php echo $details['job_type'];?></div>
    				<div><h3>Job Description</h3></div>
    				<div class="font-weight-bold"><?php echo $details['job_description']; ?></div>
    				<h3>Experience Needed?</h3>
    				<div class="font-weight-bold"><?php echo $details['exp_needed']; ?></div>
    				<h3>Experience duration needed?</h3>
    				<div class="font-weight-bold"><?php echo $details['exp_duration']; ?></div>
    				<?php
					$eid=$details['employer_id'];
					$mailid=$edetails['emailid'];
    				?>
    				<div><label>Contact us at: <?php echo $mailid?></label></div>

    				<form action="apply.php?jid=<?php echo $details['job_id'];?>">
    					<input type="submit" name="Apply" class="btn btn-primary  py-2 px-5">
    				</form>
                    <li class="nav-item cta mr-md-2"><a href="apply.php?jid=<?php echo $details['job_id'];?>" class="nav-link">Logout</a></li>



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