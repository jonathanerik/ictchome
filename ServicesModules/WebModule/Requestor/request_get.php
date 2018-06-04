<?php 
	session_start();
	if(isset($_SESSION["logged_in"]))
	{
		if($_SESSION["user"]["userType"] == "Ictc")
		{
			header('location:../Ictc');
		}
		elseif ($_SESSION["user"]["userType"] == "Superior") {
			header('location:../Superior');
		}
		elseif ($_SESSION["user"]["userType"] == "Support") {
			header('location:../Support');
		}
		elseif ($_SESSION["user"]["userType"] == "Admin") {
			header('location:../Admin');
		}
	}
	?>
<html>
<head>
    <link rel="stylesheet" href="../Template/css/custom.css">
    <link rel="stylesheet" href="../Template/css/bootstrap.min.css">
	<link href="../Template/local-fonts/Orbitron/Orbitron.css" rel="stylesheet">   
	<link href="../Template/local-fonts/Open-Sans/Open-Sans.css" rel="stylesheet">
</head>
    
<style>
body{
	background: #344e35 ;
    font-family: 'open_sans_condensedlight', sans-serif;
    font-size: 20px;
}

th{
	font-family: 'open_sans_condensedlight', sans-serif;
	font-size: 25px;
}
tr{
	height:50px;
	width:100px;
}
td{
	font-family: 'open_sans_condensedlight', sans-serif;
	font-size: 20px;
}

.navbar-nav{
	position: relative;
	left: 150px;
    margin-left: 450px;
    font-family: 'open_sans_condensedlight', sans-serif;
    font-size: 20px;
}
        
.navbar-nav *{
	box-sizing: border-box;
	transition: all 0.35s ease;
}
	     
.navbar-nav li {
	display: inline-block
	list-style: outside none none;
	margin: .5em 1em;
	padding: 0;
}
		 
.navbar-nav a{
	padding: .5em 0.8em;
	color: rgba(255,255,255,0.5);
	position: relative;
	text-decoration: none;
}
		 
.navbar-nav a:before,
.navbar-nav a:after{
	height: 14px;
	width: 14px;
	position: absolute;
	content: '';
	transition: all 0.35s ease;
	opacity: 0;
}
		
.navbar-nav a:before{
	right: 0;
	top: 0;
	border-right: 3px solid #087830;
	border-top: 3px solid white;
	transform: translate(-100%,50%);
}
			
.navbar-nav a:after{
	left: 0;
	bottom: 0;
	border-left: 3px solid #087830;
	border-bottom: 3px solid white;
	transform: translate(100%,-50%)
}
	    
a:hover:before,
a:hover:after{
	transform: translate(0%,0%);
	opacity: 1;
}
        
li{
    padding-left: 70px;
}
        
.ServiceTitle{
	width: 1290px;
	height: 30px;
	background-color: #151815;
	color: white
}
        
.Header{
	width: 1690px;
	height: 190px;
	background: #151815;
	color: white;
	top: 90px;
}
        
.Title{
	font-family: 'orbitronlight', sans-serif;
	font-size: 200%;
	position: absolute;
	left: 720px;
	top: 108px
}
        
.SubTitle{
	position: absolute;
	font-size: 20px;
	font-family: 'open_sans_condensedlight', sans-serif;
	left: 800px;
	top: 155px
}

.logo{
	position: absolute;
	left: 800px;
	top: 10px;
}
        
.main-body{
	width: 1300px;
	height: 800px;
	border-style: solid;
	border-width: 5px;
	border-color: #333;
	background: #f2f2f2;
	margin-top: 20px;
}
        
footer{
	width: 100%;
	height: 320px;
	background-color: #21282E; 
	border-style: solid;
	border-width: 2px;
	border-color: #444;
	color: white;
	font-family: 'open_sans_condensedlight', sans-serif;
}
        
.footer-info{
	margin-left: 50px;
	margin-top: 0px;
	font-size: 80%;
}

    </style>
    
<body>
	<div class="Header">
		<img src="../Template/images/DLSL-logo.png" class="logo" width="100px" height="100px"></center>
		
		<div class="Title">ICTC ONLINE</div></center>
		<div class="SubTitle">De La Salle Lipa</div></center>
	</div>

<nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #1B1F1B;">
  	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
	</button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
    	<ul class="navbar-nav">
    		<li class="nav-item active">
				<a class="nav-link" href="index.php">Home</a>
			</li>
    		<li class="nav-item active">
				<a class="nav-link" href="faqs.php">View FAQs</a>
			</li>
			<li class="nav-item active">
				<a class="nav-link" href="../logout.php">Logout</a>
			</li>
      	</ul>
	</div>
</nav>

	<center>
	<div class="main-body">
		<div class="ServiceTitle">
			<center> Web Support Request
	</div>

<br>

	<table border=3 width=500px height=100px>
		<form action="request_post.php" method="POST">
			<th colspan='2'><center>Web Support Request Form</center></th>
			<tr>
				<td><label>Name of Requestor:</label></td>
				<td><input type="text" size="30" name="name" placeholder="Name" required/></td>
			</tr>
			<tr>
				<td><label>Employee Number:</label></td>
				<td><input type="text" size="30" name="stud_no" placeholder="Employee Number" required/></td>
			</tr>
			<tr>
				<td><label>Email:</label></td>
				<td><input type="text" size="30" name="email" placeholder="Email" required/></td>
			</tr>
			<tr>
				<td><label>College:</label></td>
				<td>
					<select name="department">
						<option name="Department" value="Department">Choose you department</option>
						<option name="CBEAM" value="CBEAM">CBEAM</option>
						<option name="CEAS" value="CEAS">CEAS</option>
						<option name="CITE" value="CITE">CITE</option>
						<option name="CITHM" value="CITHM">CITHM</option>
						<option name="COL" value="COL">COL</option>
						<option name="CON" value="CON">CON</option>
					</select>
				</td>
			</tr>
			<tr>
				<td><label>Request Date:</label></td>
				<td><input type="date" name="request_date" required/></td>
			</tr>
			<tr>
				<td><label>Request:</label></td>
				<td><textarea rows='2' cols='30' name="request" placeholder="Type your message or request here." required/></textarea></td>
			</tr><br>
			<tr>
				<td colspan='2'>
					<br>
						<center>
							<button type="submit" name="submit">Submit Request</button>
							<input type="submit" name="cancel" value="Cancel Request"/>
						</center>
					<br>
				</td>
			</tr>
			
		</form>	
	</table>
</div>

	<br>
		</div>
	</center>

<br>
<footer>
<div class="footer-info">
<br>
<center>
	<div class="footer-img">
		<img src="../Template/images/footer-img1.png">
		<img src="../Template/images/footer-img2.png">
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