<?php
	session_start();
		if	(isset($_POST["submit"]))
		{
			    include 'connect.inc';
				$query="INSERT INTO requestdatabase (division, contact, date, comment, requestedby, status) 
					VALUES('$_POST[division]','$_POST[contact]','$_POST[date]','$_POST[comment]','$_POST[requestedby]','$_POST[status]')";
				$is_query_successful=mysql_query($query);
				if($is_query_successful)
				{
					echo '<div class="alert alert-success alert-dismissable"></div>';
				}
				else 
				{
					$submit='<div class="alert alert-danger alert-dismissable"></div>';
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
    <table class="table table-hover">
        <?php
            include('connect.inc');
            if ($_SESSION['Usertype']=="Requestor" || $_SESSION['Usertype']=="Superior")
            {
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
                    ?>                
                    <td>    
                        <!-- Button trigger modal --> 
                        <button type="button" class="btn-sm btn-primary" data-toggle="modal" data-target="#exampleModal">
                            <?php echo $row['status']?> 
                        </button>
                        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Manage Request</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <!-- Modal -->
                                    <div id="qwe"class="modal-body">
                                    <form method="GET" action="ManageRequests1.php">
                                        <div class="tableBorder"><!-- tableborder open -->
                                            <div class="col">
                                                <h4 class="mb-1">Network Service Request Form </h4>     
                                                <div class="row">
                                                    <h6 class="col-5">FORM ICT - 0010 - INTv1. 00s2015</h6>
                                                    <div class="col-7 mb-0">
                                                        <?php echo $row['date'];?>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-6 mb-3">
                                                        <label for="division">Request for</label>
                                                        <input type="text" class="form-control" name="division"  placeholder="<?php echo $row["division"];?>" disabled>
                                                    </div>
                                                    <div class="col-md-6 mb-3">                                                            
                                                    <label for="contact">Local / contact Number</label>
                                                        <input type="text" class="form-control" name="contact" placeholder="<?php echo $row["contact"];?>" disabled>
                                                    </div>
                                                </div><!-- tableborder close -->
                                                <div class="mb-3">
                                                    <label for="comment">Request Description</label>
                                                    <div class="input-group">
                                                        <textarea class="form-control" rows="3" name="comment" placeholder="<?php echo $row["comment"];?>" disabled></textarea>                                                           
                                                    </div>
                                                </div>                                
                                                <div class="col-md-12">
                                                    <div class="row">
                                                        <div class="col-6 mb-3"> 
                                                            <label for="requestby">Requsted By</label>
                                                            <input type="text" class="form-control" name="requestedby" placeholder="" disabled>
                                                        </div>
                                                        <div  class="col-4 mb-5">
                                                            <label for="status">Current Status</label>
                                                            <select class="custom-select">
                                                                <option <?php echo $result["status"] == 'Pending' ? 'selected' : '""'  ?> value ="Pending">Pending</option>
                                                                <option <?php echo $result["status"] == 'Declined' ? 'selected' : '""'  ?> value ="Declined">Declined</option>
                                                                <option <?php echo $result["status"] == 'Approved' ? 'selected' : '""'  ?> value ="Approved">Approved</option>
                                                                <option <?php echo $result["status"] == 'Queued' ? 'selected' : '""'  ?> value ="Queued">Queued</option>
                                                                <option <?php echo $result["status"] == 'Completed' ? 'selected' : '""'  ?> value ="Completed">Completed</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                   
                                   
                                        <div class="modal-footer">
                                            <button type="" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                            <button type="submit" class="btn btn-info" role="button">Update Status</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>  
                    </td> 
                    <?php
                    echo '</tr>';
                }
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
    
                var table = document.getElementById('qwe');
                
                for(var i = 1; i < table.rows.length; i++)
                {
                    table.rows[i].onclick = function()
                    {
                         //rIndex = this.rowIndex;
                         document.getElementById("division").value = this.cells[0].innerHTML;
                         document.getElementById("contact").value = this.cells[0].innerHTML;
                         document.getElementById("comment").value = this.cells[0].innerHTML;
                         document.getElementById("requestedby").value = this.cells[1].innerHTML;
          
                    };
                }
    
         </script>