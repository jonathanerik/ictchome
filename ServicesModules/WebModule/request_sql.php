<?php 

include  'db_connect.php';

    if(isset($_POST['submit'])){
        $request_query = "INSERT INTO request (name, stud_no, age, email, department, request_date, request)
        VALUES ('".$_POST["name"]."','".$_POST["stud_no"]."','".$_POST["age"]."','".$_POST["email"]."','".$_POST["department"]."','".$_POST["request_date"]."','".$_POST["request"]."')";
        $request_result = mysql_query($request_query);
        if ($request_result){
        	header('Location: View.php');
        }
    }
 ?>
 REQUEST SUMBITTED DESIGN HERE AND REDIRECTION TO HOME OR SOME PAGE