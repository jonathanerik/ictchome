<?php
session_start();
include('dbconnect.inc');


$answer = $_POST['logintype'];  
if ($answer == "faculty") { 
$username=$_POST['username'];
$password=$_POST['password'];
$query1="SELECT * FROM admin WHERE username='$username' AND password='$password'";

$result1= mysql_query($query1) ;
$count1= mysql_num_rows($result1);

if ($count1 == 1){
$_SESSION['username'] = $username;
header("location:Preload-pos-faculty.php");
}
else{
header("location:Preload-neg-faculty.php");
session_destroy();
}

if (isset($_SESSION['username'])){
$username = $_SESSION['username'];
}
         
         
}
else {
    $username=$_POST['username'];
$password=$_POST['password'];
$query1="SELECT * FROM admin WHERE username='$username' AND password='$password'";

$result1= mysql_query($query1) or die(mysql_error($conn));
$count1= mysql_num_rows($result1);

if ($count1 == 1){
$_SESSION['username'] = $username;
header("location:Preload-pos-admin.php");
}
else{
header("location:Preload-neg-admin.php");
session_destroy();
}

if (isset($_SESSION['username'])){
$username = $_SESSION['username'];
}

}
?>