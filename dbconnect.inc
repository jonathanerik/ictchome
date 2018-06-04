<?php
$hostname="ictchome.mysql.database.azure.com";
$username="ictchome@ictchome";
$password="P@ssw0rd";
$conn=mysqli_connect($hostname, $username, $password,3306) or 
die ('Error connnecting to mysql');
mysql_select_db("ictc");
 ?>
