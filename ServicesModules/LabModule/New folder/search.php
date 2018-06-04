<html>
<head>
<title>Dentist Appointment Schedule</title>
</head>
<tr>
<body background="bg1.jpg">
<table width="1400" align="center">
<td height="140" align="center" background="bg2.jpg">
<font style="rockwell" size=5 color="Blue"> <b> DENTIST APPOINTMENT </b></font>
</td>
</tr>

<tr>
<td>
<table border=4 width="716" align="Center" height=50>
<td width="700" align="Center">
<input  type="submit" name="submit" value="Home" style = "text-align:center; font-family:Bookman Old Style; font-size:15px; font-weight:bold;" onClick="location='home.php'"/>
<input  type="submit" name="submit" value="Add your clinic" style = "text-align:center; font-family:Bookman Old Style; font-size:15px; font-weight:bold;" onClick="location='addclinic.php'"/>

<input  type="submit" name="submit" value="About" style = "text-align:center; font-family:Bookman Old Style; font-size:15px; font-weight:bold;" onClick="location='about.php'"/>
<input  type="submit" name="submit" value="Inquire" style = "text-align:center; font-family:Bookman Old Style; font-size:15px; font-weight:bold;" onClick="location='inquire.php'"/>
<a href="http://localhost/final/tcpdf/examples/listofstudents.php/" target="_blank"><button><strong>View All Inquiries<strong></button></a>
<?php 
session_start();

$login_session=$_SESSION['login_user'];
echo $login_session;?></h1>
<a href="logout.php"><button><strong> Logout<strong></button> </a>
</body>
</html>
<br>
<form action="search.php" method="post">
<input  type="text" name="name" style = "text-align:center; font-family:Bookman Old Style; font-size:15px; font-weight:bold;" hspace=1/> 
<input  type="submit" name="submit" value="Search" style = "text-align:center; font-family:Bookman Old Style; font-size:15px; font-weight:bold;"/></form>
<br>
</p>
</table>
</td>
</tr>

<tr>
<td align="center">
<?php
$search=$_POST['name'];
$con = mysql_connect("localhost","root","");
if (!$con)
  {
  	die('Could not connect: ' . mysql_error());
  }

mysql_select_db("drecord", $con);

($result = mysql_query("SELECT * FROM tbldentist
WHERE cname LIKE('$search') OR email LIKE('$search') OR pnumber LIKE('$search') OR caddress LIKE('$search') OR lname LIKE('$search')"));
$con = mysql_connect("localhost","root");

echo "<table border = '5' cellpadding = '15' bordercolor = 'black' style = 'background-color: #f8f8f8'>";

if ($row = mysql_fetch_array($result)) 
{
do 
{
	echo "<table border = '1' cellpadding = '15' bordercolor = 'black' style = 'background-color: #f8f8f8'>";
echo "<tr>";
echo "<td colspan=2>";
	
	echo "<font face = 'Rockwell' size = '5' color='blue'><center>" . $row['cname'] . "</center></font>";

	echo "<font face = 'Rockwell' size = '2'><center>" . $row['caddress'] . "<hr></center></font>";

echo "<font face = 'Rockwell' size = '2'><center>" . $row['mdetails'] . "<hr></center></font>";
echo "</td>";
echo "<tr>";
echo "<td>";

	echo "<font face = 'Rockwell' size = '3'><center>" . $row['fname'] . "</center></font>";
	echo "<font face = 'Rockwell' size = '3'><center>" . $row['lname'] . "</center></font>";
echo "</td>";
echo "<td>";	
	echo "<font face = 'Rockwell' size = '3'><center>" . $row['email'] . "</center></font>";
echo "<input  type='submit' name='submit' value='Inquire' style = 'text-align:center; font-family:Bookman Old Style; font-size:15px; font-weight:bold;'/>";
echo "</td>";

echo "</tr>";
	echo "</tr>";
echo "<br>";
echo "<br>";

}
while($row = mysql_fetch_array($result));
}
else 
{
	echo "</br><center>";
	echo '<p style="font-size:30px; font-family:Rockwell;">';
	echo "Sorry, no records were found!";
	echo "</center>";
}

echo "<br>";

echo "</table>";

mysql_close($con);

?> 

</td>
</tr>

<tr>
<td colspan ='2' style='height: 50px;'>
</td>
</tr>

<table width="1400" align="center">
<td height="140" align="center" background="bg2.jpg">
</td>
</tr>

</table>

</body>
</html>