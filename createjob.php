<?php
if (isset($_POST['createjob'])) {
	$conn=mysqli_connect('localhost','root','','jobportal');
	if ($conn->connect_error) {
		die('couldnt connect to the database at the moment');
	}
	else{
		$title=$_POST['job_position'];
		$type=$_POST['job_type'];
		$skill1=$_POST['skill1'];
		$skill2=$_POST['skill2'];
		$skill3=$_POST['skill3'];
		$eneed=$_POST['exp_need'];
		$edur=$_POST['exp_dur'];
		$loc=$_POST['job_loc'];
		$desc=$_POST['job_desc'];

		if ($eneed=='Yes' && empty($edur)) {
			$error='please_enter_exp_dur';
		}
		else{
			$edur='';
		}
		if (empty($title)||empty($type)||empty($skill1)||empty($skill2)||empty($skill3)||empty($eneed)||empty($loc)||empty($desc)) {
			$error="please_fill_all_the_fields";
			die();
		}
		$jid=substr(uniqid(),0,10);
		session_start();
		$eid=$_SESSION['employeid'];
		$query="INSERT into job_details VALUES('$jid','$eid','$title','$loc','$type','$eneed','$edur','$skill1','$skill2','$skill3','$desc')";
		$res=mysqli_query($conn,$query);
		if ($res) {
			echo "job created";
		}
		else{
			echo "error";
		}

	}
}

?>