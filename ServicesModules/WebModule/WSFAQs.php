<html>
<head>
    <link rel="stylesheet" href="Template/css/custom.css">
    <link rel="stylesheet" href="Template/css/bootstrap.min.css">
	<link href="Template/local-fonts/Orbitron/Orbitron.css" rel="stylesheet">   
	<link href="Template/local-fonts/Open-Sans/Open-Sans.css" rel="stylesheet">
</head>
    
<style>
body{
	background: #344e35 ;
    font-family: 'open_sans_condensedlight', sans-serif;
    font-size: 20px;
}
        
                
.navbar-nav{
	position: relative;
	left: 150px;
    margin-left: 450px;
    font-family: 'open_sans_condensedlight', sans-serif;
    font-size: 20px;
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

h1{
	font-family: 'open_sans_condensedlight', sans-serif;
    font-size: 50px;
}

p{
	font-family: 'open_sans_condensedlight', sans-serif;
    font-size: 30px;
    font-color: green;
}
        
li{
    padding-left: 70px;
}
        
.ServiceTitle{
	width: 1290px;
	height: 30px;
	background-color: #151815;
	color: white
}
        
.Header{
	width: 1690px;
	height: 190px;
	background: #151815;
	color: white;
	top: 90px;
}
        
.Title{
	font-family: 'orbitronlight', sans-serif;
	font-size: 200%;
	position: absolute;
	left: 720px;
	top: 108px
}
        
.SubTitle{
	position: absolute;
	font-size: 20px;
	font-family: 'open_sans_condensedlight', sans-serif;
	left: 800px;
	top: 155px
}

.logo{
	position: absolute;
	left: 800px;
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
                

    </style>
    
<body>
	<div class="Header">
		<img src="Template/images/DLSL-logo.png" class="logo" width="100px" height="100px"></center>
		
		<div class="Title">ICTC ONLINE</div></center>
		<div class="SubTitle">De La Salle Lipa</div></center>
	</div>

<nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #1B1F1B;">
  	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
	</button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
    	<ul class="navbar-nav">
    		<li class="nav-item active">
				<a class="nav-link" href="Home.php">Home</a>
			</li>
			<li class="nav-item active">
				<a class="nav-link" href="Services.php">ICTC Services</a>
			</li>
		    <li class="nav-item active">
				<a class="nav-link" href="Overview.php">ICTC Overview</a>
			</li>
    		<li class="nav-item active">
				<a class="nav-link" href="WSFAQs.php">View FAQs</a>
			</li>
      	</ul>
	</div>
</nav>

	<center>
	<div class="main-body">
		<div class="ServiceTitle">
			<center> Web Support Request
	</div>
	<br>

	<h1> FREQUENTLY ASKED QUESTIONS </h1><br><br>
	<p> 1. WHO CAN ACCESS THE WEB SUPPORT SYSTEM? <br>
		The system can only be accessed by Immediate Superior, ICTC Manager, Admins, and the Web Support<br>
		Personnel. But, the system can be used by the students: Grade School, Junior High School,<br>
		Senior High School, and College Department. Also, the faculties and staffs plus the<br>
		Student Government and other organizations of De La Salle Lipa.<br><br>
		2. HOW CAN THE USERS ACCESS THE WEB SUPPORT SYSTEM? <br>
		The users can access the web support system by using stable internet and web browsers.<br><br>
		3. IS MY REQUEST OR MESSAGE SECURE? <br>
		Each individual granted access to hard copy data holds a position of trust and must preserve<br>
		the security and confidentiality of the information to which he/she is granted access to.</p>

		<center>
			<button class="button"><a href="Home.php">BACK</a></button>
		</center>
	<br>
	</div>
		</div>
	</center>

<br>
<footer>
<div class="footer-info">
<br>
<center>
	<div class="footer-img">
		<img src="Template/images/footer-img1.png">
		<img src="Template/images/footer-img2.png">
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