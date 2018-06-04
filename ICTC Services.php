<!DOCTYPE html>
<?php
session_start();
	if(!isset($_SESSION['username'])){
		$_SESSION['username'] = NULL;
	}
	?>
<html>
	<title> ICTC Services </title>
<head>
    <link rel="stylesheet" href="custom.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
	<link href="local-fonts/Orbitron/Orbitron.css" rel="stylesheet">   
	<link href="local-fonts/Open-Sans/Open-Sans.css" rel="stylesheet">
	<script src="js/jquery-3.3.1.min.js"></script>
	<script src="js/dashboard.js"></script>
	<script src="js/bootstrap.js"></script>
	<link rel="stylesheet" href="css/animate.css">
	<link rel="stylesheet" href="css/dashboard.css">
	
	</head>
    
    <style>
        body{
            
            font-family: 'open_sans_condensedlight';
            font-size: 20px;

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
	        font-family: 'open_sans_condensedlight';
	        left: 670px;
	        top: 155px
        }
        
        .Titlesub{
			font-family: 'orbitronlight';
	        font-size: 200%;
	        position: relative;
	        left: 10px;
	        top: 30px;
	        z-index: 200 !important;
	        color: white;
			  
			  }
        
        .SubTitlesub{
	        position: relative;
	        font-size: 20px;
	        font-family: 'open_sans_condensedlight';
	        left: 20px;
	        top: 25px; 
	        z-index: 200 !important;
	        color: white;
        }

        
        .servicetitlepage{
	        position: absolute;
	        left: 560px;
        }

        
        .logo{
	        position: absolute;
	        left: 668px;
	        top: 10px;
        }
        
        .main-body{
	        width: 1300px;
	        height: 710px;
	        border-style: solid;
	        border-width: 5px;
	        border-color: #333;
	        background: #f2f2f2;
	        margin-top: 20px;
	        position: relative;
	        left: 65px;
	        
	        
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
        
        .PageTitle{
			color: white;
			font-family: 'orbitronlight';
			position: relative;
			width: 1290px;
	        height: 30px;
	        background-color: #151815;
			color: white;
			position: relative;
			top: 0px;
			left: 0px;
			
		}
		.display-4{
		font-family: 'open_sans_condensedlight'; 
		font-size: 21px;
		}
               
        .service-image{
	        position: absolute;
	        top: 20px;
	        left: 79px;
        }  
        
        .service-image{
	        position: absolute;
	        top: 20px;
	        left: 79px;
        } 
        .service-image2{
	        position: relative;
	        top: 5px;
	        left: 5px;
        } 
        .service-image3{
	        position: relative;
	        top: 0px;
	        
        }
        .service-image4{
	        position: relative;
	        top: 0px;
	        
        }
        .service-image5{
	        position: relative;
	        top: 10px;
	        
        }
		
		.service-image6{
	        position: relative;
	        top: 10px;
	        
        }
        .service-image7{
	        position: relative;
	        top: 10px;
	        
        }
		.service-image8{
	        position: relative;
	        top: 10px;
	        left: 7px;
	        
        }
		
		.jumbotron{
	        
		background: #151815;  
		width: 210px;
		height: 150px;  
		color: white;
		font-family: 'open_sans_condensedlight'; 
		font-size: 10px;
		position: absolute;
		top: 60px;
		left: 60px;
		border-radius: 30px;
		cursor: pointer;
		transition: all 0.3s ease 0s;
		
				 
		}
		
		.jumbotron:hover{
			background: #444;
			border-radius: -100%;
			
			
		}
		
		.jumbotron2{
	        
		background: #151815;  
		width: 210px;
		height: 150px;  
		color: white;
		font-family: 'open_sans_condensedlight'; 
		font-size: 10px;
		position: absolute;
		top: 275px;
		left: 450px;
		border-radius: 30px;
		cursor: pointer;
		transition: all 0.3s ease 0s;
		
				 
		}
		
		.jumbotron2:hover{
			background: #444;
			
		}
		
		.jumbotron3{
	        
		background: #151815;  
		width: 210px;
		height: 150px;  
		color: white;
		font-family: 'open_sans_condensedlight'; 
		font-size: 10px;
		position: absolute;
		top: 275px;
		left: 770px;
		border-radius: 30px;
		cursor: pointer;
		transition: all 0.3s ease 0s;
		
				 
		}
		
		.jumbotron3:hover{
			background: #444;
			
		}
		
		.jumbotron4{
	        
		background: #151815;  
		width: 210px;
		height: 150px;  
		color: white;
		font-family: 'open_sans_condensedlight'; 
		font-size: 10px;
		position: absolute;
		top: 275px;
		left: 1090px;
		border-radius: 30px;
		cursor: pointer;
		transition: all 0.3s ease 0s;
		
				 
		}
		
		.jumbotron4:hover{
			background: #444;
			
		}
		
		.jumbotron5{
	        
		background: #151815;  
		width: 210px;
		height: 150px;  
		color: white;
		font-family: 'open_sans_condensedlight'; 
		font-size: 10px;
		position: absolute;
		top: 490px;
		left: 130px;
		border-radius: 30px;
		cursor: pointer;
		transition: all 0.3s ease 0s;
		
				 
		}
		
		.jumbotron5:hover{
			background: #444;
			
		}
		
		.jumbotron6{
	        
		background: #151815;  
		width: 210px;
		height: 150px;  
		color: white;
		font-family: 'open_sans_condensedlight'; 
		font-size: 10px;
		position: absolute;
		top: 490px;
		left: 450px;
		border-radius: 30px;
		cursor: pointer;
		transition: all 0.3s ease 0s;
		
				 
		}
		
		.jumbotron6:hover{
			background: #444;
			
		}
		
		.jumbotron7{
	        
		background: #151815;  
		width: 210px;
		height: 150px;  
		color: white;
		font-family: 'open_sans_condensedlight'; 
		font-size: 10px;
		position: absolute;
		top: 490px;
		left: 770px;
		border-radius: 30px;
		cursor: pointer;
		transition: all 0.3s ease 0s;
		
				 
		}
		
		.jumbotron7:hover{
			background: #444;
			
		}
		
		.jumbotron8{
	        
		background: #151815;  
		width: 210px;
		height: 150px;  
		color: white;
		font-family: 'open_sans_condensedlight'; 
		font-size: 10px;
		position: absolute;
		top: 490px;
		left: 1090px;
		border-radius: 30px;
		cursor: pointer;
		transition: all 0.3s ease 0s;
		
				 
		}
		
		.jumbotron8:hover{
			background: #444;
			
		}
		
		.jumbotron9{
	        
		background: #151815;  
		width: 210px;
		height: 150px;  
		color: white;
		font-family: 'open_sans_condensedlight'; 
		font-size: 10px;
		position: absolute;
		top: 720px;
		left: 610px;
		border-radius: 30px;
		cursor: pointer;
		transition: all 0.3s ease 0s;
		
				 
		}
		
		.jumbotron9:hover{
			background: #444;
			}
			
		.sidebar{
			position: absolute;
			top: 0px;
			float: left;
			margin-left: -350px;
			width: 350px;
			height: 1270px;
			background: #151815;
			overflow: hidden;
			transition: 0.5s all;
			z-index: 99 !important;
			
		}
		
		.side{
			margin-left: 0;
			box-shadow: 0px 0px 1px 5000px rgba(0,0,0,0.8);
		}
		
		.sidebar ul{
			margin: 0;
			padding: 0;
			
		}
			
		.sidebar ul li{
			list-style: none;
		}
		
		.sidebar ul li a{
			text-decoration: none;
			color: white;
			height: 80px;
			width: 100%;
			line-height: 80px;
			text-align: center;
			display: block;
			transition: all 0.6s
		}
		
		.sidebar ul li a:hover{
			background: #636e72;
		}
		
		.btn{
			content: 'close.png';
			padding: 0 10px;
			position: relative;
			top: 10px;
			left: 10px;
			z-index: 100 !important;
			transition: 0.5s;
		}
		.btn-after
		{
			
			position: relative;
			top: 0px;
			left: 330px;
			z-index: 100 !important;
			transition: 0.5s;
			
			}
			
		.sub{
			background: #2d3436;
			height: 150px;
		}
		
		.loginlink{
			position: absolute;
			left: 1215px;
			top: 155px;
			color: white;
			z-index: 99 !important;
			
	}
	
	.homebutton{
		width: 150px; 
		height: 50px;
		position: absolute;
		left: 1100px;
		top: 155px;
		
		
	}
	.logoutbutton{
		width: 60px; 
		height: 50px;
		position: absolute;
		left: 1360px;
		top: 155px;
		
	}
	
	a{
		color: white;
	}
	
	a:hover{
		color: white;
	}

    </style>
    
<body background="images/Serbg.png">
	<div id="overlay-back"></div>
	<div id="overlay"><span> 
	
	<div class="Header">
		
		<center ><img src="images/DLSL-logo.png" class="logo" width="100px" height="100px"></center>
		
		<center > <div class="Title">ICTC ONLINE </div> </center>
		<center > <div class="SubTitle">De La Salle Lipa </div> </center>
		<!- Username -->
		<?php
	      if($_SESSION['username'] != NULL){
		      ?>
		      <div class='loginlink'>
      <span class='nav-itemlog active'>
      <a onclick="document.getElementById('modal-wrapper-logout').style.display='block'" style='color: white;'>
	  	 	<?php
	 	echo $_SESSION['username']; echo ' |'
	 	?>
	 	</a>
	
      </div>
      <a href="index.php"><img src="images/home.png" style="width: 50px; height: 50px; position: absolute; left: 1050px; top: 138px;"></a>
       <img src="images/user.png" style="width: 50px; height: 50px; position: absolute; left: 1160px; top: 138px;">
       <a href="ICTC_Logout.php"><img src="images/logoutbut.png" style="width: 30px; height: 35px; position: absolute; left: 1325px; top: 150px;"></a>
      
     <a href="index.php"> <div class="homebutton"> Home | </div> </a>
      <a href="ICTC_Logout.php"><div class="logoutbutton"> Log-Out </div></a>
      <?php
	      }
		      ?>
		<!- =======-->
		      		<div class="Username"> </div>
		<a class="btn"> <img src="images/navbutton.png" width="50px; height=50px;"></a>
		
		<script type="text/javascript">
			$('.btn').on("click",function(){
				$('.sidebar').toggleClass('side');
				$('.btn').toggleClass('btn-after');
			});
		</script>
				
	</div>


<div class="sidebar">
	
		<div class="sub">
		<center> <div class="Titlesub">ICTC ONLINE </div> </center>
		<center> <div class="SubTitlesub">De La Salle Lipa </div> </center>
		</div>
	
	<ul>
<li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span></span><span></span></a>
      </li>
      
      <li class="nav-item active">
        <a class="nav-link" href="ICTC%20Services.php">ICTC Services </a>
      </li>
      
      <li class="nav-item active">
        <a class="nav-link" href="ICTC%20Overview.php">ICTC Overview</a>
      </li>
      
      <li class="nav-item active">
        <a class="nav-link" href="FAQ.php">View FAQ</a>
      </li>
      </ul>
</div>


<div class="main-body">
	
	<div class="PageTitle">
	<div class="servicetitlepage"><center>ICTC SERVICES </center></div>
	
</div>

<! PURCHASE REQUEST >

	<a href="ServicesModule/PurchaseRequest/login.html">
	<div class="jumbotron rubberBand animated">
	<center>
		
	<br>
	<img class="service-image" src="images/service1.png" width="50px" height="50px">

	<h1 class="display-4">Purchase Request</h1>

	
 </center>
  </p>
</div>
	
</div>
</div>
</a>

<! COMPUTER LAB RESERVATION>

<a href="ServicesModule/LabReservation/login.html">
	<div class="jumbotron2 rubberBand animated">
	<center>
		
	<br>
	<img class="service-image2" src="images/service2.png" width="60px" height="40px">
	<br>
	<br>
	<h1 class="display-4">Computer Laboratory Reservation</h1>

	
 </center>
  </p>
</div>
	
</div>
</div>
</a>

<! BORROWING AND RETURNING OF EQUIPMENT>

<a href="ServicesModule/Borrowing/Borrowing.html">
	<div class="jumbotron3 rubberBand animated">
	<center>
		
	<img class="service-image3" src="images/service3.png" width="60px" height="70px">

	<h1 class="display-4">Borrowing and Returning of Equipment</h1>

	
 </center>
  </p>
</div>
	
</div>
</div>
</a>

<! Technical Support>

<a href="ServicesModule/TechSupp/login.html">
	<div class="jumbotron4 rubberBand animated">
	<center>
		
	<img class="service-image4" src="images/service4.png" width="80px" height="80px">

	<h1 class="display-4">Technical Support Request</h1>

	
 </center>
  </p>
</div>
	
</div>
</div>
</a>

<! Inventory of Tools>

<a href="ServicesModule/Inventory/login.html">
	<div class="jumbotron5 rubberBand animated">
	<center>
		
	<img class="service-image5" src="images/service5.png" width="70px" height="70px">
	<br>
	<br>
	<h1 class="display-4">Inventory of Tools and Equipment</h1>

	
 </center>
  </p>
</div>
	
</div>
</div>
</a>

<! Network Support>

<a href="ServicesModule/NetSupport/login.html">
	<div class="jumbotron6 rubberBand animated">
	<center>
		
	<img class="service-image6" src="images/service6.png" width="70px" height="70px">
	<br>
	<br>
	<h1 class="display-4">Network Support Request</h1>

	
 </center>
  </p>
</div>
	
</div>
</div>
</a>

<! WebSupport Request>

<a href="ServicesModule/WebSupp/login.html":>
	<div class="jumbotron7 rubberBand animated">
	<center>
		
	<img class="service-image7" src="images/service7.png" width="70px" height="70px">
	<br>
	<br>
	<h1 class="display-4">Web Support Request</h1>

	
 </center>
  </p>
</div>
	
</div>
</div>
</a>

<! Software Support>

<a href="ServicesModule/SoftwareSupport/login.html">
	<div class="jumbotron8 rubberBand animated">
	<center>
		
	<img class="service-image8" src="images/service8.png" width="70px" height="70px">
	<br>
	<br>
	<h1 class="display-4">Software Support</h1>

	
 </center>
  </p>
</div>
	
</div>
</div>
</a>






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
</span></div>
</body>
</html>