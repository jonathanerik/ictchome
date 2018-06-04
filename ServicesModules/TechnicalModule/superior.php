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
	<link href="local-fonts/Open-Sans/Open-Sans.css" rel="stylesheet"></head>
    
    <style>
        body{
            background: #344e35 ;
            font-family: 'open_sans_condensedlight', sans-serif;
            font-size: 20px;

        }
        
                
        .navbar-nav{
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
			left:60px;
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
	        height: 2000px;
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
		table{
			border-right: 3px solid #087830;
			border-left: 3px solid #087830;
			border-top: 3px solid #087830;
			width: 100%;
			
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
			height: 50px;
		}
		.table1{
			
			position:relative;
			top: 30px;
			right: 30px;
		}
		.badge {
			background-color:red;
			color:white;
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
       <a class="nav-link"><span class="badge">
	   <?php
			include 'dbconnect.inc';
			
			$query1="SELECT * FROM forms WHERE status='Pending'";
			$result=mysql_query($query1);
			$num_results=mysql_num_rows($result);
			
			echo $num_results;
	   ?>
	   </span>Notifications</a>
     </li>
      <li class="nav-item active">
       <a class="nav-link" href="logout.php">Logout</a>
     </li>
	 
	 	  <li class="nav-item active">
       <a class="nav-link"><?php echo $_SESSION['username']; ?></a>
     </li>
   </ul></div>
 </center>
 </nav>

	<br>

<?php
if(isset($_POST['Approved']))
{
	$status="Approved";

	$formid=$_POST['formid'];
	
	
	$query="UPDATE forms set status='Approved' where formid='$_POST[formid]'";
	
	$res=mysql_query($query);
	
	if($res){
		$_SESSION['success']="Request Approved!";
		
	}else{
		echo "Request Rejected!";
	}
	$query_select="SELECT * FROM forms WHERE formid = '$formid'";
								$result_query=mysql_query($query_select);
								if(mysql_num_rows($result_query)>0)
								{
									$query_req="UPDATE forms SET status ='Approved' WHERE formid = '$formid'";
									$query_update=mysql_query($query_req);

									$query_apprv="UPDATE forms SET status ='Approved' WHERE formid = '$formid'";
									$query_update_apprv=mysql_query($query_apprv);
								}

}
if(isset($_POST['Rejected']))
{
	$status="Rejected";

	$formid=$_POST['formid'];
	
	$query="UPDATE forms set status='Rejected' where formid='$_POST[formid]'";
	
	$res=mysql_query($query);
	
	
	if($res){
		$_SESSION['success']="Request Rejected!";
		
	}else{
		echo "Data not Updated, please try again!";
	}
	$query_select="SELECT * FROM forms WHERE formid = '$formid'";
								$result_query=mysql_query($query_select);
								if(mysql_num_rows($result_query)>0)
								{
									$query_req="UPDATE forms SET status ='Rejected' WHERE formid = '$formid'";
									$query_update=mysql_query($query_req);

									$query_apprv="UPDATE forms SET status ='Rejected' WHERE formid = '$formid'";
									$query_update_apprv=mysql_query($query_apprv);
								}
}


?>

<?php
if(isset($_POST['Approved1']))
{
	$status="Approved";

	$formid=$_POST['id'];
	
	
	$query="UPDATE form1 set status='Approved' where formid='$_POST[id]'";
	
	$res=mysql_query($query);
	
	if($res){
		$_SESSION['success']="Request Approved!";
		
	}else{
		echo "Request Approved!";
	}
	$query_select="SELECT * FROM form1 WHERE formsid = '$formid'";
								$result_query=mysql_query($query_select);
								if(mysql_num_rows($result_query)>0)
								{
									$query_req="UPDATE form1 SET status ='Approved' WHERE formsid = '$formid'";
									$query_update=mysql_query($query_req);

									$query_apprv="UPDATE form1 SET status ='Approved' WHERE formsid = '$formid'";
									$query_update_apprv=mysql_query($query_apprv);
								}

}
if(isset($_POST['Rejected1']))
{
	$status="Rejected";

	$formid=$_POST['id'];
	
	$query="UPDATE form1 set status='Rejected' where formid='$_POST[id]'";
	
	$res=mysql_query($query);
	
	
	if($res){
		$_SESSION['success']="Request Rejected!";
		
	}else{
		echo "Request Rejected!";
	}
	$query_select="SELECT * FROM form1 WHERE formsid = '$formid'";
								$result_query=mysql_query($query_select);
								if(mysql_num_rows($result_query)>0)
								{
									$query_req="UPDATE form1 SET status ='Rejected' WHERE formsid = '$formid'";
									$query_update=mysql_query($query_req);

									$query_apprv="UPDATE form1 SET status ='Rejected' WHERE formsid = '$formid'";
									$query_update_apprv=mysql_query($query_apprv);
								}
}


?>

<!------end header here --------->
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
	     <th>Department</th>
		   <th>Building</th>
		   <th>Room Number</th>
		    <th>Issues</th>
			<th>Detailed Request</th>
			<th>Date</th>
			 <th>Status</th>
			 <th>&nbsp;</th>
    </tr>	
  </thead>
  <tbody>
  <?php 
  $i=1;
  $query="Select * from `forms` WHERE status!='Completed' ";
	$res=mysql_query( $query);
	$count=mysql_num_rows($res);
	if($count>0)
	{
	while($row=mysql_fetch_array($res))
	{
  
  ?>
  
    <tr>
	  <td><?php echo $i; ?></td>
       <td><?php echo $row['fullname']; ?></td>
      <td><?php echo $row['email'];?></td>
	  <td><?php echo $row['contactnumber'];?></td>
	    <td><?php echo $row['department'];?> </td>
		  <td><?php echo $row['building'];?></td>
		    <td><?php echo $row['roomnumber'];?></td>
			<td><?php echo $row['issues'];?></td>
			<td><?php echo $row['request'];?></td>
			<td><?php echo $row['date'];?></td>
			<td style="color:green;"><?php echo $row['status'];?></td>
			<form method="post" action="superior.php" >
			<input type="hidden" name="formid" value="<?php echo $row['formid'];?>">
			<td> 
			<button type="submit" name="Approved" class="btn btn-info">Approve</button>
			</br></br>
			<button type="submit" name="Rejected" class="btn btn-danger">Reject &nbsp </button>
			
			</form></td>
    </tr>
	<?php $i++;}}else{
		 echo "No record Found!";
		
	} ?>
	
	<?php
	
	$query = "SELECT * FROM form1 WHERE status != 'Completed'";
	$res = mysql_query($query);
	
	while($row = mysql_fetch_assoc($res))
	{
		?>
  
    <tr>
	  <td><?php echo $i; ?></td>
       <td><?php echo $row['fullname']; ?></td>
      <td><?php echo $row['email'];?></td>
	  <td><?php echo $row['contactnumber'];?></td>
	    <td><?php echo $row['department'];?> </td>
		  <td><?php echo $row['building'];?></td>
		    <td><?php echo $row['roomnumber'];?></td>
			<td><?php echo $row['issues'];?></td>
			<td><?php echo $row['request'];?></td>
			<td><?php echo $row['date'];?></td>
			<td style="color:green;"><?php echo $row['status'];?></td>
			<form method="post" action="superior.php" >
			<input type="hidden" name="id" value="<?php echo $row['formsid'];?>">
			<td> 
			<button type="submit" name="Approved1" class="btn btn-info">Approve</button>
			</br></br>
			<button type="submit" name="Rejected1" class="btn btn-danger">Reject &nbsp </button>
			
			</form></td>
    </tr>
	<?php
	$i++;
	}
	?>
	
	 <?php 
  $i=1;
  $query="Select * from `forms` WHERE status='Completed'";
	$res=mysql_query( $query);
	$count=mysql_num_rows($res);
	if($count>0)
	{
	while($row=mysql_fetch_array($res))
	{
  
  ?>
    <tr>
	  <td><?php echo $i; ?></td>
       <td><?php echo $row['fullname']; ?></td>
      <td><?php echo $row['email'];?></td>
	  <td><?php echo $row['contactnumber'];?></td>
	    <td><?php echo $row['department'];?> </td>
		  <td><?php echo $row['building'];?></td>
		    <td><?php echo $row['roomnumber'];?></td>
			<td><?php echo $row['issues'];?></td>
			<td><?php echo $row['request'];?></td>
			<td><?php echo $row['date'];?></td>
			<td style="color:green;"><?php echo $row['status'];?></td>
			<form method="post" action="superior.php" >
			<input type="hidden" name="formid" value="<?php echo $row['formid'];?>">
			<td>
			
			</br></br>
		
			</form></td>
    </tr>
	<?php $i++;}}
		
	 ?>
	  <?php 
  $i=1;
  $query="Select * from `form1` WHERE status='Completed'";
	$res=mysql_query( $query);
	$count=mysql_num_rows($res);
	if($count>0)
	{
	while($row=mysql_fetch_array($res))
	{
  
  ?>
    <tr>
	  <td><?php echo $i; ?></td>
       <td><?php echo $row['fullname']; ?></td>
      <td><?php echo $row['email'];?></td>
	  <td><?php echo $row['contactnumber'];?></td>
	    <td><?php echo $row['department'];?> </td>
		  <td><?php echo $row['building'];?></td>
		    <td><?php echo $row['roomnumber'];?></td>
			<td><?php echo $row['issues'];?></td>
			<td><?php echo $row['request'];?></td>
			<td><?php echo $row['date'];?></td>
			<td style="color:green;"><?php echo $row['status'];?></td>
			<form method="post" action="superior.php" >
			<input type="hidden" name="formid" value="<?php echo $row['formsid'];?>">
			<td>
			
			</br></br>
		
			</form></td>
    </tr>
	<?php $i++;}}
		
	 ?>
  </tbody>
</table>
</div> 
</div>

</br>




  </tbody>

</body>
</html>



