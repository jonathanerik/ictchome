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

$id=$_GET['id'];
	
	$query="delete from `applied_leave` where `id`='$id'";
	
	$res=mysqli_query($conn,$query);
	if($res){
		$_SESSION['success']="Delete Successfully successfully!";
		header('Location:admin_delete.php');
	}else{
		echo "Not Deleted , please try again!";
	}




?>