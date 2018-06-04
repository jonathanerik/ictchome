<?php

	session_start();
        if	(isset($_POST["id"]))
		{
                include 'connect.inc';
                $id = $_POST['id'];
                
                $stat = $_POST['status'];
                $query="UPDATE requestdatabase SET status = '$stat' WHERE id = '$id'";
                $is_query_successful=mysql_query($query);
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
            if ($_SESSION['Usertype']=="Requestor" || $_SESSION['Usertype']=="Superior"  || $_SESSION['Usertype']=="ICTC")
            {
                echo '<tr>';
                echo '<th> <a>Division</a></th>';
                echo '<th> <a>Requestor</a></th>';
                echo '<th> <a>Date Requested</a></th>';
                echo '<th> <a>Contact</a></th>';
                echo '<th> <a>Comment</a></th>';
                echo '<th> <a>Progress</a></th>';	
                echo '</tr>';

                if($_SESSION['Usertype']=="ICTC"){
                    $result = mysql_query("SELECT * FROM requestdatabase WHERE status='Queued'")
                    or die(mysql_error());
                    
                }
                else{
                    $result = mysql_query("SELECT * FROM requestdatabase")
                    or die(mysql_error());
                }
                while($row = mysql_fetch_array( $result )){
                    
                    echo '<td>' . $row['division'] . '</td>';
                    echo '<td>' . $row['requestedby'].'</td>';
                    echo '<td>' . $row['date'].'</td>';
                    echo '<td>' . $row['contact'] . '</td>';
                    echo '<td>' . $row['comment'] . '</td>';
                    ?>                
                    <td>

                    <?php if($row['status']=="Pending"){
                            echo '<button type="button" class="btn-sm btn" data-toggle="modal" data-target="#exampleModal' . $row['id'] . '">';   
                            echo $row['status'];
                            echo '</button>';
                        }elseif($row['status']=="Approved"){
                            echo '<button type="button" class="btn-sm btn-primary" data-toggle="modal" data-target="#exampleModal' . $row['id'] . '">';   
                            echo $row['status'];
                            echo '</button>';
                        }elseif($row['status']=="Declined"){
                            echo '<button type="button" class="btn-sm btn-warning" data-toggle="modal" data-target="#exampleModal' . $row['id'] . '">';   
                            echo $row['status'];
                            echo '</button>';
                        }elseif($row['status']=="Queued"){
                            echo '<button type="button" class="btn-sm btn-info" data-toggle="modal" data-target="#exampleModal' . $row['id'] . '">';   
                            echo $row['status'];
                            echo '</button>';
                        }elseif($row['status']=="Completed"){
                            echo '<button type="button" class="btn-sm btn-success" data-toggle="modal" data-target="#exampleModal' . $row['id'] . '">';   
                            echo $row['status'];
                            echo '</button>';
                        }
                        else
                    ?>
                        <!-- Button trigger modal --> 
                        <div class="modal fade"  id="exampleModal<?php echo $row['id'];?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <?php $_SESSION['id']=$row['id']; ?>
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Manage Request</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <!-- Modal -->
                                    <div class="modal-body">
                                    <form method="POST" action="ManageRequests.php">
                                    <input type="hidden" name="id" value="<?php echo $row["id"] ?>"
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
                                                        <input type="text" class="form-control" name="division"  value="<?php echo $row["division"]?>" disabled>
                                                    </div>
                                                    <div class="col-md-6 mb-3">                                                            
                                                    <label for="contact">Local / contact Number</label>
                                                        <input type="text" class="form-control" name="contact" value="<?php echo $row["contact"]?>" disabled>
                                                    </div>
                                                </div><!-- tableborder close -->
                                                <div class="mb-3">
                                                    <label for="comment">Request Description</label>
                                                    <div class="input-group">
                                                        <textarea class="form-control" rows="3" name="comment" value="<?php echo $row["comment"]?>" disabled ></textarea>                                                           
                                                    </div>
                                                </div>                               
                                                <div class="col-md-12">
                                                    <div class="row">
                                                        <div class="col-6"> 
                                                            <label for="requestby">Requsted By</label>
                                                            <input type="text" class="form-control" name="requestedby" value="<?php echo $row["requestedby"]?>" disabled>
                                                        </div>
                                                        <div  class="col-6">
                                                        <?php if ($_SESSION['Usertype']=="Superior") : ?>
                                                            <label for="status">Current Status</label>
                                                            <select class="custom-select" name="status">
                                                                <option <?php echo $row["status"] == 'Pending' ? 'selected' : '""'  ?> value ="Pending" >Pending</option>
                                                                <option <?php echo $row["status"] == 'Declined' ? 'selected' : '""'  ?> value ="Declined">Declined</option>
                                                                <option <?php echo $row["status"] == 'Queued' ? 'selected' : '""'  ?> value ="Queued">Queued</option>
                                                            </select>
                                                        <?php endif; ?>
                                                        <?php if ($_SESSION['Usertype']=="ICTC") : ?>
                                                            <label for="status">Current Status</label>
                                                            <select class="custom-select" name="status">
                                                                <option <?php echo $row["status"] == 'Declined' ? 'selected' : '""'  ?> value ="Declined">Declined</option>
                                                                <option <?php echo $row["status"] == 'Approved' ? 'selected' : '""'  ?> value ="Approved">Approved</option>
                                                                <option <?php echo $row["status"] == 'Queued' ? 'selected' : '""'  ?> value ="Queued">Queued</option>
                                                            </select>
                                                        <?php endif; ?>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                   
                                   
                                        <div class="modal-footer">
                                            <button type="" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                            <button type="submit" class="btn btn-success" role="button">Update Status</button>
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
