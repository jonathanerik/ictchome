<?php session_start();?>
<html>

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
	        height: 1300px;
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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script>
function formvalidation(){
	var email=$('#inputEmail').val();
	var password=$('#inputPassword').val();
	var passlength=$('#inputPassword').val().length;
	
	if(email=='')
	{
		alert("Please Enter your email");
		return false;
		
	}
	if(password=='')
	{
		alert("Please Enter your password");
		return false;
		
	}
	if(passlength<=4)
	{
		alert("Please Enter minimum 5 digit password");
		return false;
		
	}
}
</script>

</head>
<body>
<div class="main-body">
<header>

    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      
      <ul class="nav navbar-nav navbar-right">
        <li><a href="login.php">Login</a></li>
      </ul>
    
</nav>
</header>
<div class="container">
<div class="col-xs-6 col-xs-push-3 well">

<!------ register form start from here ---------------------->
<form class="form-horizontal" method="post" action="login-account.php" onsubmit="return formvalidation();">
  <fieldset>
    <legend>Login</legend>
	<?php 
	if(isset($_SESSION['error']))
	{
		echo $_SESSION['error'];
		unset($_SESSION['error']);
	}
	if(isset($_SESSION['success']))
	{
		echo $_SESSION['success'];
		unset($_SESSION['success']);
	}
	?>
    <div class="form-group">
      <label for="inputEmail" class="col-lg-2 control-label">Email</label>
      <div class="col-lg-10">
        <input type="email" class="form-control" name="email" id="inputEmail" placeholder="Email">
      </div>
    </div>
    <div class="form-group">
      <label for="inputPassword" class="col-lg-2 control-label">Password</label>
      <div class="col-lg-10">
        <input type="password" class="form-control" name="password" id="inputPassword" placeholder="Password">
        
      </div>
    </div>
    
   
   
    <div class="form-group">
      <div class="col-lg-10 col-lg-offset-2">
        <button type="submit" class="btn btn-primary">Login</button>
		
      </div>
    </div>
	
  </fieldset>
</form>
</div>
<!------------------------register form end here----------------->
</div>
</div>
</body>
</html>