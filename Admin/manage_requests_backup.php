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
</head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ICTC OBaR | Manage Requests</title>
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
					<li class="nav-item active">
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
			<p><b>Online Borrowing and Returning of Equipment</b></p><hr>
		</div>
		<div>
				<button class="back_to_menu" onclick="location='admin_dashboard.php'"/>◄ Back to Dashboard</button>
				<!--<button class="add_user" onclick="location='adduser_account.php'"/><span>Add User</span></button>-->

				<form action="manage_requests.php" method="POST">
					    <input type="text" name="search_query" class="search_input" placeholder="Enter RequestID or Fullname" size='26'/>
						<input type='submit' id='search' name='search' class="search_btn" value='Search'>
						<button class="view_all" onclick="location='manage_requests.php'"/><span>View All</span></button><?php
						if(isset($_POST['search']))
							{
								$search_query=$_POST['search_query'];
								$_SESSION['search_query']=$search_query;
								?><!--<meta http-equiv="refresh" content=".000001;url=search_accounts.php"/>--><?php

								//$search_query=$_SESSION['search_query'];

								//$query_search="SELECT * FROM request WHERE (request_ID LIKE '%".$search_query."%') OR (rqstr_name LIKE '%".$search_query."%')";
								$query_search="SELECT * FROM request WHERE CONCAT_WS (request_ID, user_ID, rqstr_name, room, college, item_name, quantity, status) LIKE ('%".$search_query."%')";
								$result_search=mysqli_query($connect,$query_search);

								if(mysqli_num_rows($result_search)>0)
								{
									?><table class="status_table" border=1>
									<th colspan='14'><center>Equipment Requests </center></th>
									<tr>
										<td><label>Request ID</label></td>
										<td><label>Name of Requestor</label></td>
										<td><label>Request Date From</label></td>
										<td><label>Request Date To</label></td>
										<td><label>Time</label></td>
										<td><label>Room</label></td>
										<td><label>College</label></td>
										<td><label>Item Name</label></td>
										<td><label>Quantity</label></td>
										<td><label>Return Date</label></td>
										<td><label>Return Time</label></td>
										<td><label>Status</label></td>
										<td colspan="2"><label>Action</label></td>
									</tr>
									<?php
									while($row=mysqli_fetch_array($result_search))
									{
										$request_ID=$row['request_ID'];
										$rqstr_name=$row['rqstr_name'];
										$date_from=$row['date_from'];
										$date_to=$row['date_to'];
										$time_rqstd=$row['time_rqstd'];
										$room=$row['room'];
										$college=$row['college'];
										$item_name=$row['item_name'];
										$quantity=$row['quantity'];
										$date_rtrn=$row['return_date'];
										$time_rtrn=$row['return_time'];
										$status=$row['status'];
										
										echo "<tr>";
										echo "<td class='info'>".$request_ID."</td>";
										echo "<td class='info'>".$rqstr_name."</td>";
										echo "<td>".$date_from."</td>";
										echo "<td>".$date_to."</td>";
										echo "<td>".date('h:i A', strtotime($time_rqstd))."</td>";
										echo "<td>".$room."</td>";
										echo "<td>".$college."</td>";
										echo "<td>".$item_name."</td>";
										echo "<td>".$quantity."</td>";
										echo "<td>".$date_rtrn."</td>";
										echo "<td>".date('h:i A', strtotime($time_rtrn))."</td>";
										echo "<td>".$status."</td>";
										?>

										<form action="manage_requests.php" method="POST">
											<input type="hidden" name="requestID_selected" value="<?php echo $row['request_ID'] ?>">
											<td><input type='submit' id='received' name='edit_request' value='Edit'></td>
											<td><input type='submit' id='received' name='delete_request' value='Delete'></td><?php

											if(isset($_POST['edit_request']))
											{
												$requestID_selected=$_POST['requestID_selected'];
												$_SESSION['requestID_selected']=$requestID_selected;
												?><meta http-equiv="refresh" content=".000001;url=edit_request.php"/><?php
											}
											elseif(isset($_POST['delete_request']))
											{
												$requestID_selected=$_POST['requestID_selected'];
												$_SESSION['requestID_selected']=$requestID_selected;
												?><meta http-equiv="refresh" content=".000001;url=delete_request.php"/><?php
											}
											else
											{
												echo " ";
											}
											echo "</tr>"?>
										</form><?php
									}
								}
								else
								{
									echo '<script type="text/javascript"> alert("Query not found!"); window.location = "manage_requests.php"; </script>';
									//echo "<td colspan='13'>Nothing to display</td>";
								}
							}
							else
							{
								$query="SELECT * FROM request";
								$result=mysqli_query($connect,$query);

								if(mysqli_num_rows($result)>0)
								{
									?><table class="status_table" border=1>
									<th colspan='14'><center>Equipment Requests </center></th>
									<tr>
										<td><label>Request ID</label></td>
										<td><label>Name of Requestor</label></td>
										<td><label>Request Date From</label></td>
										<td><label>Request Date To</label></td>
										<td><label>Time</label></td>
										<td><label>Room</label></td>
										<td><label>College</label></td>
										<td><label>Item Name</label></td>
										<td><label>Quantity</label></td>
										<td><label>Return Date</label></td>
										<td><label>Return Time</label></td>
										<td><label>Status</label></td>
										<td colspan="2"><label>Action</label></td>
									</tr>
									<?php
									while($row=mysqli_fetch_array($result))
									{
										$request_ID=$row['request_ID'];
										$rqstr_name=$row['rqstr_name'];
										$date_from=$row['date_from'];
										$date_to=$row['date_to'];
										$time_rqstd=$row['time_rqstd'];
										$room=$row['room'];
										$college=$row['college'];
										$item_name=$row['item_name'];
										$quantity=$row['quantity'];
										$date_rtrn=$row['return_date'];
										$time_rtrn=$row['return_time'];
										$status=$row['status'];
										
										echo "<tr>";
										echo "<td class='info'>".$request_ID."</td>";
										echo "<td class='info'>".$rqstr_name."</td>";
										echo "<td>".$date_from."</td>";
										echo "<td>".$date_to."</td>";
										echo "<td>".date('h:i A', strtotime($time_rqstd))."</td>";
										echo "<td>".$room."</td>";
										echo "<td>".$college."</td>";
										echo "<td>".$item_name."</td>";
										echo "<td>".$quantity."</td>";
										echo "<td>".$date_rtrn."</td>";
										echo "<td>".date('h:i A', strtotime($time_rtrn))."</td>";
										echo "<td>".$status."</td>";
										?>

										<form action="manage_requests.php" method="POST">
											<input type="hidden" name="requestID_selected" value="<?php echo $row['request_ID'] ?>">
											<td><input type='submit' id='received' name='edit_request' value='Edit'></td>
											<td><input type='submit' id='received' name='delete_request' value='Delete'></td><?php

											if(isset($_POST['edit_request']))
											{
												$requestID_selected=$_POST['requestID_selected'];
												$_SESSION['requestID_selected']=$requestID_selected;
												?><meta http-equiv="refresh" content=".000001;url=edit_request.php"/><?php
											}
											elseif(isset($_POST['delete_request']))
											{
												$requestID_selected=$_POST['requestID_selected'];
												$_SESSION['requestID_selected']=$requestID_selected;
												?><meta http-equiv="refresh" content=".000001;url=delete_request.php"/><?php
											}
											else
											{
												echo " ";
											}
											echo "</tr>"?>
										</form><?php
									}
								}
								else
								{
									echo '<script type="text/javascript"> alert("There is no request!"); window.location = "manage_requests.php"; </script>';
								}
							}
					?>
			</table>
		</div>
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