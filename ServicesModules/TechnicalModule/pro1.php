<?php
	session_start();
	require('dbconnect.inc');
	?>
<html>

<head
<link rel="stylesheet" href="../css/style.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

</head>
<body>

<!------end header here --------->
<div class="container">
<h3>List of Requests</h3>
<table class="table table-striped table-hover ">
  <thead>
    <tr>	<th>ID</th>
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
  $formid=$_SESSION['formid'];
  $query="Select * from `forms` where `formid`=$formid";
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
		   
    </tr>
	<?php $i++;}}else{
		 echo "No record Found!";
		
	} ?>
  </tbody>
</table> 

</div>


</body>
</html>