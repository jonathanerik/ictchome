
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
	        top: 3070px;
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
</style>




<body background="images/Serbg.png">
      <div class="wrapper">
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
                                    <li><a class="hvr-reveal" href="#Mission">Mission Vision</a></li>
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
  <div class="PageTitle">
	
	<center> <div class="PageName">ICTC Overview</div> </center>
	
		
</div>

<br>	
<div class="overview">


<a name="Mission"></a> 

	<div class="card border-light mb-3" style="max-width: 75rem;">
  <div class="card-header"><b>Mission</b></div>
  <div class="card-body">
	  
    <p class="card-title">Think about those brands that you purchase from over and over, even when there are cheaper options out there. Do you usually fly on a particular airline? Do you buy your coffee from the same place every morning? Do you recommend a specific restaurant whenever out-of-towners ask for suggestions?
Often, the reason we stay loyal to brands is because of their values. The best brands strive to combine physical, emotional, and logical elements into one exceptional customer -- and employee -- experience.

When you successfully create a connection with your customers and employees, many of them might stay loyal for life -- and you'll have the chance to increase your overall profitability while building a solid foundation of brand promoters. But achieving that connection is no easy task. The companies that succeed are ones that stay true to their core values over the years and create a company that employees and customers are proud to associate with.
    
  </div>
  
	<div class="card border-light mb-3" style="max-width: 75rem;">
  <div class="card-header"><b>Vision</b></div>
  <div class="card-body">
    <p class="card-title">That's where company vision and mission statements come in. A mission statement is intended to clarify the 'what' and 'who' of a company, while a vision statement adds the 'why' and 'how' as well. As a company grows, its objectives and goals may change. Therefore, vision statements should be revised as needed to reflect the changing business culture as goals are met.</h5>
   
  </div></br></div>

</div>
	<a name="OrgChart"></a> 
	<div class="card border-light mb-3" style="max-width: 75rem;">
  <div class="card-header"><b>Organizational Chart</b></div>
  <div class="card-body">
    <h5 class="card-title"><img class="orgchart fadeIn animated" src="images/Org-Chart.png" style="margin-left: 20px; margin-top: 0px; width="450px"; height="450px""></h5>
    <p class="card-text"></p>
  </div></br></div>

	
<a name="Policies"></a> 

	<div class="card border-light mb-3" style="max-width: 75rem;">
  <div class="card-header"><b>Policies and Procedures</b></div>
  <div class="card-body">
	  
    <h5 class="card-title"><i>Employee Conduct</i><br></h5>
 <p>
An employee conduct policy establishes the duties and responsibilities each employee must adhere to as a condition of employment. Conduct policies are in place as a guideline for appropriate employee behavior, and they outline things such as proper dress code, workplace safety procedures, harassment policies and policies regarding computer and Internet usage. Such policies also outline the procedures employers may utilize to discipline inappropriate behavior, including warnings or employee termination.</p>

<h5 class="card-title"><i>Equal Opportunity</i><br></h5>
<p>
Equal opportunity laws are rules that promote fair treatment in the workplace. Most organizations implement equal opportunity policies -- anti-discrimination and affirmative action policies, for example -- to encourage unprejudiced behavior within the workplace. These policies discourage inappropriate behavior from employees, supervisors and independent contractors in regard to the race, gender, sexual orientation or religious and cultural beliefs of another person within the organization.</p>

<h5 class="card-title"><i>Attendance & Time Off</i><br></h5>
<p>
Attendance policies set rules and guidelines surrounding employee adherence to work schedules. Attendance policies define how employees may schedule time off or notify superiors of an absence or late arrival. This policy also sets forth the consequences for failing to adhere to a schedule. For example, employers may allow only a certain number of absences within a specified time frame. The attendance policy discusses the disciplinary action employees face if they miss more days than the company allows.</p>

<h5 class="card-title"><i>Substance Abuse</i><br></h5>
<P>
Many companies have substance abuse policies that prohibit the use of drugs, alcohol and tobacco products during work hours, on company property or during company functions. These policies often outline smoking procedures employees must follow if allowed to smoke on business premises. Substance abuse policies also discuss the testing procedures for suspected drug and alcohol abuse.

</p>


     </div> </div>

	  
<a name="Services"></a> 
	<div class="card border-light mb-3" style="max-width: 75rem;">
  <div class="card-header"><b>List of Services</b></div>
  <div class="card-body">
	  
    <h5 class="card-title"><i>Purchase Request</i><br></h5>
    
An employee conduct policy establishes the duties and responsibilities each employee must adhere to as a condition of employment. Conduct policies are in place as a guideline for appropriate employee behavior, and they outline things such as proper dress code, workplace safety procedures, harassment policies and policies regarding computer and Internet usage. Such policies also outline the procedures employers may utilize to discipline inappropriate behavior, including warnings or employee termination.

<h5 class="card-title"><i>Computer Laboratory Reservation</i><br></h5>
Equal opportunity laws are rules that promote fair treatment in the workplace. Most organizations implement equal opportunity policies -- anti-discrimination and affirmative action policies, for example -- to encourage unprejudiced behavior within the workplace. These policies discourage inappropriate behavior from employees, supervisors and independent contractors in regard to the race, gender, sexual orientation or religious and cultural beliefs of another person within the organization.

<h5 class="card-title"><i>Borrowing and Returning of Equipment</i><br></h5>
Attendance policies set rules and guidelines surrounding employee adherence to work schedules. Attendance policies define how employees may schedule time off or notify superiors of an absence or late arrival. This policy also sets forth the consequences for failing to adhere to a schedule. For example, employers may allow only a certain number of absences within a specified time frame. The attendance policy discusses the disciplinary action employees face if they miss more days than the company allows.

<h5 class="card-title"><i>Technical Support Request</i><br></h5>
Many companies have substance abuse policies that prohibit the use of drugs, alcohol and tobacco products during work hours, on company property or during company functions. These policies often outline smoking procedures employees must follow if allowed to smoke on business premises. Substance abuse policies also discuss the testing procedures for suspected drug and alcohol abuse.

<h5 class="card-title"><i>Inventory of Tools and Equipment</i><br></h5>
Many companies have substance abuse policies that prohibit the use of drugs, alcohol and tobacco products during work hours, on company property or during company functions. These policies often outline smoking procedures employees must follow if allowed to smoke on business premises. Substance abuse policies also discuss the testing procedures for suspected drug and alcohol abuse.

<h5 class="card-title"><i>Network Support Request</i><br></h5>
Many companies have substance abuse policies that prohibit the use of drugs, alcohol and tobacco products during work hours, on company property or during company functions. These policies often outline smoking procedures employees must follow if allowed to smoke on business premises. Substance abuse policies also discuss the testing procedures for suspected drug and alcohol abuse.

<h5 class="card-title"><i>Web Support Request</i><br></h5>
Many companies have substance abuse policies that prohibit the use of drugs, alcohol and tobacco products during work hours, on company property or during company functions. These policies often outline smoking procedures employees must follow if allowed to smoke on business premises. Substance abuse policies also discuss the testing procedures for suspected drug and alcohol abuse.

<h5 class="card-title"><i>Software Support</i><br></h5>
Many companies have substance abuse policies that prohibit the use of drugs, alcohol and tobacco products during work hours, on company property or during company functions. These policies often outline smoking procedures employees must follow if allowed to smoke on business premises. Substance abuse policies also discuss the testing procedures for suspected drug and alcohol abuse.

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