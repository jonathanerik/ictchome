<!DOCTYPE html>
<html>
	
<title> ICTC Services: Log-In </title>
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
            font-family: 'open_sans_condensedlight', sans-serif;
            font-size: 20px;

        }
        
                
        .navbar-nav{
            margin-left: 540px;
            font-family: 'open_sans_condensedlight', sans-serif;
            font-size: 20px;
          
        
        }
        
                
        .navbar-nav *{
	        box-sizing: border-box; 
	        transition: all 0.35s ease;
	        
	     }
	     
	     .navbar-nav li {
		     display: inline-block;
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
            padding-left: 60px;
        }
        
        .ServiceTitle{
	        width: 1290px;
	        height: 30px;
	        background-color: #151815;
			color: white
        }
        
        .Header{
	        width: 1425px;
	        height: 190px;
	        background: #151815;
	        color: white;
	        top: 90px; 
	        
        }
        
        .Title{
			font-family: 'orbitronlight';
	        font-size: 200%;
	        position: absolute;
	        left: 590px;
	        top: 108px
        }
        
        .SubTitle{
	        position: absolute;
	        font-size: 20px;
	        font-family: 'open_sans_condensedlight', sans-serif;
	        left: 670px;
	        top: 155px
        }

        
        .logo{
	        position: absolute;
	        left: 668px;
	        top: 10px;
        }
      
       .primary{
	        background: white;
	        width: 600px;
	        height: 700px;
	        border-radius: 50px;
	        display: block;
	        
	       
        }
       
       
        .secondary{
	        background: white;
	        position: absolute;
	        top: 305px;
	        left: 413px;
	        width: 600px;
	        height: 700px;
	        border-radius: 50px;
	        display: block;
        }
        
        
        
        input[type=text], input[type=password]{
	    width: 90%;
	    padding: 12px 20px;
	    margin: 8px 26px;
	    display: inline-block;
	    border: 1px solid #ccc;
	    box-sizing: border-box;
		font-size:16px;
		}

		
		
		input[type="text"],
		input[type="password"]{
			width: 250px;
			height: 45px;
			margin-top: 10px;
			margin-bottom: 10px; 
			margin-left: 40px;
		}

		
		
		input[type="submit"]{
			width: 50%;
			height: 95%;
			background: #1B1F1B;
			color: white;
			border-radius: 5px;
			cursor: pointer;
			margin-top: 20px;
			margin-left: 15px;
			
		}
		
		
		
		input[type="submit"]:hover{
			background: #6ab04c;
			transition: 0.4s;

		}

		 
		 button:before,
		 button:after{
			 height: 14px;
			 width: 14px;
			 position: absolute;
			 content: '';
			 transition: all 0.35s ease;
			 opacity: 0;
			 
		}
		
		button:before{
			right: 0;
			top: 0;
			border-right: 3px solid #087830;
			border-top: 3px solid white;
			transform: translate(-100%,50%);
			}
			
		button:after{
			left: 0;
			bottom: 0;
			border-left: 3px solid #087830;
			border-bottom: 3px solid white;
			transform: translate(100%,-50%)
		}
	    button:hover:before,    
	    button:hover:after{
		    transform: translate(0%,0%);
		    opacity: 1;
		    }
		
		.main-message{
			width: 600px;
			height: 250px;
			background: #333;
			color: white;
			position: relative;
			top: -30px;
		}
		.text{
			margin-left: 20px;
			margin-right: 20px;
			font-size: 20px;
		}
		
		.groupng{
			width: 300px;
			height: 300px;
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
        
        .PageTitle{
	        width: 100%;
	        height: 30px;
	        background-color: #151815;
			color: white;
			font-family: 'orbitronlight';
        }

		

    </style>
 
    
	<body background="images/Serbg.jpg">
		
		<div class="Header">
		
		<center ><img src="images/DLSL-logo.png" class="logo" width="100px" height="100px"></center>
		
		<center > <div class="Title">ICTC ONLINE </div> </center>
		<center > <div class="SubTitle">De La Salle Lipa </div> </center>
				
	</div>
	

  <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #1B1F1B;">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav">
     
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span></span><span></span></a>
      </li>
        
      </li>
      
      <li class="nav-item active">
        <a class="nav-link" href="ICTC%20Overview.php">ICTC Overview</a>
      </li>
      
      <li class="nav-item active">
        <a class="nav-link" href="FAQ.php">View FAQ</a>
      </li>
  
    </ul>
  </div>
  
  </nav>
 
  <div class="PageTitle">
	
	<center> ICTC Organizational Chart </center>
	
</div>
  
 <center> <img class="orgchart fadeIn animated" src="images/Org-Chart.png" style="margin-left: 55px; margin-top: 30px;"></center>
  
  
  
  
  
 <footer style="position: relative; top: 60px;">
	
	<div class="footer-info">
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