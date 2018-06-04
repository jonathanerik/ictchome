<?php
session_start();

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
        
    </title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  </head>
  <body  class="container-fluid" style="background-color: #344e35">
  <div class="container">
      <header class="blog-header py-3">
        <div class="flex-nowrap justify-content-between align-items-center">
          <div class="col-12 pt-4 text-center">
          <img class="d-block mx-auto mb-1" src="https://acesdlsl.files.wordpress.com/2010/08/logo-green-copy.png" alt="" width="60" height="100">
            <a class="blog-header-logo text-dark" href="#">ICTC ONLINE<br><h5>De La Salle Lipa<h5></a>
          </div>
        </div>
        <div class="row flex-nowrap justify-content-between align-items-center">
          <div class="col-4 pt-1">
            <a class="text-muted" href="#">Menu</a>
          </div>
          <div class="col-4 d-flex justify-content-end align-items-center">
            <a class="btn btn-sm btn-outline-secondary" href="#">Generate Report</a>
          </div>
        </div>
      </header>
  <form  class="col-md-12 column" id="formTbl" method="get">								
	<!--
        <button id="btnDelete" onclick="buttonDelete()">Delete Request/s</button>
    -->
    <div class="row clearfix">
    <div class="col-md-12 col-12 column">
    <table class="table table-hover" id="formtbl">
        <?php
            include('connect.inc');
            $result = mysql_query("SELECT * FROM requestdatabase")
            or die(mysql_error());
            echo '<tr>';
            echo '<th>Division</a></th>';
            echo '<th>Requestor</a></th>';
            echo '<th>Date Requested</a></th>';
            echo '<th>Contact</a></th>';
            echo '<th>Comment</a></th>';
            echo '<th>Progress</a></th>';	
            '</tr>';
            while($row = mysql_fetch_array( $result ))
            {
				echo '<tr>';
                echo '<td>' . $row['division'] . '</td>';
                echo '<td>' . $row['requestedby'].'</td>';
                echo '<td>' . $row['date'].'</td>';
				echo '<td>' . $row['contact'] . '</td>';
				echo '<td>' . $row['comment'] . '</td>';
                ?>                
                    <td>     
                    <?php if($row['status']=="Pending"){
                            echo '<button type="button" class="btn-sm btn-outline-light" data-toggle="modal" data-target="#exampleModal' . $row['id'] . '" disabled>';   
                            echo $row['status'];
                            echo '</button>';
                        }elseif($row['status']=="Approved"){
                            echo '<button type="button" class="btn-sm btn-outline-primary" data-toggle="modal" data-target="#exampleModal' . $row['id'] . '"disabled>';   
                            echo $row['status'];
                            echo '</button>';
                        }elseif($row['status']=="Declined"){
                            echo '<button type="button" class="btn-sm btn-outline-danger" data-toggle="modal" data-target="#exampleModal' . $row['id'] . '"disabled>';   
                            echo $row['status'];
                            echo '</button>';
                        }elseif($row['status']=="Queued"){
                            echo '<button type="button" class="btn-sm btn-outline-info" data-toggle="modal" data-target="#exampleModal' . $row['id'] . '"disabled>';   
                            echo $row['status'];
                            echo '</button>';
                        }elseif($row['status']=="Completed"){
                            echo '<button type="button" class="btn-sm btn-outline-success" data-toggle="modal" data-target="#exampleModal' . $row['id'] . '"disabled>';   
                            echo $row['status'];
                            echo '</button>';
                        }
                        else
                    ?>
                    </td> 
                    <?php
                    echo '</tr>';
            }
        ?>
    </table>
     
</div>
</div>
<!--</table>
<!--Table-->
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>
