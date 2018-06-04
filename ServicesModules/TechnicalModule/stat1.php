<?php
	session_start();
	require('dbconnect.inc');

	if(!isset($_SESSION['username']))
	{
		header('location:../index-new.php');
	}

	if(isset($_POST['logout']))
	{
		session_unset();
		session_destroy();
		$_SESSION=array();?>
		<meta http-equiv="refresh" content=".000001;url=../index-new.php"/><?php
	}

	$cancel_ID=$_POST['cancel_ID'];
	//print_r($_POST['cancel_ID']);

	$query_select="SELECT * FROM forms WHERE formid = '$formid'";
	$result_query=mysql_query($query_select);
	if(mysql_num_rows($result_query)>0)
	{			
		while($row=mysql_fetch_array($result_query))
		{
			if(($row['status'] == 'PENDING') || ($row['status'] == 'Request for Cancellation'))
			{
				$query_request="UPDATE forms SET status='Request for Cancellation' WHERE formid = '$formid'";
				$query_update=mysql_query($query_request);

				if($query_update)
				{
					echo "<script type=text/javascript> alert('Request for cancellation has been successfully submitted!'); window.location = 'stat.php'; </script>";
				}
				else
				{
					echo '<script type="text/javascript"> alert("ERROR update!") </script>';
					echo (mysql_error());
				}
			}
			elseif($row['status'] == 'APPROVED')
			{
				$query_request="UPDATE forms SET status='Request for Cancellation' WHERE formid = '$formid'";
				$query_update=mysql_query($query_request);

				$query_apprv="UPDATE for_approval SET status ='Request for Cancellation' WHERE formid = '$formid'";
				$query_update_apprv=mysql_query($query_apprv);
							
				if($query_update && $query_update_apprv)
				{
					echo "<script type=text/javascript> alert('Request for cancellation has been successfully submitted!'); window.location = 'stat.php'; </script>";
				}
				else
				{
					echo '<script type="text/javascript"> alert("ERROR update!") </script>';
					echo (mysql_error());
				}
			}
		}
	}
	else
	{
		echo '<script type="text/javascript"> alert("ERROR inventory") </script>';
		//echo (mysql_error());
	}
?>