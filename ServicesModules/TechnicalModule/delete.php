<?php
	include_once('dbconnect.inc');
	if (isset ($_GET['del']))
	{
		$formid = $_GET['del'];
		$sql= "DELETE FROM forms WHERE formid= '$formid'";
		$res=mysql_query($sql) or die ("Failed");
	
	}
?>