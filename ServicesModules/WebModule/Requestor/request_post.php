<?php 

include  '../db_connect.php';
	session_start();
	$name = $_POST["name"];
	$stud_no = $_POST["stud_no"];
	$email = $_POST["email"];
	$department = $_POST["department"];
	$request_date = $_POST["request_date"];
	$request_message = $_POST["request"];
	$requestor_id = $_SESSION["user"]["id"];
	echo "<pre>";
	print_r($_POST);

	$query = "INSERT INTO request (name, stud_no, email, department, request_date, request_message, requestor_id) VALUES('$name', '$stud_no', '$email','$department', '$request_date', '$request_message', $requestor_id)";
	$request_result = mysqli_query($conn, $query);
	echo mysqli_error($conn);

	
	$_SESSION["flash_message"] = "Request has been submitted.";
    header("location:request_status_get.php");
 ?>