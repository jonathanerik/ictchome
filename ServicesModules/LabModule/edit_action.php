<?php
session_start();

$host="localhost";
$username="root";
$pass="";
$db="ems";

$conn=mysqli_connect($host,$username,$pass,$db);


mysqli_select_db($con, 'ems');

$sql = "UPDATE  from 'applied_leave'  SET roccupy='$_POST[roccupy]' , date='$_POST[date]' , time_in='$_POST[time_in]' , time_out='$_POST[time_out]' , purpose='$_POST[purpose]' , rmail='$_POST[rmail]' , rname='$_POST[rrname]' , section='$_POST[section]' WHERE id='$_POST[id]'";
	
	$res=mysqli_query($conn,$query);
	if($res){
		$_SESSION['success']="Updated successfully!";
		header('Location:admin_edit.php');
	}
	else{
		echo "Update not Applied, please try again!";
	}
	




?>