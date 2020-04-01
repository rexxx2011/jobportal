<?php
$conn=mysqli_connect('localhost','root','','jobportal');
if ($conn->connect_error) {
	die("We are really sorry!!! Cannot connect to the server at the moment.");
}
else{
	if (isset($_POST['create'])) {
		$fname=$_POST['fname'];
		$lname=$_POST['lname'];
		$mailid=$_POST['emailid'];
		$gender=$_POST['gender'];
		$pimg=$_FILES['pimg']['name'];
		$pswd=$_POST['password'];
		if (empty($fname)||empty($lname)||empty($mailid)||empty($gender)||empty($pimg)||empty($pswd)) {
			header('Location:signin.php?error=emptyfields');
		}
		else{
			/*following code is for the validation*/
			$filetemp=$_FILES['pimg']['tmp_name'];
			$filesize=$_FILES['pimg']['size'];
			$filename=$_FILES['pimg']['name'];
			$fileerror=$_FILES['pimg']['error']; 
			$filetype=$_FILES['pimg']['type'];
			$fileext=explode('.',$filename);
			$fileex=strtolower(end($fileext));
			$allowed= array('jpg','jpeg','png');
			if (!in_array($fileex,$allowed)) {
				die();
			}
			if (!preg_match('/^[a-zA-Z0-9_]/',$pswd)) {
				$error='invalid_password';
			}
			
			if (!preg_match('/^([a-zA-Z]+)$/',$fname )) {
			$error="invalid_first_name";
			header('Location:signin.php?error='.$error);
			}
			if (!preg_match('/^([a-zA-Z]+)$/',$lname )) {
			$error="invalid_last_name";
			header('Location:signin.php?error='.$error);
			}
			/*email validation*/
			if (!preg_match("/^[a-zA-Z0-9_]+@[a-zA-Z0-9_]+\.[a-zA-Z]{2,5}/",$mailid)) {
				$error="invalid_emailid";
				header('Location:signin.php?error='.$error);
			}

			/*if user selects to be an employe then the following will be executed*/
			/*if ($utype=='Employe') {
				$e_id=substr(uniqid(),0,10);
				$filedestiny='images/profileimgs/'.$e_id.'.'.$fileex;
				move_uploaded_file($filetemp, $filedestiny);
				$query="INSERT INTO employe_details VALUES ('$e_id','$pswd','$fname','$lname','$mailid','$filedestiny','$gender')";
				$res=mysqli_query($conn,$query);
				if ($res) {
					echo "usercreated";
				}
			}*/
			/*If the user wants to be an employer then the following code will be executed*/
			$c_name=$_POST['companyname'];
			$c_address=$_POST['companyaddress'];
			$e_id=substr(uniqid(),0,10);
			$filedestiny='images/profileimgs/'.$e_id.'.'.$fileex;
			move_uploaded_file($filetemp, $filedestiny);
			$query="INSERT INTO employer_details VALUES ('$e_id','$pswd','$fname','$lname','$filedestiny','$gender','$mailid','$c_name','$c_address','no')";
			$res=mysqli_query($conn,$query);
			if ($res) {
				echo "usercreated";
				session_start();
				$_SESSION['emailid']=$mailid;
				$_SESSION['first_name']=$fname;
				$_SESSION['last_name']=$lname;
				$_SESSION['imgsrc']=$filedestiny;
				$_SESSION['employeid']=$e_id;
				header('Location:employer.php');
			}
				
			


		}
	}
}

?>