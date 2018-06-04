<?php
	session_start();
	require('../dbconfig/config.php');

	if(!isset($_SESSION['username']))
	{
		header('location:../index-new.php');
	}

	if(isset($_POST['logout']))
	{
		session_unset();
		session_destroy();
		$_SESSION=array();?>
		<meta http-equiv="refresh" content=".000001;url=../index-new.php"/><?php
	}

?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="css/manage_accounts.css">
    <link rel="stylesheet" href="../Design Template/custom.css">
    <link rel="stylesheet" href="../Design Template/css/bootstrap.min.css">
	<link href="../Design Template/local-fonts/Orbitron/Orbitron.css" rel="stylesheet">   
	<link href="../Design Template/local-fonts/Open-Sans/Open-Sans.css" rel="stylesheet">
	<!--FOR BADGE BOOTSTRAP
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	END OF BADGE BOOTSTRAP-->
</head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ICTC OBaR | User Accounts</title>
    <style>
    body{
            background: #344e35 ;
            font-family: 'open_sans_condensedlight', sans-serif;
            font-size: 20px;
        }
    </style>
<body>
	<div class="Header">	
		<img src="../Design Template/images/DLSL-logo.png" class="logo" width="100px" height="100px">	
		<div class="Title">ICTC ONLINE</div>
		<div class="SubTitle">De La Salle Lipa </div>
	</div>
	<div id="Menubar_position">
		<nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #1B1F1B;">
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav">
					<li class="nav-item acstive">
						<a class="nav-link" href="#">Home <span></span><span></span></a>
					</li>

					<li class="nav-item active">
						<a class="nav-link" href="#">ICTC Services </a>
					</li>

					<li class="nav-item active">
						<a class="nav-link" href="#">ICTC Overview</a>
					</li>

					<li class="nav-item active">
						<a class="nav-link" href="#">View FAQ</a>
					</li>
					<li class="nav-item active">
						<div class="dropdown">
							<a class="dropdown" href="#"><?php echo $_SESSION['fullname']; ?></a>
							<div class="dropdown-content">
								<a href="#">My Account</a>
								<a href="../logout.php">Logout</a>
							</div>
						</div>
					</li>
				</ul>
			</div>
		</nav>
	</div>

	<div class="main-body">

		<div class="Service">
			<p>Online Borrowing and Returning of Equipment</p>
		</div>
			<table class="status_table" border=1>
				<th colspan='14'><center>User Accounts</center></th>
				<tr>
					<td><label>User ID</label></td>
					<td><label>Fullname</label></td>
					<td><label>Gender</label></td>
					<td><label>Birthday</label></td>
					<td><label>Contact Number</label></td>
					<td><label>Email</label></td>
					<td><label>Username</label></td>
					<td><label>Password</label></td>
					<td><label>Usertype</label></td>
					<td><label>Admin</label></td>

				<?php
					$search_query=$_SESSION['search_query'];

					$query_search="SELECT * FROM userinfotable WHERE (username LIKE '%".$search_query."%') OR (fullname LIKE '%".$search_query."%')";

					$result_search=mysqli_query($connect,$query_search);

					if(mysqli_num_rows($result_search)>0)
					{
						while($row=mysqli_fetch_array($result_search))
						{
							$user_ID=$row['user_ID'];
							$fullname=$row['fullname'];
							$gender=$row['gender'];
							$bday=$row['birthday'];
							$cn=$row['contact_num'];
							$email=$row['email'];
							$username=$row['username'];
							$pw=$row['password'];
							$usertype=$row['usertype'];

							echo "<tr>";
							echo "<td class='info'>".$user_ID."</td>";
							echo "<td class='info'>".$fullname."</td>";
							echo "<td>".$gender."</td>";
							echo "<td>".$bday."</td>";
							echo "<td>".$cn."</td>";
							echo "<td>".$email."</td>";
							echo "<td>".$username."</td>";
							echo "<td>".$pw."</td>";
							echo "<td>".$usertype."</td>";
							echo "</tr>";
						}
					}
					else
					{
						echo "";

					}
						?>
					</form>
			</table>
			<table>
				<tr><td><button class="back_to_menu" onclick="location='admin_dashboard.php'"/>◄ Back to Dashboard</button></td></tr><br>
				<tr><td><button onclick="location='adduser_account.php'"/><span>Add User</span></button></td></tr>

				<tr>
					<form action="search_accounts.php" method="POST">
					    <td><input type="text" name="search_query" placeholder="Enter Username or Fullname"/></td>
						<td><input type='submit' id='search' name='search' value='Search'></td><?php
						if(isset($_POST['search']))
							{
								$search_query=$_POST['search_query'];
								$_SESSION['search_query']=$search_query;
								?><meta http-equiv="refresh" content=".000001;url=search_accounts.php"/><?php
							}
						?>
					</form>
				</tr>
			</table>
		</div>

	<footer>
		<div class="footer-info">
		<br>
		<center>
			<div class="footer-img">
			<img src="../Design Template/images/footer-img1.png">
			<img src="../Design Template/images/footer-img2.png">
			</div>

			<br>
			De La Salle Lipa; ICTC<br>
			1962 JP Laurel National Highway<br>
			Mataas Na Lupa, Lipa City 4217<br>
			Tel. No. 63.43.756-5555<br>
			Telefax: 756-3117<br>
			© Copyright 2018
			<br>
		</center>
		</div>
	</footer>
</body>
</html>