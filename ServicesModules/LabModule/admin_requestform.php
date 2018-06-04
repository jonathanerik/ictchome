<?php
session_start();

$host="localhost";
$username="root";
$pass="";
$db="ems";

$conn=mysqli_connect($host,$username,$pass,$db);
if(!$conn){
	die("Database connection error");
}

// insert query for register page
if(isset($_REQUEST['rname']))
{
$rname=$_POST['rname'];
$section=$_POST['section'];
$roccupy=$_POST['roccupy'];
$purpose=$_POST['purpose'];
$rmail=$_POST['rmail'];
$pnumber=$_POST['pnumber'];
$date=$_POST['date'];
$time_in=$_POST['time_in'];
$time_out=$_POST['time_out'];
$apply_by=$_POST['user_id'];
$status="Pending";

	
	
	 $query="INSERT INTO `applied_leave` (`id`,`rname`,`section`,`roccupy`,`purpose`,`rmail`,`pnumber`,`date`,`time_in`,`time_out`,`apply_by`,`status`) VALUES ('','$rname','$section','$roccupy','$purpose','$rmail','$pnumber','$date','$time_in','$time_out','$apply_by','$status')";
	
	$res=mysqli_query($conn,$query);
	if($res){
		$_SESSION['success']="Request sent successfully!";
		header('Location:requestform_superior.php');
	}else{
		echo "Leave not Applied, please try again!";
	}
	}
	




?>