<!DOCTYPE html>

<?php
	session_start();
	if(!isset($_SESSION['username'])){
		$_SESSION['username'] = NULL;
	}
	
	$database_name = "News and Events";
	$con = mysqli_connect("oprosys-mysqldbserver.mysql.database.azure.com","akashil@oprosys-mysqldbserver","P@ssw0rd", $database_name);
	
	
?>

<html>

<title> ICTC ONLINE </title>

<head>
    <link rel="stylesheet" href="custom.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
	<link href="local-fonts/Orbitron/Orbitron.css" rel="stylesheet">   
	<link href="local-fonts/Open-Sans/Open-Sans.css" rel="stylesheet">
	<script src="js/jquery-3.3.1.min.js"></script>
	<script src="js/bootstrap.js"></script>
	
</head>
    
    <style>
        body{
            font-family: 'open_sans_condensedlight', sans-serif;
            font-size: 20px;
           
        }
        
                
        .navbar-nav{
            margin-left: 390px;
            font-family: 'open_sans_condensedlight', sans-serif;
            font-size: 20px;
          
        
        }
        
        .loginlink{
	        margin-top: 9px;
	        margin-left: -10px;
	        cursor: pointer;
	      
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
        
          
        footer{
	        width: 100%;
	        height: 320px;
	        background-color: #21282E; 
	        border-style: solid;
	        border-width: 2px;
	        border-color: #444;
	        color: white;
	        font-family: 'open_sans_condensedlight', sans-serif;
	        position: relative;
	        top: 500px;
        }
        
        .footer-info{
	        margin-left: 50px;
	        margin-top: 0px;
	        font-size: 80%;
        }
        
        .carousel-image{
	        width: 1425px;
	        height: 390px;
        }
        
        .globe{
	        position: relative;
	        top: -10px;
        }
        
        .jumbotron{
	        
		background: #151815;  
		width: 460px;
		height: 500px;  
		color: white;
		font-family: 'open_sans_condensedlight'; 
		font-size: 18px;
		 
		}
		
		.wrench{
			width: 50px;
			height: 50px;
			position: relative;
			top: 40px;
		}
		
		.jumbotron2{
	        
		background: #333;  
		width: 500px;
		height: 500px;  
		color: white;
		font-family: 'open_sans_condensedlight'; 
		font-size: 18px;
		position: absolute;
		left: 461px;
		top: 666px;
		
		 
		}
		
		.news{
			width: 60px;
			height: 60px;
			position: relative;
			top: 35px;
		}
		
		.jumbotron3{
			
		background: #151815;  
		width: 462px;
		height: 500px;  
		color: white;
		font-family: 'open_sans_condensedlight'; 
		font-size: 18px;
		position: absolute;
		left: 962px;
		top: 666px;
   
				 
		}
		
		.lead{
		font-family: 'open_sans_condensedlight'; 
		font-size: 18px;
		}
		
		.display-4{
		font-family: 'open_sans_condensedlight'; 
		font-size: 37px;
		}
		
		.separate{
			width: 1425px;
			height: 30px;
			background-color: #002800;
		}
		
		/* LOGIN */
		
		input[type=text], input[type=password]{
	    width: 90%;
	    padding: 12px 20px;
	    margin: 8px 26px;
	    display: inline-block;
	    border: 1px solid #ccc;
	    box-sizing: border-box;
		font-size:16px;
		}

		button{
		    background-color: #1B1F1B;
		    color: white;
		    padding: 14px 20px;
		    margin: 8px 26px;
		    border: none;
		    cursor: pointer;
			font-size:20px;
			position: absolute;
			top: 2px;
			left:740px;
			border-radius: 5px;
			width: 250px;
			
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
			width: 70%;
			height: 95%;
			background: #1B1F1B;
			color: white;
			border-radius: 5px;
			cursor: pointer;
			margin-top: 20px;
			margin-left: 50px;
			
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
        
		/*END HOVER */
		
				
		.modalog {
			display:none;
		    position: absolute;
		    left: 500px;
		    top: 235px;
		    width: 900px;
		    height: 520px;
		    z-index: 99!important;
		   
		   
		}
		
		
		.modal-content {
		    background-color: #fefefe;
		    margin: 4% auto 15% auto;
		    border: 1px solid #888;
		    width: 40%; 
			padding-bottom: 90px;
			
		}
		
		.close {
		    position: absolute;
		    right: 25px;
		    top: 0;
		    color: #000;
		    font-size: 35px;
		    font-weight: bold;
		    transition: all 1s ease;
		}
		.close:hover,.close:focus {
		    color: red;
		    cursor: pointer;
		   
		}
		
		
		.animate {
		    animation: zoom 0.2s
		}
		@keyframes zoom {
		    from {transform: scale(0)} 
		    to {transform: scale(1)}
		}
		
		.arrow-up{
			 display: none;
			 width: 0;
			 height: 0;
			 position: absolute;
			 border-left: 20px solid transparent;
			 border-right: 20px solid transparent;
			 border-bottom: 20px solid #fff;
			 left: 920px;
			 top: 254px;
			 z-index: 5;
			
			
		}
		.avatar{
			position: relative;
			top: 20px;
			left: 100px;
			width: 150px;
			height: 150px;
		}
		.triangle{
			position:absolute;
			width: 80px;
			height: 25px;
			top: -20px;
			left: 135px;
		}
		
		.modal-title{
			font-size: 25px;
		}
		
		
		/* LOGIN */
		/* REGUSER */
		
		.trianglereguser{
		
			position:absolute;
			width: 80px;
			height: 25px;
			top: -20px;
			left: 525px;			
					
		}
		
		
		/*REGUSER*/
		
		
		.newssection{
			font-family: 'orbitronlight';
			font-size: 20px;
			color: white;
			letter-spacing: 5px;
			position: absolute;
			left: 580px;
		}
		
		.card{
			border-radius: 40px;
			border: 5px solid #888;
		}
		
    </style>
    
    
<body background="images/Serbg.png">
	
	<div class="Header fadeInLeft animated">
		
		<center ><img src="images/DLSL-logo.png" class="logo" width="100px" height="100px"></center>
		
		<center > <div class="Title">ICTC ONLINE </div> </center>
		<center > <div class="SubTitle">De La Salle Lipa </div> </center>
				
	</div>
	

  <nav class="navbar navbar-expand-lg navbar-dark fadeInRight animated" style="background-color: #1B1F1B;">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav">
     
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span></span><span></span></a>
      </li>
      <?php
	      if($_SESSION['username'] != NULL){
		      ?>
		      <div class='servicesaccess'>
      <li class='nav-itemlog active'>
      <a style="color: white; position: relative; top: 9px;" href="ICTC%20Services.php">
	 ICTC Services </a>
      </div>
      <?php
	      }
	      else{
		      ?>
			  <div class="servicesaccess">
       <li class="nav-item active">
        <a class="nav-link" href="LoginPage.php">ICTC Services <span></span><span></span></a>
      </li>
	  </div>
	   <?php
	      }
	      ?>
        
      </li>
      
      <li class="nav-item active">
        <a class="nav-link" href="ICTC_Overview.php">ICTC Overview</a>
      </li>
      
      <li class="nav-item active">
        <a class="nav-link" href="FAQ.php">View FAQ</a>
      </li>
      
      
      
      <?php
	      if($_SESSION['username'] != NULL){
		      ?>
	<div class='loginlink'>
      <li class='nav-itemlog active'>
      <a onclick="document.getElementById('modal-wrapper-logout').style.display='block'" style='color: white;'>
	      
	 <?php echo $_SESSION['username'];?> &#9663; </a>
      </div>
      <?php
	      }
	      else{
		      ?>
		      <div class='loginlink'>
      <li class='nav-itemlog active'>
      <a onclick="document.getElementById('modal-wrapper').style.display='block'" style='color: white'>
	  Log-In</a>
      </div>
      <?php
	      }
	      ?>
	  
	  </li>
	  
	  	    
    </ul>
  </div>
  
  </nav>



<div id="modal-wrapper" class="modalog">
  
  <form class="modal-content animate" action="ICTC_Login.php" method="post">
        
    <div class="imgcontainer bounceIn animated">
      <span onclick="document.getElementById('modal-wrapper').style.display='none'" class="close" title="Close PopUp">&times;</span>
      <img src="images/triangle.png" alt="Triangle" class="triangle">
     <img src="images/avatar.png" alt="Avatar" class="avatar">
    </div>
	<br>
    <div class="container">
      
	      
	      <center><label class="modal-title bounceIn animated"> Start using ICTC Services by logging in!  </label></center>
	      <br>
	   
	   <form>
		      <div class="log bounceIn animated">
			      
		      <input type="text" name="username" placeholder="Username" required/>
		      </div>
		      
		      <div class="log bounceIn animated">
		      <input type="password" name="password" placeholder="Password" required/>
		      </div>
			  	
			  	<div class="logintype" style="margin-left: 40px;">
			  	Log-in as: 
			  	<input type="radio" name="logintype" value="faculty" checked> Faculty 
			  	<input type="radio" name="logintype" value="admin"> Administrator<br>
			  	</div>
		       <div class="log bounceIn animated">
			 
		      <input type="submit" value="Log-In">
			       
		      </div>
	      </form>

      
    </div>
    
  
</div>


<div id="modal-wrapper-logout" class="modalog">
  
  <form class="modal-content animate" action="ICTC_Logout.php" method="post">
        
    <div class="imgcontainer bounceIn animated">
      <span onclick="document.getElementById('modal-wrapper-logout').style.display='none'" class="close" title="Close PopUp">&times;</span>
      <img src="images/triangle.png" alt="Triangle" class="triangle">
     <img src="images/avatar.png" alt="Avatar" class="avatar">
    </div>
	<br>
    <div class="container">
	    <center>
      <?php
	      echo $_SESSION['username'];
	      ?>
	   
	   
	   <form style="text-align: center;">		       
		   <div class="log bounceIn animated" style="margin-left: -40px;">
			
		   <input type="submit" value="Log-Out">
			  
		      </div>
	      </form>

      
    </div>
    
  
</div>



	
<script>
	
var modal = document.getElementById('modal-wrapper');
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none" ;
       }
   }
   
var modal = document.getElementById('modal-wrapper-logout');
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none" ;
       }
   }

	
	
</script>





<div class="newssection fadeIn animated"> News and Events </div>
<br>
<br>
<div class="newscontainer" style="margin-left: 335px;">
<?php
            $query = "SELECT * FROM News ORDER BY News_id desc ";
            $result = mysqli_query($con,$query);
            if(mysqli_num_rows($result) > 0) {

                while ($row = mysqli_fetch_array($result)) {
	                

                    ?>
                    
                    
                    <div class="card mb-3 zoomIn animated" style="width: 70%; height: auto;">
 
				  <div class="card-body">
				    <h5 class="card-title" style="font-family: 'orbitronlight'; text-align: center; letter-spacing: 5px;"><?php echo $row["News_title"]; ?></h5>
				    <hr>
				    <p class="card-text" style="letter-spacing: 2px;"><?php echo $row["News_content"]; ?></p>
				  </div>
				
				
					<br>		   
                       				
                    
                    </div>
                    <?php
                }
            }
        ?>

</div>

<footer>
	
	<div class="footer-info">
	<br>
	<center>
	<div class="footer-img">
	<img src="images/footer-img1.png">
	<img src="images/footer-img2.png">
	</div>

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