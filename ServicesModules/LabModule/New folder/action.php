<html>

<body>


<?php


$con = mysql_connect("localhost","root","");


if (!$con)

{
	
	die('Could not connect: ' . mysql_error());

}
	
	

mysql_select_db("lab_record", $con);
	


$sql="INSERT INTO lab_record (reserver_name, section, room_to_occupy, purpose, reserver_mail, phone_number, date, time_in, time_out) 
VALUES
( '$_POST[reserver_name]', '$_POST[section]','$_POST[room_to_occupy]','$_POST[purpose]', '$_POST[reserver_mail]', '$_POST[phone_number]', '$_POST[date]','$_POST[time_in]','$_POST[time_out]')";



if (!mysql_query($sql,$con))

{
	
	die('Error:' . mysql_error());
	
}
	




header("Location:superior_approval.php");
die();
mysql_close($con)
	

?>




</body>
</html>