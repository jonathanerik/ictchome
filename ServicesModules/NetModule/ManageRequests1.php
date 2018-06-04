<?php 
session_start();
include 'connect.inc';
if(isset($_POST['id']))
{	
	$id = $_POST['id'];
	$division = $_POST['division'];
	$cont = $_POST['contact'];
	$comm = $_POST['comment'];
	$requ = $_POST['requestedby'];
	$stat = $_POST['status'];

	include 'connect.inc';
	$query="UPDATE requestdatabase SET contact = '$cont', division = '$division', comment = '$comm', requestedby = '$requ', status = '$stat' WHERE id = '$id'";
	$is_query_successful=mysql_query($query);
	
	header("Location: ManageRequests.php?find=$id");
}
else {$id = $_POST['id'];
	$division = $_POST['division'];
	$cont = $_POST['contact'];
	$comm = $_POST['comment'];
	$requ = $_POST['requestedby'];
	$stat = $_POST['status'];

	include 'connect.inc';
	$query="UPDATE requestdatabase SET contact = '$cont', division = '$division', comment = '$comm', requestedby = '$requ', status = '$stat' WHERE id = '$id'";
	$is_query_successful=mysql_query($query);
	
	header("Location: ManageRequests.php?find=$id");}
?>