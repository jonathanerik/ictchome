<?php
    if(isset($_POST['submit'])) {

    //get the name and comment entered by user
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];

    //connect to the database
    $dbc = mysqli_connect('host', 'username', 'password', 'dbname') or die('Error connecting to MySQL server');
    $check=mysqli_query($dbc,"select * from clients where firstname='$firstname' and lastname='$lastname'");
    $checkrows=mysqli_num_rows($check);

   if($checkrows>0) {
      echo "customer exists";
   } else {  
    //insert results from the form input
      $query = "INSERT IGNORE INTO clients(firstName, lastName) VALUES('$firstName', '$lastName')";

      $result = mysqli_query($dbc, $query) or die('Error querying database.');

      mysqli_close($dbc);
    }
    echo "Customer Added";
    };
  ?>