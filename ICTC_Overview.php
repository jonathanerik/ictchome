<!DOCTYPE html>
<html lang="en">
<head>
      
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="custom.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/hover-min.css">
     <link rel="stylesheet" href="css/hover.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
	<link href="local-fonts/Orbitron/Orbitron.css" rel="stylesheet">   
	<link href="local-fonts/Open-Sans/Open-Sans.css" rel="stylesheet">
	<script src="js/jquery-3.3.1.min.js"></script>
	<script src="js/bootstrap.js"></script>
	<title> ICTC Overview </title>
</head>

<style>
	
	/* NAV*/

header {
      width: 100%;
      height: 10vh;
     background: black;
      background-size: cover;
}


.logo {
      line-height: 60px;
      position: fixed;
      float: left;
      margin: 16px 46px;
      color: #fff;
      font-weight: bold;
      font-size: 20px;
      letter-spacing: 2px;
}

nav {
      position: fixed;
      width: 100%;
      z-index: 100 !important;
}

nav ul {
      line-height: 60px;
      list-style: none;
      background: rgba(0, 0, 0, 0);
      overflow: hidden;
      color: #fff;
      padding: 0;
      text-align: right;
      margin: 0;

      transition: 1s;
}

nav.black ul {
      background: #000;
}

nav ul li {
      display: inline-block;
      padding: 16px 40px;;
}

nav ul li a {
      text-decoration: none;
      color: #fff;
      font-size: 16px;
}

.menu-icon {
      line-height: 60px;
      width: 100%;
      background: #000;
      text-align: right;
      box-sizing: border-box;
      padding: 15px 24px;
      cursor: pointer;
      color: #fff;
      display: none;
}

@media(max-width: 786px) {

      .logo {
            position: fixed;
            top: 0;
            margin-top: 16px;
      }

      nav ul {
            max-height: 0px;
            background: #000;
      }

      nav.black ul {
            background: #000;
      }

      .showing {
            max-height: 34em;
      }

      nav ul li {
            box-sizing: border-box;
            width: 100%;
            padding: 24px;
            text-align: center;
      }

      .menu-icon {
            display: block;
      }

}

 /* Link Customization*/

<style type="text/css">

*, body, a {cursor: url("http://i68.tinypic.com/otnqdh.png"), auto;}

a:link    {
  text-decoration:  none;
  color:            white;
  } 
a:visited {
 
  text-decoration:  none;
  color:            white;
  } 
a:hover   {
 
  text-decoration:  none;
  color:            white;
  } 
a:active  {
  text-decoration:  none;
  color: white;
  } 
  
.logo{
	font-family: 'orbitronlight'
}
.menu{
	font-family: 'orbitronlight';
	
}

