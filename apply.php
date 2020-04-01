<?php
session_start();
$jid=$_GET['jid'];
$eid=$_SESSION['employeid'];
$conn=mysqli_connect('localhost','root','','jobportal');
$query="INSERT into job_applications VALUES('$jid','$eid')";
$res=mysqli_query($conn,$query);
if ($res) {
	header('Location:employe.php?error=applied_susccessfully');
}
?>