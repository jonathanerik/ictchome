<!DOCTYPE html>
<?php
	session_start();
	if(!isset($_SESSION['username'])){
		$_SESSION['username'] = NULL;
	}
	
	
?>
<html>
<title> You're Being Redirected </title>
<head>
    <link rel="stylesheet" href="custom.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
	<link href="local-fonts/Orbitron/Orbitron.css" rel="stylesheet">   
	<link href="local-fonts/Open-Sans/Open-Sans.css" rel="stylesheet">
	<script src="js/jquery-3.3.1.min.js"></script>
	<script src="js/bootstrap.js"></script>
	<link rel="stylesheet" href="css/animate.css">
	</head>
    
    <style>
        body{
            background: #1B1F1B;
            font-family: 'open_sans_condensedlight';
            font-size: 20px;

        }
        
        .loader-container {
	        width: 400px;
	        height: 400px;
	        position: relative;
	        top: 220px;
	        left: 700px;
	        transform: translate(-50%,-50%);
	       
	        
        }
        
        .loader-div {
	        width: calc(100% - 16px);
	        height: calc(100% - 16px);
			border: 8px solid #1B1F1B;
			border-top: 8px solid #27ae60;
			border-radius: 50%;
			animation: rotate 3s linear infinite;
			overflow: hidden;
			
        }
        
        @keyframes rotate {
	        100% {transform: rotate(360deg);}
	        
	        
        }
        
        .loading-message{
	        color: white;
	        font-family: 'orbitronlight';
	        font-size: 40px;
	        position: relative;
	        top: 490px;
	        left: 590px;
	        width: 300px;
        }
        
        
       
		.loading-message:after {
		  overflow: hidden;
		  display: inline-block;
		  vertical-align: bottom;
		  -webkit-animation: ellipsis steps(4,end) 1500ms infinite;      
		  animation: ellipsis steps(4,end) 1500ms infinite;
		  content: "\2026"; /* ascii code for the ellipsis character */
		  width: 0px;
		}
		
		@keyframes ellipsis {
		  to {
		    width: 1.25em;    
		  }
		}
		
		@-webkit-keyframes ellipsis {
		  to {
		    width: 1.25em;    
		  }
		}
		
		.logged{
			position: absolute;
			width: 350px;
			height: 350px;
			left: 550px;
			top: 90px;
			display: none;
		}
		
		.logged-message{
			position: absolute;
			color: white;
			top: 440px;
			left: 560px;
			font-family: 'orbitronlight';
			font-size: 30px;
			display: none;
			
		}
		
		.redirect{
			position: absolute;
			width: 300px;
			top: 490px;
			left: 645px;
			display: none;
		}
        
    </style>
    
<body>
	
	<div class="loading-message bounceIn animated">
	Logging In 
	</div>
	
	
	
	<div class="loader-container">
		
		<div class="loader-div">
		
		<div class="loader-div">
		
		
		<div class="loader-div">
		
		<div class="loader-div">
			
		<div class="loader-div">
		
		

		</div>


		</div>
		
		
		</div>
		
		</div>
		</div>
		
		</div>
		
	
		
		</div>
		
		<img src="images/logged.png" class="logged bounceIn animated">
		<div class="logged-message bounceIn animated"> 
			Logged In as Faculty
					</div>
		
		<div class="redirect bounceIn animated">
		<a href="ICTC%20Services.php">
			<br>
		<button type="button" class="btn btn-success btn-lg">Go to ICTC Services</button>
		</a>
		</div>
		
		<script>
		$(".loader-div").delay(1500).fadeOut(90);
		$(".loading-message").delay(1500).fadeOut(90);
		$(".logged").delay(1500).fadeIn(90);
		$(".logged-message").delay(1500).fadeIn(90);
		$(".redirect").delay(1500).fadeIn(90);
		</script>
	
	



</body>
</html>