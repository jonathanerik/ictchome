<?php
	include  '../db_connect.php';
	session_start();
	echo "<pre>";
	print_r($_POST);
	$id = $_GET["id"];
	$status = $_POST["status"];

	$support = $_POST["support"];
	$request_query = "UPDATE request SET requestor_done = now() WHERE id = '$id'";
	$request_result = mysqli_query($conn, $request_query);
	$_SESSION["flash_message"] = "Request has been closed.";

	header('location:request_status_get.php');

?>