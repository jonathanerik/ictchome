<!DOCTYPE html>
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
			animation: rotate 4s linear infinite;
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
		  animation: ellipsis steps(4,end) 900ms infinite;
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
			top: 470px;
			left: 250px;
			font-family: 'orbitronlight';
			font-size: 20px;
			display: none;
			
		}
		
		.redirect{
			position: absolute;
			width: 300px;
			top: 520px;
			left: 655px;
			display: none;
		}
        
    </style>
    
<body>
	
	<div class="loading-message">Logging In</div>
	
	
	
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
		
		<img src="images/failed.png" class="logged bounceIn animated">
		<div class="logged-message bounceIn animated"> 
			Wrong Username or Password: For more information visit FAQ's or Contact your administrator
		</div>
		
		<div class="redirect bounceIn animated">
		<a href="ICTC%20Home.php">
		<button type="button" class="btn btn-danger btn-lg">Go Back Home</button>
		</a>
		</div>
		
		<script>
		$(".loader-div").delay(4200).fadeOut(400);
		$(".loading-message").delay(4200).fadeOut(400);
		$(".logged").delay(4500).fadeIn(430);
		$(".logged-message").delay(4500).fadeIn(430);
		$(".redirect").delay(4500).fadeIn(430);
		</script>
	
	



</body>
</html>