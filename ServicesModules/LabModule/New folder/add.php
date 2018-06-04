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
	        width: 1550x;
	        height: 190px;
	        background: #151815;
	        color: white;
	        top: 90px; 
	        
        }
        
        .Title{
			font-family: 'orbitronlight', sans-serif;
	        font-size: 200%;
	        position: absolute;
	        left: 620px;
	        top: 108px
        }
        
        .SubTitle{
	        position: absolute;
	        font-size: 20px;
	        font-family: 'open_sans_condensedlight', sans-serif;
	        left: 700px;
	        top: 155px
        }

        
        .logo{
	        position: absolute;
	        left: 700px;
	        top: 10px;
        }
        
        .main-body{
	        width: 1300px;
	        height: 1620px;
	        border-style: solid;
	        border-width: 5px;
	        border-color: #333;
	        background: #f2f2f2;
	        margin-top: 20px;
	        
        }
		
		    .listing{
	        width: 800px;
	        height: 600px;
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
 input[type=text],input[type=number], select {
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
       <a class="nav-link" href="DesignTemplate.php">Add<span></span><span></span></a>
     </li>
     
     <li class="nav-item active">
       <a class="nav-link" href="form.php">Request Form</a>
     </li>
     
     <li class="nav-item active">
       <a class="nav-link" href="notifications.php">Notifications</a>
     </li>
     
     
     
   </ul>
 </div>
</nav>
</p>
</table>
</td>
</tr>


<form action="action.php" method="post">

<tr>
<table width="400" align="center">
<td>
<br>
<font size="5" color="red" face="rockwell"> Request Form </font>
<br>
<br>




	<b>Reserver's Name:</b><br><input type="text" style = "text-align:center; font-family:Bookman Old Style; font-size:11px; font-weight:bold;" name="reserver_name" required/>


<br>

	<br><b>Section:</b><br><input type="text" style = "text-align:center; font-family:Bookman Old Style; font-size:11px; font-weight:bold;" name="section"required/>


<br><br>

<b>Room to Occupy:</b>
<select name="room_to_occupy">
<option value="">Select Any One</option>
<option value="MB110">MB110</option>
<option value="MB110">MB409</option>
</select> 
<br>
<br>


	<b>Purpose:</b><br> <input type="text" style = "text-align:center; font-family:Bookman Old Style; font-size:11px; font-weight:bold;" name="purpose" required/>


	<br>

	<br><b>Reserver's Mail:</b><br> <input type="text" style = "text-align:center; font-family:Bookman Old Style; font-size:15px; font-weight:bold;" name="reserver_mail" required/>


	<br>

	<br><b>Phone Number:</b> <br><input type="text" style = "text-align:center; font-family:Bookman Old Style; font-size:15px; font-weight:bold;" name="phone_number" required/>




	<br>
<br>
<br>
<br><b>Date of Occupy:</b> <br><input type="date" style = "text-align:center; font-family:Bookman Old Style; font-size:15px; font-weight:bold;" name="date"/>


	<br>
<br>

	&nbsp <br><br>Time In: <br><input type="Time" placeholder="Time In" name="time_in" required/>>
   &nbsp <br><br>Time Out: <br><input type="Time" placeholder="Time Out"name="time_out" required/>>
<br>
<br>


	

<input type="submit" style = "text-align:center; font-family:Bookman Old Style; font-size:15px; font-weight:bold;"/>

</form>
<input type="submit" value = "Cancel" style = "text-align:center; font-family:Bookman Old Style; font-size:15px; font-weight:bold;" onclick = "location='home.php'"/>
</center>

   <br>



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