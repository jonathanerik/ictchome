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
		$request_query = "UPDATE request SET comments_ictc = '$comments', approved_superior = 1 WHERE id = '$id'";
		$request_result = mysqli_query($conn, $request_query);
		$_SESSION["flash_message"] = "Request has been approved. Awaiting approval of ICTC.";
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
		$support = $_POST["support"];
		$request_query = "UPDATE request SET comments_ictc = '$comments', assigned_support = '$support' WHERE id = '$id'";
		$request_result = mysqli_query($conn, $request_query);
		$_SESSION["flash_message"] = "Request has been assigned to Web Support.";
	}
	header('location:request_view.php');

?>