<?php include 'auth.php';?>


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
	        height: 1000px;
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
       <a class="nav-link" href="schedules_coordinator.php">Laboratory Schedules<span></span><span></span></a>
     </li>
     
     <li class="nav-item active">
       <a class="nav-link" href="requestform_coordinator.php">Request Form</a>
     </li>
     
     <li class="nav-item active">
       <a class="nav-link" href="requestapproval_coordinator.php">Request/s Approval</a>
     </li>  
   </ul>
 </div>
</nav>
</p>
</table>
</td>
</tr>
<?php
if(isset($_POST['approved']))
{
	$status="Approved";
	$comment=$_POST['comment'];
	$id=$_POST['id'];
	
	 $query="UPDATE `applied_leave` set `status`='$status', `comment`='$comment' where `id`='$id'";
	
	$res=mysqli_query($conn,$query);
	
	if($res){
		$_SESSION['success']="Schedules Updated successfully!";
		
	}else{
		echo "Data not Updated, please try again!";
	}

}
if(isset($_POST['rejected']))
{
	$status= "Rejected";
	$comment=$_POST['comment'];
	$id=$_POST['id'];
	
	$query="UPDATE `applied_leave` set `status`='$status', `comment`='$comment' where `id`='$id'";
	
	$res=mysqli_query($conn,$query);
	
	if($res){
		$_SESSION['success']="Row Updated successfully!";
		
	}else{
		echo "Data not Updated, please try again!";
	}
}


?>
<!------end header here --------->
<div class="container">
<h3>List of Lab Reservation Request</h3>
<?php if(isset($_SESSION['success'])){
	echo $_SESSION['success'];
	unset($_SESSION['success']);
}
	?>
<table class="table table-striped table-hover ">
  <thead>
    <tr>
	        <th>Room Number</th>
			 <th>Time</th> 
			 <th>Date</th>
	   <th>Purpose</th>
	     <th>Reserver's Mail</th>
		   <th>Reserver's Name</th>
		   <th>Phone Number</th>
		    <th>Section</th>
			 <th>Status</th>
			 <th>Comment</th>
			 <th>&nbsp;</th>
    </tr>
  </thead>
  <tbody>
  <?php 
  $i=1;
  $query="Select * from applied_leave";
	$res=mysqli_query($conn, $query);
	$count=mysqli_num_rows($res);
	if($count>0)
	{
	while($row=mysqli_fetch_array($res))
	{
  
  ?>
    <tr>
      
      
       <td><?php echo $row['roccupy'];?></td>
      <td><?php echo $row['date_start']; ?> <b> to </b> <?php echo $row['date_end']; ?></td>
	  
	  <td><?php echo $row['time_in']; ?> <b> to </b> <?php echo $row['time_out']; ?></td>
	  
	  <td><?php echo $row['purpose'];?></td>
	    <td><?php echo $row['rmail'];?> </td>
		  <td><?php echo $row['rname'];?></td>
	<td><?php echo $row['pnumber'];?></td>
			<td style="color:green;"><?php echo $row['status'];?></td>
			<td><form method="post" action="" >
			<textarea name="comment"></textarea></td>
			<input type="hidden" name="id" value="<?php echo $row['id'];?>">
			<td> 
			<button type="submit" name="approved" class="btn btn-primary">Approved</button>
			<button type="submit" name="rejected" class="btn btn-primary">X</button>
			</form></td>
    </tr>
	<?php $i++;}}else{
		 echo "No record Found!";
		
	} ?>
  </tbody>
</table> 
</div>
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