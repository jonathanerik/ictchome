<?php 

include  'db_connect.php';

	$username = "requestor";
	$password = password_hash("password", PASSWORD_DEFAULT);
	$fullName = "User Requestor";
	$userType = "Requestor";

	$request_query = "INSERT INTO users (username, password, fullName, userType)
	VALUES ('$username', '$password', '$fullName', '$userType')";

	$request_result = mysqli_query($conn, $request_query);
	

	$username = "ictc";
	$password = password_hash("password", PASSWORD_DEFAULT);
	$fullName = "ICTC";
	$userType = "Ictc";

	$request_query = "INSERT INTO users (username, password, fullName, userType)
	VALUES ('$username', '$password', '$fullName', '$userType')";

	$request_result = mysqli_query($conn, $request_query);

	$username = "superior";
	$password = password_hash("password", PASSWORD_DEFAULT);
	$fullName = "Superior";
	$userType = "Superior";

	$request_query = "INSERT INTO users (username, password, fullName, userType)
	VALUES ('$username', '$password', '$fullName', '$userType')";

	$request_result = mysqli_query($conn, $request_query);


	$username = "support";
	$password = password_hash("password", PASSWORD_DEFAULT);
	$fullName = "Support";
	$userType = "Support";

	$request_query = "INSERT INTO users (username, password, fullName, userType)
	VALUES ('$username', '$password', '$fullName', '$userType')";

	$request_result = mysqli_query($conn, $request_query);


	$username = "support1";
	$password = password_hash("password", PASSWORD_DEFAULT);
	$fullName = "Support1";
	$userType = "Support";

	$request_query = "INSERT INTO users (username, password, fullName, userType)
	VALUES ('$username', '$password', '$fullName', '$userType')";

	$request_result = mysqli_query($conn, $request_query);

	$username = "admin";
	$password = password_hash("password", PASSWORD_DEFAULT);
	$fullName = "Admin";
	$userType = "Admin";

	$request_query = "INSERT INTO users (username, password, fullName, userType)
	VALUES ('$username', '$password', '$fullName', '$userType')";

	$request_result = mysqli_query($conn, $request_query);

	header("location:index.php");

      
 ?>