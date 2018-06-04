<?php
	include  '../db_connect.php';
	session_start();
	echo "<pre>";
	print_r($_POST);
	$id = $_GET["id"];
	$status = $_POST["status"];
	echo "disapproved";
	$request_query = "DELETE FROM request WHERE id = $id";
	$request_result = mysqli_query($conn, $request_query);
	$_SESSION["flash_message"] = "Request has been deleted.";
	
	header('location:request_view.php');

?>