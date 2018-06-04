<?php
	include  '../db_connect.php';
	session_start();
	echo "<pre>";
	print_r($_POST);
	$id = $_GET["id"];
	$status = $_POST["status"];

	$support = $_POST["support"];
	$request_query = "UPDATE request SET status_support = 1 WHERE id = '$id'";
	$request_result = mysqli_query($conn, $request_query);
	$_SESSION["flash_message"] = "Request has been completed.";

	header('location:request_view.php');

?>