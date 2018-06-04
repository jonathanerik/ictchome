<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="custom.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
	<link href="local-fonts/Orbitron/Orbitron.css" rel="stylesheet">   
	<link href="local-fonts/Open-Sans/Open-Sans.css" rel="stylesheet">
</head>
    
    <style>
        body{
            background: #344e35 ;
            font-family: 'open_sans_condensedlight', sans-serif;
            font-size: 20px;

        }
        .ServiceTitle{
	        width: 1290px;
	        height: 30px;
	        background-color: #151815;
			color: white
        }
        
        .Header{
	        width: 1349px;
	        height: 190px;
	        background: #151815;
	        color: white;
	        top: 90px; 
	        
        }
        
        .Title{
			font-family: 'orbitronlight', sans-serif;
	        font-size: 200%;
	        position: absolute;
	        left: 530px;
	        top: 108px
        }
        
        .SubTitle{
	        position: absolute;
	        font-size: 20px;
	        font-family: 'open_sans_condensedlight', sans-serif;
	        left: 610px;
	        top: 155px
        }
		
		.LogIn{
			position: absolute;
	        font-size: 20px;
	        font-family: 'open_sans_condensedlight', sans-serif;
	        left: 1250px;
	        top: 155px
		}
		
        .logo{
	        position: absolute;
	        left: 608px;
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
		
		
        
			ul {
			list-style-type: none;
			margin: 0;
			padding: 0;
			overflow: hidden;
			background-color: #f3f3f3;
			text-decoration: none;
			height:50px;
		}

		li {
			float: left;
		}

		li a{
			text-decoration: none;
			display: block;
			color: black;
			text-align: center;
			padding: 12px 16px;
			font-size:18px;
		}

		li a:hover:not(.active) {
			background-color: #ddd;
			text-decoration: none;
		}

		li a.active {
			background-color: #27AE60;
			text-decoration: none;
		}

			
    </style>
    
<body>
	
	<div class="Header">
		
		<center ><img src="images/DLSL-logo.png" class="logo" width="100px" height="100px"></center>
		
		<center> <div class="Title">ICTC ONLINE </div> </center>
		<center> <div class="SubTitle">De La Salle Lipa </div> </center>
		<i> <a href="login.php" style="color:white"> <div class="LogIn"> Log In </div> </a> </i>
		
	</div>
	
	

<center> 
<div class="main-body">
	
	<div class="ServiceTitle">
	
	<center> Software Support Request
	
</div>
	<br>
	
	<?php
		include 'dbconnect.inc';
		$uname = $_POST['username'];
		$pw = $_POST['password'];
		
		$query="SELECT * FROM users WHERE username = '$uname' and password = '$pw'";
		$result=mysql_query($query);
		$row=mysql_fetch_assoc($result);
		$name=$row['name'];
		$un=$row['username'];
		
		if($row['username'] == $uname && $row['password'] == $pw){
				header("location:home.php?name=$name&&uname=$un");
			}
	
		elseif($_POST['username'] == 'immediate_superior' && $_POST['password'] == '1234')
		{
			header("location:superiorhome.php");
		}
		
		elseif($_POST['username'] == 'ICTC' && $_POST['password'] == '1234')
		{
			header("location:ictchome.php");
		}
		
		elseif($_POST['username'] == 'software_support' && $_POST['password'] == '1234')
		{
			header("location:supporthome.php");
		}
		
		elseif($_POST['username'] == 'administrator' && $_POST['password'] == '1234')
		{
			header("location:adminhome.php");
		}
		
		else {
			echo "Incorrect username/password. Please try again.<br>";
			echo "<a href='login.html'> Back to Login Page. </a>";
		}
		
?>
	
	
</div>
</center>



<br>
<footer>
	
	<div class="footer-info">
		<br>
	<center>
	<div class="footer-img">
	<img src="images/footer-img1.png">
	<img src="images/footer-img2.png">
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