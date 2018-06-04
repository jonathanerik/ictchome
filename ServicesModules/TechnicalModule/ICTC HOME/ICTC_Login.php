<?php
session_start();
include('dbconnect.inc');
$username=$_POST['username'];
$password=$_POST['password'];
$query1="SELECT * FROM admin WHERE username='$username' AND password='$password'";

$result1= mysql_query($query1) or die(mysql_error($conn));
$count1= mysql_num_rows($result1);

if ($count1 == 1){
$_SESSION['username'] = $username;
header("location:Preload-pos.php");
}
else{
header("location:Preload-neg.php");
session_destroy();
}

if (isset($_SESSION['username'])){
$username = $_SESSION['username'];
}


?>

