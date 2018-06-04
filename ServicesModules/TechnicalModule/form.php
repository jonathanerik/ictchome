<?php
	session_start();
	require('dbconnect.inc');

	if(!isset($_SESSION['username']))
	{
		header('location:../index.php');
	}

	if(isset($_POST['logout']))
	{
		session_unset();
		session_destroy();
		$_SESSION=array();?>
		<meta http-equiv="refresh" content=".000001;url=../index.php"/><?php
	}
?>


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
	        width: 1425px;
	        height: 190px;
	        background: #151815;
	        color: white;
	        top: 90px; 
	        
        }
        
        .Title{
			font-family: 'orbitronlight', sans-serif;
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
		.navbar-nav{
            margin-left: 300px;
            font-family: 'open_sans_condensedlight', sans-serif;
            font-size: 20px;
			height: 70px;
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
			 right: 90px;
		     
		 
		 }
		 
		 .navbar-nav a{
		 	padding: .5em 0.8em;
		 	color: rgba(255,255,255,0.5);
		 	position: relative;
		 	text-decoration: none;
			left:90px;
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
       
 input[type=text], select {
    width: 30%;
    padding: 5px 10px;
    margin: 5px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
	position: absolute
	padding-left: 60px;
	left: 90px;

}

input[type=submit] {
    width: 20%;
    background-color: #4CAF50;
    color: white;
    padding: 20px 10px;
    margin: 8px 0;
    border: none;
    border-radius: 2px;
    cursor: pointer;
	position: absolute;
	top: 900px;
	right: 550px;
	
}

input[type=submit]:hover {
    background-color: #45a049;
}   
div.absolute {
    position: absolute;
    top: 400px;
    right: 500px;
    width: 1070px;
    height: 100px;
}  	    
textarea {
    width: 50%;
    height: 80px;
    padding: 5px 10px;
    box-sizing: border-box;
    border: 2px solid #ccc;
    border-radius: 4px;
    background-color: #f8f8f8;
    font-size: 18px;
    resize: none;
	position: absolute;
	top: 830px;
	right: 200px;
}
.txt {
	position: absolute;
	top: 750px;
	right: 570px;
	width: 900px;

}
.txt1 {
	position: absolute;
	top: 800px;
	right: 570px;
	width: 900px;
	height: 700px;

}
.top{
position: absolute;
	right: 450px;
	top: 300px;
	font-size: 30px;
}
  .side{
	        position: absolute;
	        left: 800px;
			top: 450px;
	      
       }

div.absolute1 {
    position: absolute;
    top: 450px;
    right: 10px;
    width: 1000px;
    height: 100px;
}  	
div.absolute2 {
    position: absolute;
    top: 450px;
    right: 520px;
    width: 1000px;
    height: 100px;
}  	
div.absolute3 {
    position: absolute;
    top: 660px;
    right: 510px;
    width: 1000px;
    height: 100px;
} 
div.absolute4 {
    position: absolute;
    top: 560px;
    right: 500px;
    width: 1000px;
    height: 100px;
} 

div.absolute5 {
    position: absolute;
    top: 610px;
    right: 490px;
    width: 1000px;
    height: 100px;
} 
div.absolute6 {
    position: absolute;
    top: 400px;
    right: 60px;
    width: 1000px;
    height: 50px;
} 
.backg{
position: absolute;
top: 550px;
left: 800px;
width: 40px;
height: 20px;
}

    </style>
    
<body>
	
	<div class="Header">
		
		<center ><img src="images/DLSL-logo.png" class="logo" width="100px" height="100px"></center>
		
		<center > <div class="Title">ICTC ONLINE </div> </center>
		<center > <div class="SubTitle">De La Salle Lipa </div> </center>
		
	</div>

   

<center>


<div class="main-body">

	 <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #1B1F1B;">
 <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
   <span class="navbar-toggler-icon"></span>
 </button>

 <div class="collapse navbar-collapse" id="navbarSupportedContent">
   <ul class="navbar-nav">
  
     
     <li class="nav-item active">
       <a class="nav-link" href="form.php">Request Form</a>
     </li>
     
     <li class="nav-item active">
       <a class="nav-link" href="stat.php">Status of requests</a>
     </li>
     
	 
	 	  <li class="nav-item active">
       <a class="nav-link" href="logout.php">Logout</a>
     </li>
	 
	 	  <li class="nav-item active">
       <a class="nav-link"><?php echo $_SESSION['username']; ?></a>
     </li>
     
   </ul>
 </div>
</nav>
</br>
<div class="top">
<center> <b> Information and Communication Technology Center </b></center></br></br>
	
</div>

 <form action="formtodatabase.php" method="post">
 
<div class="absolute">

 
	Requestor Name: <input type="text" name="fullname" placeholder="Your full name.."> 
	</div>
	<div class="absolute2">
	Email: &nbsp &nbsp &nbsp <input type="text" name="email" placeholder="Your Email.. (KCG@dlsl.edu.ph)" required/>
	</div> 
	<hr>
	
	<div class="absolute1">
	Local/Contact number: <input type="text" name="contactnumber" placeholder="09*********" required/> 
	</div>
	
	<div class="absolute4">
	Department: <input type="text" name="department" placeholder="CITE">
	</div> 
	<div class="absolute5">
	Building: 
	<select id="building" name="building" required/>
      <option value="Mabini Building">Mabini Building</option>
      <option value="CBEAM Building">CBEAM Building</option>
      <option value="JRN">JRN</option>
	  <option value="JRF">JRF</option>
	  <option value="IT Domain">IT Domain</option>
    </select></div>
	<div class="absolute3">
	Room Number: <input type="text" name="roomnumber" placeholder="MB 308" required/>
	</div>
	<div class="absolute6">
	Date of Request: &nbsp &nbsp <input type="date" name="date" placeholder="MM/DD/YY">
	</div></br>
	

  
 

  <div class="txt"> What are you having issues with?  <input type="text" name="issues" placeholder="Mouse, CPU, Monitor, etc." required/> </div>
	<div class="txt1"> Detailed Description of Request: &nbsp  <input type="text" name="requests" placeholder="Mouse pointer freezes." required/> </div>
<input type="submit" value="Submit"> 
<div class="backg">
	<img src="a.png">
 </div>
 </div>
</form>

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