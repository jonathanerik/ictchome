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
			left:190px;
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
			.row{
			 position: absolute;
	        left: 460px;
	        top: 350px;
			width: 1600px;
			height: 300px;
			
			}
			.arr{
			 position: absolute;
	        left: 500px;
	        top: 10px;
			width:20px;
			height:30px;
			
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
       <a class="nav-link" href="index.php">Login</a>
     </li>
	 
	    <li class="nav-item active">
       <a class="nav-link" href="faqs.html">FAQs <span></span><span></span></a>
     </li>
	 <li class="nav-item active">
       <a class="nav-link"><?php echo $_SESSION['username']; ?></a>
     </li>
     
     
   </ul>
 </div><center/>
</nav>
</br>

<div class="container">
<h3>Lists of Requests</h3>
<?php if(isset($_SESSION['success'])){
	echo $_SESSION['success'];
	unset($_SESSION['success']);
}
	?>
<div class="table1">
<table class="table table-striped table-hover ">
  <thead>
    <tr>
	<th>ID</th>
      <th>Requestor Name</th>
			 <th>Email</th>
	   <th>Contact Number</th>
			<th>Date</th>
			 
    </tr>	
  </thead>
  <tbody>
  <?php 
  $i=1;
  $query="Select * from `forms` ";
	$res=mysql_query( $query);
	$count=mysql_num_rows($res);
	if($count>0)
	{
	while($row=mysql_fetch_array($res))
	{
  
  ?>
    <tr>
	  <td><a href="ad.php"><?php echo $i; ?></td></a>
       <td><?php echo $row['fullname']; ?></td>
      <td><?php echo $row['email'];?></td>
	  <td><?php echo $row['contactnumber'];?></td>
			<td><?php echo $row['date'];?></td>
			
			</form></td>
    </tr>
	<?php $i++;}}else{
		 echo "No record Found!";
		
	} ?>

	
 
  </div>



</center>

</div>

<br>

</body>
</html>