<?php
	$hostname='localhost';
	$username='root';
	$password='';
	$conn=mysqli_connect($hostname, $username, $password) or die ('Error connnecting to mysql');
	mysqli_select_db($conn, 'ictc_online'); 

?>