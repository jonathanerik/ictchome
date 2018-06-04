<?php
$con=mysqli_init(); mysqli_ssl_set($con, NULL, NULL, null, NULL, NULL);
 mysqli_real_connect($con, "ictchome.mysql.database.azure.com", "ictchome@ictchome", "P@ssw0rd", "ictc","3306");

	//$hostname='ictchome.mysql.database.azure.com';
	//$username='ictchome@ictchome';
	//$password='P@ssw0rd';
	//$conn=mysql_connect($hostname, $username, $password) 
		//or die ('Error connnecting to mysql');mysql_select_db('ictc');

 ?>

