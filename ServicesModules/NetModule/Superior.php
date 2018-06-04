<?php
session_start();

if (!isset ($_SESSION['username']) && !isset($_SESSION['password']))
{
  header('location:login.php');
}

if(isset($_GET["ids"]))
{
	$idToDelete = $_GET["ids"];

	for($i = 0; $i < count($idToDelete); $i++)
	{
		include 'connect.inc';
		$query="DELETE FROM requestDatabase WHERE division = '$idToDelete[$i]'";
		$is_query_successful=mysql_query($query);
	}
}

?>

<!doctype html>
<html lang="en">
  <head>
    <title>
        Superior
    </title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  </head>
  <?php include "index.php";?>
  <body>
  <form id="formTbl" method="get">								
	<!--
        <button id="btnDelete" onclick="buttonDelete()">Delete Request/s</button>
    -->
    <table class="table table-hover" id="formtbl">
        <?php
            include('connect.inc');
            $result = mysql_query("SELECT * FROM requestdatabase")
            or die(mysql_error());
            echo '<tr>';
            echo '<th> <a href="?orderBy=division">Division</a></th>';
            echo '<th> <a href="?orderBy=requestedby">Requestor</a></th>';
            echo '<th> <a href="?orderBy=requestedby">Date Requested</a></th>';
            echo '<th> <a href="?orderBy=contact">Contact</a></th>';
            echo '<th> <a href="?orderBy=comment">Comment</a></th>';
            echo '<th> <a href="?orderBy=Progress">Progress</a></th>';	
            '</tr>';
            while($row = mysql_fetch_array( $result ))
            {
				echo '<tr>';
                echo '<td>' . $row['division'] . '</td>';
                echo '<td>' . $row['requestedby'].'</td>';
                echo '<td>' . $row['date'].'</td>';
				echo '<td>' . $row['contact'] . '</td>';
				echo '<td>' . $row['comment'] . '</td>';
                ;
                ?>              
               <td>     
                <select disabled> 
                <option>Pending</option>
                <option>Approved</option>
                <option>Declined</option>
                <option>Completed</option>
                
                </select>
              </td> 
                <?php
				echo '</tr>';
            }
        ?>
    </table>
     


<!--</table>
<!--Table-->
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>
<script>
	function buttonDelete() {
		var ids = [];
		var checkbox =   document.getElementsByName('ids[]');
		
		for (var i = 0; i < checkbox.length; i++) {
			if (checkbox[i].checked)
				ids.push(checkbox[i].value);
		}
		
		if (ids.length > 0) {
                if (confirm("Are you sure you want to delete this item(s)?")) {
                    form.submit();
                }
            }

		console.log(ids);
	}
</script>