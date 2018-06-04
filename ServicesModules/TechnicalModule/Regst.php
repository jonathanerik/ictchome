<?php
if(isset($_POST['Register']))
{
mysql_connect('localhost','root','');
mysql_select_db('demo');
$fullname = $_POST['fullname'];
$resultset_1 = mysql_query("select * from employee where emp_first_name='".$first_name."' ") or die(mysql_error());
$count = mysql_num_rows($resultset_1);
   if($count == 0)
    {
       $resultset_2 = mysql_query("INSERT INTO demo.employee VALUES ('".$first_name."')")  or
       die(mysql_error());
    }
	else
	{
       echo "The user is already present in the employee table" ;
    }
}
?>