<p style="font-family:Agency FB;color:black;font-size:50px;line-height:120%;text-align:center">



V I E W&emsp; I N V E N T O R Y </p></br>



<?php

$co=0;

include 'dbconnect.inc';
$query='SELECT * FROM tools';
$result=mysql_query($query);
$num_results=mysql_num_rows($result);


$header=array('Tools ','Onhand ','Deployed','Retired','Damaged','Missing', 'ForExchange');
for ($a=0;$a<1;$a++)
{


$sum=0;
echo "<table>";

for($b=0;$b<7;$b++)
{
echo "<td>";
echo $header[$b];
}
echo "</td>";


}

while($row=mysql_fetch_assoc($result)){
for ($a=0;$a<1;$a++){

echo "<table>";
echo "<td>";
echo $row['Tools'];
echo "<td>";
echo $row['Onhand'];
echo "<td>";
echo $row['Deployed'];
echo "<td>";
echo $row['Retired'];

echo "<td>";
echo $row['Damaged'];
echo "<td>";
echo $row['Missing'];
echo "<td>";
echo $row['ForExchange'];

echo "<tr>";
$sum=$sum+$row['Damaged'];
}}
?>

<style>

#container{
	background-color: #FFE4E1;
	border-radius:0px;
	width:208px;
	height:50px;
	box-shadow:4px 4px 4px 4px;
	float:right;
	font-size:150%;
	text-align: center;
	text-decoration: none;
	padding:0px;
	margin-left:250px;
	margin-right:110px;
}
#container2{

	background-color: none;
	border-radius:0px;
	width:9em;
	height:5em;
	
   border-collapse: collapse;
	float:right;
	font-size:100%;
	vertical-align: center;
   text-align: center;
	text-decoration: none;
	padding:0px;
	margin-top:5px;
	margin-right:0px;
	margin-left:100px;
}

</style>


<style>
table {

margin-left: 10px;
   border: 3px solid black;
   padding: 5px;
   border-collapse: collapse;
   font-family: Georgia, Times, serif;
   }
   tr {
   border: 3px solid #00BFFF;
   font-size: 60%;
   text-transform: uppercase;
   }
   td {
   border: 3px solid black;
   height: 5em;
   width:9em;
   padding: 5px;
color: black;
   vertical-align: center;
   text-align: center;
   }


</style>
