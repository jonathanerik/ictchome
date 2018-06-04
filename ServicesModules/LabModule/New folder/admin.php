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
	        height: 1500px;
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
            margin-left: 390px;
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
	   p.double {border-style: double;
	   top: 100%;
	   width: 400px;
	   height: 500px;
	   right: 1000%;
		float:left;
		margin-left: 20px;
	   }
	   p.d {border-style: double;
	   top: 100%;
	   width: 400px;
	   height: 500px;
	   right: 1000%;
		float:left;
		margin-left: 20px;
	   }
	     p.s {border-style: double;
	   top: 100%;
	   width: 400px;
	   height: 500px;
	   right: 1000%;
		float:left;
		margin-left: 20px;
		
	   }
 input[type=text], select {
    width: 100%;
    padding: 12px 20px;
    margin: 5px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}

input[type=submit] {
    width: 20%;
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 2px;
    cursor: pointer;
}

input[type=submit]:hover {
    background-color: #45a049;
}
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
	
	<div class="ServiceTitle">
	
	<center> Lab Reservation
	
</div>
	 <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #1B1F1B;">
 <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
   <span class="navbar-toggler-icon"></span>
 </button>

 <div class="collapse navbar-collapse" id="navbarSupportedContent">
   <ul class="navbar-nav">
    
     <li class="nav-item active">
       <a class="nav-link" href="add.php">Add<span></span><span></span></a>
     </li>
     
     <li class="nav-item active">
       <a class="nav-link" href="update.php">Update</a>
     </li>
     
     <li class="nav-item active">
       <a class="nav-link" href="delete.php">Delete</a>
     </li>
     
  <form action="search.php" method="post">
<input  type="text" name="name" style = "text-align:center; font-family:Bookman Old Style; font-size:11px; font-weight:bold;"/> 
<input  type="submit" name="submit" value="Search" style = "text-align:left; font-family:Bookman Old Style; font-size:11px; font-weight:bold;"/></form>
     
   </ul>
 </div>
</nav>
</br>
<?php
$con = mysql_connect("localhost","root","");


if (!$con)

{
	
	die('Could not connect: ' . mysql_error());

}
	
	

mysql_select_db("drecord", $con);


$result = mysql_query("SELECT * FROM tbldentist");



echo "<table border = '1' cellpadding = '15' bordercolor = 'black' style = 'background-color: #f8f8f8'>";

while($row = mysql_fetch_array($result))
{
	
echo "<table border = '1' cellpadding = '15' bordercolor = 'black' style = 'background-color: #f8f8f8'>";
echo "<tr>";
echo "<td colspan=2>";
	
	echo "<font face = 'Rockwell' size = '5' color='blue'><center>" . $row['cname'] . "</center></font>";

	echo "<font face = 'Rockwell' size = '2'><center>" . $row['caddress'] . "<hr></center></font>";

echo "<font face = 'Rockwell' size = '2'><center>" . $row['mdetails'] . "<hr></center></font>";
echo "</td>";
echo "<tr>";
echo "<td>";

	echo "<font face = 'Rockwell' size = '3'><center>" . $row['fname'] . "</center></font>";
	echo "<font face = 'Rockwell' size = '3'><center>" . $row['lname'] . "</center></font>";
	echo "<font face = 'Rockwell' size = '3'><center>" . $row['pnumber'] . "</center></font>";
echo "</td>";
echo "<td>";	
	echo "<font face = 'Rockwell' size = '3'><center>" . $row['email'] . "</center></font>";

echo "</td>";

echo "</tr>";
	echo "</tr>";
echo "<br>";
echo "<br>";


}

echo "</table>";
echo "<br>";
echo "<br>";

mysql_close($con);

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