<?php
session_start();

require('dbconnect.inc');

?>

<?php

// insert query for register page
if(isset($_REQUEST['formid']))
{
	$formid=$_POST['formid'];
	  $fullname=$_POST['fullname'];
	$email=$_POST['email'];
	$contactnumber=$_POST['contactnumber'];
	$date=$_POST['date'];
	$building=$_POST['building'];
	$department=$_POST['department'];
	$roomnumber=$_POST['roomnumber'];
	$issues=$_POST['issues'];
	$requests=$_POST['requests'];
	if($_POST['formid']==''){
		
	$query="UPDATE `forms` SET `status`='$status' where `formid`='$formid'";	
	}else{
$query="UPDATE `forms` SET `status`='$status' where `formid`='$formid'";	
	}
	
	$res=mysql_query($query);
	if($res){
		$_SESSION['success']="Data Updated successfully!";
		header('Location:dashboard.php');
	}else{
		echo "Data not Updated, please try again!";	
	}
	
}



?>