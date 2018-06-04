<?php
	include  '../db_connect.php';
	session_start();
	echo "<pre>";
	print_r($_POST);
	$id = $_GET["id"];
	$status = $_POST["status"];
	if($status == "Approve")
	{
		$comments = $_POST["comments"];
		$request_query = "UPDATE request SET comments_superior = '$comments', approved_ictc = 1, status = 'Approved' WHERE id = '$id'";
		$request_result = mysqli_query($conn, $request_query);
		$_SESSION["flash_message"] = "Request has been approved. Superior may now assign web support to request.";
	}
	else if($status == "Disapprove")
	{
		echo "disapproved";
		$request_query = "DELETE FROM request WHERE id = $id";
		$request_result = mysqli_query($conn, $request_query);
		$_SESSION["flash_message"] = "Request has been disapproved.";
	}
	else
	{
		$comments = $_POST["comments"];
		$request_query = "UPDATE request SET comments_superior = '$comments' WHERE id = '$id'";
		$request_result = mysqli_query($conn, $request_query);
		$_SESSION["flash_message"] = "Request has been updated.";
	}

	header('location:request_view.php');

?>