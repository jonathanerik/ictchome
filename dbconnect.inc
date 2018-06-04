<?php
$hostname='ictchome.mysql.database.azure.com';
$username='ictchome@ictchome';
$password='P@ssw0rd';
$conn=mysql_connect($hostname, $username, $password) or 
die ('Error connnecting to mysql');
mysql_select_db('ictc');
 ?>
