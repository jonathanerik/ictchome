<?php
	session_start();
	require('dbconnect.inc');
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
            margin-left: 470px;
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
		  .bell{
	        position: absolute;
	        left: 100px;
			top: 300px;
       }
 .sss{
	        position: absolute;
	        left: 80px;
			top: 300px;
       }
	   
	   
		table{
			border-right: 3px solid #087830;
			border-left: 3px solid #087830;
			border-top: 3px solid #087830;
		}
			
		tr{
			border-right: 3px solid #087830;
			border-left: 3px solid #087830;
			border-top: 3px solid #087830;
		}			
		td{
			border-right: 3px solid #087830;
			border-left: 3px solid #087830;
			border-top: 3px solid #087830;
		}
		th{
			border-right: 3px solid #087830;
			border-left: 3px solid #087830;
			border-top: 3px solid #087830;
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
  
       <a class="nav-link" href="home.html">Home</a>
     </li>
	 
	 <li class="nav-item active">
       <a class="nav-link" href="Notif.html">Notifications</a>
     </li>
   
    
     <li class="nav-item active">
       <a class="nav-link" href="List.html">List of Requests <span></span><span></span></a>
     </li>
    
	 
    
    
	 </ul>
 </div><center/>
</nav></br></br>

</br>

<?php
if(isset($_POST['approved']))
{
	$status="Approved";
	$formid=$_POST['formid'];
	
	 $query="UPDATE `forms` set `status`='$status' where `formid`='$formid'";
	
	$res=mysql_query($query);
	
	if($res){
		$_SESSION['success']="Row Updated successfully!";
		
	}else{
		echo "Data not Updated, please try again!";
	}

}
if(isset($_POST['rejected']))
{
	$status= "Rejected";
	$formid=$_POST['formid'];
	
	$query="UPDATE `forms` set `status`='$status' where `formid`='$formid'";
	
	$res=mysql_query($query);
	
	if($res){
		$_SESSION['success']="Row Updated successfully!";
		
	}else{
		echo "Data not Updated, please try again!";
	}
}


?>
<!------end header here --------->
<div class="container">
<h3>All Applied Leave Lists</h3>
<?php if(isset($_SESSION['success'])){
	echo $_SESSION['success'];
	unset($_SESSION['success']);
}
	?>
<table class="table table-striped table-hover ">
  <thead>
    <tr>

     
<th>ID</th>
      <th>Requestor Name</th>
			 <th>Email</th>
	   <th>Contact Number</th>
	     <th>Department</th>
		   <th>Building</th>
		   <th>Room Number</th>
		    <th>Issues</th>
			<th>Detailed Request</th>
			<th>Date</th>
			 <th>Status</th>
    </tr>
  </thead>
  <tbody>
  <?php 
  $i=1;
  $query="Select * from forms where status = 'Approved'";
	$res=mysql_query( $query);
	$count=mysql_num_rows($res);
	if($count<=0){
		 echo "No record Found!";
	}else
	{
		
		while($row=mysql_fetch_array($res))
		{
			
			?>
		<tr>
	<td ><?php echo $i;?></td>
       <td class="formid"><?php echo $row['formid'];?></td>
	  <td class="fullname"><?php echo $row['fullname'];?></td>
	    <td class="email"><?php echo $row['email'];?> </td>
		<td ><?php echo $row['contactnumber'];?></td>
      <td class="building"><?php echo $row['building'];?></td>
	  <td class="roomnumber"><?php echo $row['roomnumber'];?></td>
	  <td class="issues"><?php echo $row['issues'];?></td>
	  <td class="request"><?php echo $row['request'];?></td>
	  <td class="date"><?php echo $row['date'];?></td>
		  <td  style="color:green;"><?php echo $row['status'];?></td>

	
    </tr>
			<?php
			$i++;
		}
	}
  ?>
  <tr>
      
 <td><?php echo $row['formid'];?></td>
      <td><?php echo $row['fullname']; ?><br>
	  <?php echo $row['email']; ?> <b> </b> <?php echo $row['department']; ?>
	  </td>
	  <td><?php echo $row['building'];?></td>
	    <td><?php echo $row['roomnumber'];?> </td>
		  <td><?php echo $row['issues'];?></td>
		    <td><?php echo $row['request'];?></td>
			<td style="color:green;"><?php echo $row['status'];?></td>
		
    </tr>
	
  </tbody>
</table> 