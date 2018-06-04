<!DOCTYPE html>
<html>
<title>Home</title>
<head>
    <link rel="stylesheet" href="custom.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
	<link href="local-fonts/Orbitron/Orbitron.css" rel="stylesheet">   
	<link href="local-fonts/Open-Sans/Open-Sans.css" rel="stylesheet">
</head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-ascale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <style>
        body{

            font-family: 'open_sans_condensedlight', sans-serif;
            font-size: 20px;

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
		
		
        .logo{
	        position: absolute;
	        left: 608px;
	        top: 10px;
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
		
		* {box-sizing: border-box;}
		body {font-family: Verdana, sans-serif;}
		.mySlides {display: none;}
		img {vertical-align: middle;}

		/* Slideshow container */
		.slideshow-container {
		  max-width: 900px;
		  position: relative;
		  margin: auto;
		}

		/* Caption text */
		.text {
		  color: #f2f2f2;
		  font-size: 15px;
		  padding: 8px 12px;
		  position: absolute;
		  bottom: 8px;
		  width: 100%;
		  text-align: center;
		}

		/* The dots/bullets/indicators */
		.dot {
		  height: 15px;
		  width: 15px;
		  margin: 0 2px;
		  background-color: #bbb;
		  border-radius: 50%;
		  display: inline-block;
		  transition: background-color 0.6s ease;
		}

		.active {
		  background-color: #717171;
		}

		/* Fading animation */
		.fade {
		  -webkit-animation-name: fade;
		  -webkit-animation-duration: 4s;
		  animation-name: fade;
		  animation-duration: 4s;
		}

		@-webkit-keyframes fade {
		  from {opacity: .3} 
		  to {opacity: 1}
		}

		@keyframes fade {
		  from {opacity: .3} 
		  to {opacity: 1}
		}

		@media only screen and (max-width: 300px) {
		  .text {font-size: 11px}
		}	
		
		ul {
			list-style-type: none;
			margin: 0;
			padding: 0;
			overflow: hidden;
			background-color: #f3f3f3;
			text-decoration: none;
			height:50px;
			width:1161x;
		}

		li {
			float: left;
		}

		li a{
			text-decoration: none;
			display: block;
			color: black;
			text-align: center;
			font-size:18px;
		}

		li a:hover:not(.active) {
			text-decoration: none;
			color:#27AE60;
		}

		li a.active {
			background-color: #27AE60;
			text-decoration: none;
			color:black;
		}
		
		body,h1,h2,h3,h4,h5,h6 {font-family: "Lato", sans-serif}
		.w3-bar,h1,button {font-family: "Montserrat", sans-serif}
		.fa-anchor,.fa-coffee {font-size:200px}
		
		.badge{
			background-color:#AF2020;
			color:white;
			margin-left:20px;
		}

		.dropbtn {
			background-color: #4CAF50;
			color: white;
			padding: 13px 60px;
			font-size: 16px;
			border: none;
			cursor: pointer;
		}
				
		.dropdown {
		position: relative;
		display: inline-block;
		float:right;
	}

		.dropdown-content {
			display: none;
			position: absolute;
			background-color: #f9f9f9;
			min-width: 160px;
			box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
			z-index: 1;
		}

		.dropdown-content a {
			color: black;
			padding: 12px 16px;
			text-decoration: none;
			display: block;
		}

		.dropdown-content a:hover {background-color: #f1f1f1}

		.dropdown:hover .dropdown-content {
			display: block;
		}

		.dropdown:hover .dropbtn {
			background-color: #3e8e41;
		}		
		
		.badge{
			background-color:#AF2020;
			color:white;
			margin-left:20px;
		}

		
    </style>
 
<body>

	<div class="Header">
		<center ><img src="images/DLSL-logo.png" class="logo" width="100px" height="100px"></center>
		<center> <div class="Title">ICTC ONLINE </div> </center>
		<center> <div class="SubTitle">De La Salle Lipa </div> </center>
	</div>
	
	 <div class="dropdown">
	 
		<button class="dropbtn">
		
		<?php
		echo $_GET['name'];
		$name=$_GET['name'];
		$uname=$_GET['uname'];
		?>
		</button>
	  <div class="dropdown-content">
			<a href="login.html">Log Out</a>
		</div>
		</div>
		
	<ul>
	  	<ul>
		<?php
	 echo "<li style='padding:5px'><a href='home.php?name=$name&&uname=$uname'><img src='home.png' style='width:40px;margin-left:10px;'></a></li>";
	  ?>
	</ul>
	</ul>
	
	
	
<!-- Second Grid -->
	<div class="w3-row-padding w3-padding-64 w3-container">
		<div class="w3-content">
			<div class="w3-row-padding w3-center w3-margin-top">
				<div class="w3-third">
				
				<?php
				echo "<a href='requestform.php?name=$name&&uname=$uname'>";
				echo "<div class='w3-card w3-container  w3-button' style='min-height:300px;text-decoration:none'>";
				echo "<br><h3>Fill up Request Form</h3><br>";
				echo "<img src='fillup.png' style='width:50%'>";
				echo "</div></a>";
				?>
				</div>
				<div class="w3-third">
				<?php echo "<a href='requestor.php?name=$name&&uname=$uname''>"; ?>
					<div class="w3-card w3-container w3-button" style="min-height:300px;text-decoration:none">
					<br><h3>View Request Status <span class="badge">
					
					<?php
					include 'dbconnect.inc';

					$query="SELECT * FROM requests WHERE user='$uname' AND ssstatus = 'Queued'";
					$result=mysql_query($query);
					$num_results=mysql_num_rows($result);
					
					echo $num_results;
					
					?>
					</span></h3><br>
					<img src="status.png" style="width:50%">
					</div>
				</a>	
				</div>
				
				<div class="w3-third">
				<a href="faqs.html">
					<div class="w3-card w3-container w3-button" style="min-height:300px;text-decoration:none">
					<br><h3>FAQs</h3><br>
					<img src="faqs.png" style="width:60%">
					</div>
				</a>
				</div>
			</div>

		</div>
	</div>



	<br>
	<!-- First Grid -->
	<div class="w3-row-padding w3-light-grey w3-padding-64 w3-container">
		<div class="w3-content">
			<div class="w3-third w3-center">
			 <img src="about.png" style="width:60%">
			</div>

			<div class="w3-twothird">
			<h1>Software Support Request</h1>
			<p class="w3-text-grey">The Online Software Support Portal allows requestors to request for software installation and troubleshooting.</p>
			</div>
		</div>
	</div>
	
	




</body>


<br>
<footer>
	
	<div class="footer-info"><br>
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

</html>