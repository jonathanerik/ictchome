<?php
	include  'db_connect.php';
	session_start();
	$username = $_POST['username'];
	$password = $_POST['password'];
	$request_query = "SELECT * FROM users WHERE username = '$username'";
	$request_result = mysqli_query($conn, $request_query);
	$user = mysqli_fetch_array($request_result);

	echo "<pre>";
	print_r($user);
	if(password_verify($password, $user["password"]))
	{
		echo "password match.";
		$_SESSION["user"] = $user;
		$_SESSION["logged_in"] = true;
		if($user["userType"] == "Requestor")
		{
			header('location:Requestor');
		}
		elseif ($user["userType"] == "Superior") {
			header('location:Superior');
		}
		elseif ($user["userType"] == "Support") {
			header('location:Support');
		}
		elseif ($user["userType"] == "Ictc") {
			header('location:Ictc');
		}
		else {
			header('location:Admin');
		}
		
	}
	else
	{
		echo "user/password not matched.";
		$_SESSION["flash_message"] = "Invalid credentials.";
		header('location:index.php');
	}

?>