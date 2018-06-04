<?php
	$hostname='oprosys-mysqldbserver.mysql.database.azure.com';
	$username='akashil@oprosys-mysqldbserver';
	$password='P@ssw0rd';
	$conn=mysql_connect($hostname, $username, $password) 
		or die ('Error connnecting to mysql');mysql_select_db('ICTC');
 ?>
