<html>

<body>


<?php


$con = mysql_connect("localhost","root","");


if (!$con)

{
	
	die('Could not connect: ' . mysql_error());

}
	
	

mysql_select_db("lab_record", $con);
	


$sql="INSERT INTO lab_record (comments , approval) 
VALUES
( '$_POST[comments]', '$_POST[approval]')";



if (!mysql_query($sql,$con))

{
	
	die('Error:' . mysql_error());
	
}
	




header("Location:schedules.php");
die();
mysql_close($con)
	

?>




</body>
</html>