.display-4{
	margin-top: -50px;
	color: white;
	font-size: 55px;
	
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
	        position: absolute;
	        top: 3700px;
	        left: 0px;
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
			width: 100%;
	        height: 50px;
	        background-color: #151815;
			color: white;
			position: relative;
			top: -50px;
			left: 0px;
			
		}
		
		 .PageName{
	       	position: absolute;
	       	top: 10px;
	       	left: 640px;
        }
        
        .MissionVision{
	        position: absolute;
	       	top: 325px;
	       	left: 650px;
	       	color: white;
	       	font-size: 25px;
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
			z-index: 999 !important;
			
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
			z-index: 999 !important;
			transition: 0.5s;
		}
		.btn-after
		{
			
			position: relative;
			top: 0px;
			left: 360px;
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

.display-4{
		font-family: 'open_sans_condensedlight'; 
		font-size: 21px;
		}
		
.overview{
	margin-left: 120px;
}
.overviewtitle{
			font-family: 'orbitronlight';
			font-size: 30px;
			color: white;
			letter-spacing: 5px;
			position: absolute;
			left: 570px;
		}
</style>




<body background="images/Serbg.png">
      <div class="wrapper zoomIn animated">
            <header>

                  <nav>

                        <div class="menu-icon">
                              <i class="fa fa-bars fa-2x"></i>
                        </div>

                        <div class="logo jackInTheBox animated">
                              
                         </div>

                        <div class="menu">
                              <ul>
	                              	<li><a class="hvr-reveal" href="index.php">ICTC Home</a></li>
	                              	<li><a class="hvr-reveal" href="#About.php">About</a></li>
                                    <li><a class="hvr-reveal" href="#Mission">Mission & Vision</a></li>
                                    <li><a class="hvr-reveal" href="#OrgChart">Organizational Chart</a></li>
                                    <li><a class="hvr-reveal" href="#Policies">Policies and Procedures</a></li>
                                    <li><a class="hvr-reveal" href="#Services">List of Services</a></li>
                                    
                                    
                              </ul>
                        </div>
                        
                        
                        
                  </nav>
                  				
            </header>
                        
            
                  	            
  <! For Transparent Nav>          
  <script type="text/javascript">

      // Menu-toggle button

      $(document).ready(function() {
            $(".menu-icon").on("click", function() {
                  $("nav ul").toggleClass("showing");
            });
      });

      // Scrolling Effect

      $(window).on("scroll", function() {
            if($(window).scrollTop()) {
                  $('nav').addClass('black');
            }

            else {
                  $('nav').removeClass('black');
            }
      })


      </script>           
           
   <br>
   <br>
  <div class="overviewtitle fadeIn animated"> ICTC Overview </div>
<br>	
<br>
<br>
<div class="overview">
	
<a name="About"></a> 

	<div class="card border-light mb-3" style="max-width: 75rem;">
  <div class="card-header" style="font-family: 'orbitronlight'; text-align: center;"><img src="images/abouticon.png" width="50px;" height="50px";><b>About</b> </div>
  <div class="card-body">
	  
    <p class="card-title">The Information and Communications Technology Center (ICTC) handles the technical and systems development of university processes involving the areas information systems, network, technical services, and web development. Specifically, it initiates automation projects with student and faculty processes as top priority. It is also involved in the expansion of IT infrastructure and hardware, maintenance and upgrade of computer laboratories, regular upgrading of internet bandwidth and workstations, IT training, and technical support.
	    <br><br>
	    De La Salle Lipa has been constantly taking measures to sustain the high quality of education it has been known to provide. These measures include the purchase and usage of state-of-the-art equipment, construction of major infrastructure, and modification of academic programs and curriculum.
<br><br>
In all these efforts, information technology has rendered a vital role. Realizing the importance of information technology in all university processes, the administration formed a technical and systems development group that would provide the basic IT needs of the academic community in 1996. It was officially named Information Technology Center (ITC) in 1997.
<br><br>

Since then, it has been tasked to concentrate on four main areas: information systems, network, technical services, and web development. That same year, the center devised a five-year development plan concentrating on office automation, IT infrastructure, staff development, and web page development.
<br><br>

At present, 90 per cent of its original plan for automation has been accomplished, with major student and faculty processes as the priority. The expansion of IT infrastructure and hardware which includes 1.5 km intranet fiber connection, installation of computer laboratories, and regular upgrading of internet bandwidth and workstations has been accomplished ahead of schedule due to aggressive efforts and increasing demand. IT training and technical support were given to ICT's developing teams to ensure that the center's IT specialists are kept up to date and that skills and other resources are optimized.    
  </div>


<a name="Mission"></a> 

	<div class="card border-light mb-3" style="max-width: 75rem;">
  <div class="card-header" style="font-family: 'orbitronlight'; text-align: center;"><img src="images/missionicon.png" width="50px;" height="50px";><b>Mission</b></div>
  <div class="card-body">
	  
    <p class="card-title">Develop Aurora State College of Technology as:<br><br>

•A top ranking higher education in the sciences, arts, teacher education, agriculture, entrepreneurship, engineering and technology. <br><br>
•A fulcrum of interdisciplinary scientific, applied and development-oriented researches that leads to technological inventions and people-oriented programs that addresses poverty alleviation in host and partner communities.<br><br>

•An extension and training opportunities provider supporting entrepreneurial production programs that deliver socio-cultural empowerment and improve the quality of life of the people it serves. <br><br>

•An institution that upholds good governance and provides equal advancement opportunities for the people of Aurora neighboring provinces  
  </div>
  
	<div class="card border-light mb-3" style="max-width: 75rem;">
  <div class="card-header" style="font-family: 'orbitronlight'; text-align: center;"><img src="images/vision.png" width="50px;" height="50px";><b>Vision</b></div>

  <div class="card-body">
    <p class="card-title">The Aurora State College of Technology, a Center of Excellence in Instruction, Research, Extension and Production in Asia.
</h5>
   
  </div></br></div>

</div>
	<a name="OrgChart"></a> 
	<div class="card border-light mb-3" style="max-width: 75rem;">
  <div class="card-header" style="font-family: 'orbitronlight'; text-align: center;"><img src="images/orgover.png" width="50px;" height="50px";><b>Organizational Chart</b></div>

  <div class="card-body">
    <h5 class="card-title"><img class="orgchart fadeIn animated" src="images/Org-Chart.png" style="margin-left: 20px; margin-top: 0px; width="450px"; height="450px""></h5>
    <p class="card-text"></p>
  </div></br></div>

	
<a name="Policies"></a> 

	<div class="card border-light mb-3" style="max-width: 75rem;">
 <div class="card-header" style="font-family: 'orbitronlight'; text-align: center;"><img src="images/poli.jpg" width="50px;" height="50px";><b>Policies and Procedures</b></div>

  <div class="card-body">
	  
<h5 class="card-title"><i>Prohibited Policies</i><br></h5>
•Unauthorized access to network equipments.<br><br>
•Using Signal Blocker that may affect the wireless connection that is a must especially to Elementary & High School Students.<br><br>
•Accessing a computer with confidential informations, or changing or installing unwanted programs to computer.<br><br>
•Using the campus’ internet service for non educational use such as playing online games or downloading necessary files or streaming videos that uses high bandwidth.<br><br>
•Installing devices such as router or switches without permission to test the server of the school.<br><br>




 </div> </div>

	  
<a name="Services"></a> 
	<div class="card border-light mb-3" style="max-width: 75rem;">
  <div class="card-header" style="font-family: 'orbitronlight'; text-align: center;"><img src="images/serv.png" width="50px;" height="50px";><b>List of Services</b></div>

  <div class="card-body">
	  
<h5 class="card-title"><i>Purchase Request</i><br></h5>    
Online Procurement System is a purchase request system online-documented to request any items needed by the organization. Traditionally, the request forms are written in a certain paper/form and then passed on to departments for evaluations. Upon submitting the request form to the Purchasing Department will the form will be generated into a Purchase Order. With the use of the system, the paper and written documents will be eliminated thus it will be online-documented. Using the system, the request forms will be precise and easier to manage.

<h5 class="card-title"><i><br>Computer Laboratory Reservation</i><br></h5>
The campus have different computer laboratories. In case a student or a faculty member would like to reserve one whether for discussion, remedial classes or hands on activities, information including time and when a laboratory will be used must be provided prior to the date needed.

<h5 class="card-title"><i><br>Borrowing and Returning of Equipment</i><br></h5>
Online Borrowing and Returning of equipment is a proposed system to digitalize the way on how staff and faculty borrow and return equipments. Users can easily navigate through the user friendly interface to view available equipments and check status of requests. This will ease the transactions and lessen the work for the ICTC and faculty; and furthermore pave the way for technological improvements of De La Salle Lipa.

<h5 class="card-title"><i><br>Technical Support Request</i><br></h5>
Users may request for technical support if any problem occurs like computer troubleshooting and if a specific software will be used or would like to be installed in a computer in the laboratory.

<h5 class="card-title"><i><br>Inventory of Tools and Equipment</i><br></h5>
Inventory reports are provided to manage equipment that are borrowed and returned to avoid confusion and have s smooth transaction.

<h5 class="card-title"><i><br>Network Support Request</i><br></h5>
In case a network error or problem occurs, then the user can request assistance from the ICTC. 

<h5 class="card-title"><i><br>Web Support Request</i><br></h5>
Maintenance of school website, database and online modules like canvas. Recovery of account can be requested here.

<h5 class="card-title"><i><br>Software Support</i><br></h5>
The Online Software Support Portal allows users to request for software installation and troubleshooting. Users will be able to view their request status, be notified when changes occur, and confirm the completion of their respective request.
</h5>


     </div> 
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