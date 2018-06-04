<?php
session_start();

if(isset($_GET["ids"]))
{
	$idToDelete = $_GET["ids"];

	for($i = 0; $i < count($idToDelete); $i++)
	{
		include 'connect.inc';
		$query="DELETE FROM requestDatabase WHERE Department = '$idToDelete[$i]'";
		$is_query_successful=mysql_query($query);
	}
}


?>

<!doctype html>
<html lang="en">
  <head>
    <title>
        
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
	<button id="btnDelete" onclick="buttonDelete()">Delete Request/s</button>
    <table class="table table-hover" id="formtbl">
        <?php
            include('connect.inc');
            $result = mysql_query("SELECT * FROM requestdatabase")
            or die(mysql_error());
            echo '<tr>';
            echo '<th>Select All<br><input type="checkbox" name="check[]" value="yes"/></th>';
            echo '<th> <a href="?orderBy=Department">Department</a></th>';
            echo '<th> <a href="?orderBy=Contact">Contact</a></th>';
            echo '<th> <a href="?orderBy=Comment">Comment</a></th>';
            echo '<th> <a href="?orderBy=Requestor">Requestor</a></th>';		
            echo '<th> <a href="?orderBy=Progress">Progress</a></th>';	
            echo '<th></th>';
            '</tr>';
            while($row = mysql_fetch_array( $result ))
            {
				echo '<tr>';
				echo '<td><input type="checkbox" style ="transform:scane(.5);"name="ids[]" value="'.$row['Department'].'"/></td>';
				echo '<td>' . $row['Department'] . '</td>';
				echo '<td>' . $row['Contact'] . '</td>';
				echo '<td>' . $row['Comment'] . '</td>';
                echo '<td>' . $row['Requestor'].'</td>';
                ?>

               
               <td>     


<select>
  <option value="volvo">Received</option>
  <option value="saab">Approved</option>
  <option value="opel">Pending</option>
  <option value="audi">Completed</option>
</select>

              </td> 
                <?php
				
				echo '</tr>';
            }
        ?>
        
    </table>

  

        

      <!--Table-->
<!--<table class="table table-bordered table-responsive-md">

<!--Table head
<thead>
    <tr>
        <th class="pr-md-3 pr-5">
            <input type="checkbox" class="filled-in" id="checkbox123">
            <label for="checkbox123" class="label-table"></label>
        </th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Username</th>
    </tr>
</thead>
<!--Table head-->

<!--Table body-->
<!--<tbody>
    <tr>
        <th scope="row" class="pr-md-3 pr-5">
            <input type="checkbox" class="filled-in" id="checkbox124">
            <label for="checkbox124" class="label-table"></label>
        </th>
        <td>Mark</td>
        <td>Otto</td>
        <td>@mdo</td>
    </tr>
    <tr>
        <th scope="row" class="pr-md-3 pr-5">
            <input type="checkbox" class="filled-in" id="checkbox125">
            <label for="checkbox125" class="label-table"></label>
        </th>
        <td>Mark</td>
        <td>Otto</td>
        <td>@TwBootstrap</td>
    </tr>
    <tr>
        <th scope="row" class="pr-md-3 pr-5">
            <input type="checkbox" class="filled-in" id="checkbox126">
            <label for="checkbox126" class="label-table"></label>
        </th>
        <td>Jacob</td>
        <td>Thornton</td>
        <td>@fat</td>
    </tr>
</tbody>
<!--Table body-->

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