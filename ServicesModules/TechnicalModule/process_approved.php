<?php
session_start();

$host="localhost";
$username="root";
$pass="";
$db="dbconnect.inc";

$conn=mysql_connect($host,$username,$pass,$db);
if(!$conn){
	die("Database connection error");
}


// insert query for register page
if(isset($_REQUEST['fullname']))
{
$fullname=$_POST['fullname'];
	$email=$_POST['email'];
	$contactnumber=$_POST['contactnumber'];
	$date=$_POST['date'];
	$building=$_POST['building'];
	$department=$_POST['department'];
	$roomnumber=$_POST['roomnumber'];
	$issues=$_POST['issues'];
	$requests=$_POST['requests'];
$formid=$_POST['formid'];

	
	
	 $query="INSERT INTO `forms` (`formid`,`fullname`,`email,`contactnumber`,`date`,`building`,`department`,`roomnumber`,`issued`,`requests`,`formid`,`status`) VALUES ('','$fullname','$email','$contactnumber','$date','$department','$building','$roomnumber','$issues','$request','$formid','Pending')";
	
	$res=mysql_query($query);
	if($res){
		$_SESSION['success']="Approval Success!";
		header('Location:ICTC page.php');
	}else{
		echo "Leave not Applied, please try again!";
	}
	}
	




?>