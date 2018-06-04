
	
<?php
include 'dbconnect.inc';

	if(isset($_GET['edit']))
	{
		$formid=$_GET['edit'];
		$res=mysql_query("SELECT * FROM forms");
		$row=mysql_fetch_array($res);
	}
	if(isset($_POST['status']))
	{
		$status=$_GET['status'];
		$formid=$_POST['formid'];
		$sql= "UPDATE forms SET status='$status' where formid='$formid'";
		$res=mysql_query($sql);
	}
?>

<form action="edit.php" method="POST">
	

	