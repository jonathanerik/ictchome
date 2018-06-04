<?php
	include  '../db_connect.php';
	session_start();
	echo "<pre>";
	print_r($_POST);
	$id = $_GET["id"];
	$name = $_POST["name"];
	$stud_no = $_POST["stud_no"];
	$email = $_POST["email"];
	$department = $_POST["department"];
	$request_date = $_POST["request_date"];
	$request = $_POST["request"];
	$comments_ictc = $_POST["comments_ictc"];
	$comments_superior = $_POST["comments_superior"];
	$support = $_POST["support"];
	//$status = $_POST["status"];
	if(isset($_POST["approval_ictc"]))
	{
		$approval_ictc = true;
	}
	else
	{
		$approval_ictc = false;
	}

	if(isset($_POST["approval_superior"]))
	{
		$approval_superior = true;
	}
	else
	{
		$approval_superior = false;
	}

	if($approval_superior && $approval_ictc)
	{
		$status = "Approved";
	}
	else
	{
		$status = "For Approval";
	}


	
	$support = $_POST["support"];
	$request_query = "UPDATE request SET name = '$name', stud_no = '$stud_no', email = '$email', department = '$department', request_date = '$request_date', request_message = '$request', status = '$status', comments_ictc = '$comments_ictc', comments_superior = '$comments_superior', assigned_support = '$support', approved_ictc = '$approval_ictc', approved_superior = '$approval_superior' WHERE id = '$id'";
	$request_result = mysqli_query($conn, $request_query);
	$_SESSION["flash_message"] = "Request has been updated.";
	echo mysqli_error($conn);
	header('location:request_view.php');

?>