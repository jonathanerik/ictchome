<!DOCTYPE html>
<?php
session_start();
	if(!isset($_SESSION['username'])){
		$_SESSION['username'] = NULL;
	}
	?>
<html>
	<title> Add News and Events </title>
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
	        position: relative;
	        top: 500px;
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
		left: 1030px;
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
	
	.primary{
	        background: white;
	        width: 600px;
	        height: 700px;
	        border-radius: 50px;
	        display: block;
	        position: relative;
	        left: 420px;
	        top: 50px;
	        
	        
	       
        }
        
        
        .buyer-information {
	  background-color: white;
	  border: 1px solid lightgrey;
	  border-radius: 3px;
	  width: 800px;
	  text-align: center;
	  height: auto;
	  position: relative;
	  top: 250px;
	  left: 330px;
	  border: 10px solid #333;
	  
	
	}
	
	input[type="submit"]{
			width: 50%;
			height: 50%;
			background: #27ae60;
			color: white;
			border-radius: 5px;
			cursor: pointer;
			font-family: 'orbitronlight';
			
			
			
		}
		
		
		input[type="submit"]:hover{
			background: #1B1F1B;
			transition: 0.4s;

		}
		
input[type="text"]{
	text-align: center;
	}
	
	
input[type=text] {
  width: 70%;
  margin-bottom: 20px;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 3px;
}

label {
  margin-bottom: 10px;
  display: block;
}
row {
  display: -ms-flexbox; /* IE10 */
  display: flex;
  -ms-flex-wrap: wrap; /* IE10 */
  flex-wrap: wrap;
 
}

.col-25 {
  -ms-flex: 25%; /* IE10 */
  flex: 25%;
}

.col-50 {
  -ms-flex: 50%; /* IE10 */
  flex: 50%;
}

.col-75 {
  -ms-flex: 75%; /* IE10 */
  flex: 75%;
}

.message{
	font-family: 'orbitronlight';
	font-size: 19px;
	color: #222;
	letter-spacing: 5px;
	background: transparent;
	height: 40px;
	position: absolute;
	left: 230px;
	top: 70px;
}

textarea {
    width: 80%;
    height: 150px;
    padding: 12px 20px;
    box-sizing: border-box;
    border: 2px solid #ccc;
    border-radius: 4px;
    background-color: #f8f8f8;
    font-size: 16px;
    resize: none;
}



    </style>
    
<body background="images/Serbg.jpg">
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
      <a href="index.php"><img src="images/home.png" style="width: 50px; height: 50px; position: absolute; left: 980px; top: 138px;"></a>
       <img src="images/user.png" style="width: 50px; height: 50px; position: absolute; left: 1160px; top: 138px;">
       <a href="ICTC_Logout.php"><img src="images/logoutbut.png" style="width: 30px; height: 35px; position: absolute; left: 1325px; top: 150px;"></a>
      
     <a href="AdminDashboard.php"> <div class="homebutton"> Back to Dashboard | </div> </a>
      <a href="ICTC_Logout.php"><div class="logoutbutton"> Log-Out </div></a>
      <?php
	      }
		      ?>
		<!- =======-->
		      		<div class="Username"> </div>
		

	
	
	
	<div class="buyer-information bounce animated">
      <form action="connect.php" method="post" enctype="multipart/form-data">

        <div class="row">
          <div class="col-50">
	          <div class="buyer-banner">
	          <img class="buyer-icon" src="images/newsicon.jpg" width="60px"; height="60px;" style="position: absolute; left: 360px; top: 10px;">
	          <div class="message"> Add News and Events</div>
	          <br>
	          <br>
	          </div>
	          <br>
	          <hr>
	          
	         
	         
            <label for="newstitle"><i class="fa fa-user"></i><b> News Title</b></label>
            <input type="text" id="newstitle"  name="title" placeholder= "Enter Title of Article"<required/>
            
             
  
  	            
            <label for="author"><i class="fa fa-envelope"></i> <b>Author</b></label>
            <input type="text" id="author" name="author" placeholder="Enter Author"required/>
            
            <label for="content"><i class="content"></i> <b>News Content</b></label>
            <textarea  id="content" name="content" placeholder="Enter Content of News" required/></textarea>
            <br>
            
              
               <hr> 
			<input type="submit" name="insert" value="Add News">
			<br>
			<br>
		
	</div>


            
                         
				
				
			</form>
            </div>

          </div> 

	  


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