<?php
	session_start();
	require('dbconnect.inc');
	ob_start();

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
	<meta name="viewport" content="width=device-width, initial-scale=1">
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
	   p.double{
	   top: 50%;
	   width: 1200px;
	   height: 500px;
	   right: 1000%;
		float:left;
		margin-left: 10px;
		font-size: 30px;
		font-family: Comic Sans MS
	   }
		
	   .front{
	        margin-top: 0px;
		}
	.about{
		 position: absolute;
	        left: 280px;
	        top: 600px;
			width: 1000px;
			height: 500px;
			}
			
			  body{
            background: #344e35 ;
            font-family: 'open_sans_condensedlight', sans-serif;
            font-size: 20px;
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

 <center><div class="collapse navbar-collapse" id="navbarSupportedContent">
   <ul class="navbar-nav">
   
    <li class="nav-item active">
       <a class="nav-link" href="ICTC Home.php">Home</a>
     </li>
   
    
     <li class="nav-item active">
       <a class="nav-link" href="DesignTemplate.html">About Us <span></span><span></span></a>
     </li>
     
     <li class="nav-item active">
       <a class="nav-link" href="form.html">Request Form</a>
     </li>
     
     <li class="nav-item active">
       <a class="nav-link" href="stat.html">Status of requests</a>
     </li>
	 
	  <li class="nav-item active">
       <a class="nav-link" href="stat.html">Notifications</a>
     </li>
	 
	  <li class="nav-item active">
       <a class="nav-link" href="index.php">Login</a>
     </li>
     
     
   </ul>
 </div><center/>
</nav>
</br>
	<!--<div id="Login_Container">-->
		<div id="Login_Container">
			<div id="Login_Content">
				<form action ="login.php" method="POST">
					<?php
					if(isset($_POST['username']) && isset($_POST['password']))
					{
						$Username=$_POST['username'];
						$Password=$_POST['password'];
						
						$query="SELECT * FROM login WHERE username='$Username' AND password='$Password'";

						$result=mysql_query($query);

						$count=mysql_num_rows($result);

						if($count!=0)
						{
							while($row=mysql_fetch_array($result))
							{
								$formid=$row['formid'];
								$username=$row['username'];
								$password=$row['password'];
								$user_type=$row['user_type'];
								
								$_SESSION['formid']=$formid;
								$_SESSION['username']=$username;
								$_SESSION['password']=$password;
								$_SESSION['user_type']=$user_type;

if($_SESSION['user_type']=='ICTC Admin')
								{
									if($Username==$username && $Password==$password)
									
										header("location: ICTC%20page.php");
									
									else
									{
										echo'<script type="text/javascript">; alert("Username or Password is incorrect!"); window.location = "index.php"; </script>';
									}
								}	
									elseif($_SESSION['user_type']=='Immediate Superior')
								{
									if($Username==$username && $Password==$password)
									
										header("location: superior.php");
									
									else
									{
										echo'<script type="text/javascript">; alert("Username or Password is incorrect!"); window.location = "index.php"; </script>';
								}
								}
								elseif($_SESSION['user_type']=='Requestor1')
								{
									if($Username==$username && $Password==$password)
									{
										header('location: form.php');

									}
									else
									{
										echo'<script type="text/javascript">; alert("Username or Password is incorrect!"); window.location = "index.php"; </script>';
									}
									}
								elseif($_SESSION['user_type']=='Requestor2')
								{
									if($Username==$username && $Password==$password)
									{
										header('location: form1.php');

									}
									else
									{
										echo'<script type="text/javascript">; alert("Username or Password is incorrect!"); window.location = "index.php"; </script>';
									}
								}
									elseif($_SESSION['user_type']=='Technician')
								{
									if($Username==$username && $Password==$password)
									{
										header('location: technician.php');

									}
									else
									{
										echo'<script type="text/javascript">; alert("Username or Password is incorrect!"); window.location = "index.php"; </script>';
									}
								}
							elseif($_SESSION['user_type']=='admin')
								{
									if($Username==$username && $Password==$password)
									{
										header('location: admin2.php');

									}
									else
									{
										echo'<script type="text/javascript">; alert("Username or Password is incorrect!"); window.location = "index.php"; </script>';
									}
								}
						}
					}
					}					
?>

</div>

</center>

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

</body>
</html>