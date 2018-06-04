<?php
    session_start();
    include 'connect.inc';
        if	(isset($_POST["id"]))
		{   
            $id = $_POST['id']; 
            $stat = $_POST['status'];
            $query="UPDATE requestdatabase SET status = '$stat'WHERE id = '$id'";
            if ($_SESSION['Usertype'] == 'ICTC'){
                $technician = $_POST['technician'];
                $query="UPDATE requestdatabase SET status = '$stat', note ='$note', technician = '$technician' WHERE id = '$id'";
            }
            $is_query_successful=mysql_query($query);            
        }
?>
<!doctype html>
<html lang="en">    
  <head>
    <title>
        ICTC | Manage Request
    </title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  </head>
  <?php include "index.php";?>
    <body style="color: white; background-color: #344e35">						
        <table class="table table-hover">
            <?php
                include('connect.inc');
                if ($_SESSION['Usertype']=="Requestor" || $_SESSION['Usertype']=="Superior"  || $_SESSION['Usertype']=="ICTC" || 
                    $_SESSION['Usertype']=="Technician" )
                {
                    echo '<tr>';
                    echo '<th> <a>RequestID</a></th>';
                    echo '<th> <a>Division</a></th>';
                    echo '<th> <a>Requestor</a></th>';
                    echo '<th> <a>Date Requested</a></th>';
                    echo '<th> <a>Contact</a></th>';
                    echo '<th> <a>Comment</a></th>';
                    echo '<th> <a>Progress</a></th>';	
                    echo '</tr>';

                    if($_SESSION['Usertype']=="Technician"){
                    $result = mysql_query("SELECT * FROM requestdatabase WHERE status='Approved' AND technician = '" . $_SESSION['username'] ."'")
                    or die(mysql_error()); 
                    }elseif($_SESSION['Usertype']=="ICTC"){
                    $result = mysql_query("SELECT * FROM requestdatabase WHERE status='Queued'")
                    or die(mysql_error()); 
                    }elseif($_SESSION['Usertype']=="Superior")
                    $result = mysql_query("SELECT * FROM requestdatabase WHERE status='Pending'")
                    or die(mysql_error()); 
                    }elseif($_SESSION['Usertype']=="Requestor"){
                    $result = mysql_query("SELECT * FROM requestdatabase WHERE username = '" . $_SESSION['username'] ."'" )
                    or die(mysql_error()); 
                    }


                    while($row = mysql_fetch_array( $result )){
                        echo '<td align="center">' . $row['id'] . '</td>';
                        echo '<td>' . $row['division'] . '</td>';
                        echo '<td>' . $row['requestedby'].'</td>';
                        echo '<td>' . $row['date']. '</td>';
                        echo '<td>' . $row['contact'] . '</td>';
                        echo '<td>' . $row['comment'] . '</td>';
            ?>                
            <td>        
                <?php 
                     if($row['status']=="Pending")
                     {   
                         echo '<button type="button" class="btn-sm btn-light" data-toggle="modal" data-target="#exampleModal' . $row['id'] . '" >';   
                     }elseif($row['status']=="Approved"){
                         echo '<button type="button" class="btn-sm btn-primary" data-toggle="modal" data-target="#exampleModal' . $row['id'] . '">';
                     }elseif($row['status']=="Declined"){
                         echo '<button type="button" class="btn-sm btn-danger" data-toggle="modal" data-target="#exampleModal' . $row['id'] . '">';  
                     }elseif($row['status']=="Queued"){
                         echo '<button type="button" class="btn-sm btn-info" data-toggle="modal" data-target="#exampleModal' . $row['id'] . '">'; 
                     }elseif($row['status']=="Completed"){
                         echo '<button type="button" class="btn-sm btn-success" data-toggle="modal" data-target="#exampleModal' . $row['id'] . '">';   
                     }elseif($row['status']=="Cancel"){
                         echo '<button type="button" class="btn-sm btn-warning" data-toggle="modal" data-target="#exampleModal' . $row['id'] . '">';   
                     }elseif($row['status']=="Done"){
                        echo '<button type="button" class="btn-sm btn-success" data-toggle="modal" data-target="#exampleModal' . $row['id'] . '">';   
                    }
                    elseif($row['status']=="Closed"){
                        echo '<button type="button" class="btn-sm btn-success" data-toggle="modal" data-target="#exampleModal' . $row['id'] . '">';   
                    }
                         echo $row['status'];
                         echo '</button>';
                ?>
                <!-- Button trigger modal --> 
                <div class="modal fade text-dark"  id="exampleModal<?php echo $row['id'];?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <?php $_SESSION['id']=$row['id']; ?>
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <?php
                                    if ($_SESSION['Usertype']=="Superior") : ?>
                                    <h5 class="modal-title" id="exampleModalLabel">Superior | Manage Request</h5>
                                    <?php endif; ?>
                                    <?php if ($_SESSION['Usertype']=="ICTC") : ?>
                                        <h5 class="modal-title" id="exampleModalLabel">ICTC | Manage Request</h5>
                                    <?php endif; ?>
                                    <?php if ($_SESSION['Usertype']=="Technician") : ?>
                                        <h5 class="modal-title" id="exampleModalLabel">Technician | Manage Request</h5>
                                    <?php endif; ?>
                                    
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                            </div>
                            <!-- Modal -->
                            <div class="modal-body">
                                <form method="POST" action="Status.php">
                                    <input type="hidden" name="id" value="<?php echo $row["id"] ?>">
                                    <input type="hidden" name="status" value="<?php echo $row["status"] ?>">
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
                                                <textarea class="form-control" rows="3" name="comment" disabled><?php echo $row["comment"]?></textarea>                                                           
                                            </div>
                                        </div>
                                    </div>                              
                                    <div class="col-md-12">
                                        <div class="row">
                                            <div class="col-6"> 
                                                <label for="requestby">Requsted By</label>
                                                <input type="text" class="form-control" name="requestedby" value="<?php echo $row["requestedby"]?>" disabled>
                                            </div>
                                            <div  class="col-6 mb-3">
                                                <?php if ($_SESSION['Usertype']=="Requestor") : ?>
                                                <label for="status">Current Status</label>
                                                    <?php 
                                                        if($row['status']=="Cancel"){
                                                            echo '<select class="custom-select" name="status" disabled>';
                                                            echo '<option value = ' . $row['status'] . '>' . $row['status'] . '</option>';
                                                        }elseif($row['status']=="Declined"){
                                                            echo '<select class="custom-select" disabled name="status">';
                                                            echo '<option value = ' . $row['status'] . '>' . $row['status'] . '</option>';
                                                        }elseif($row['status']=="Closed"){
                                                            echo '<select class="custom-select" name="status">';
                                                            echo '<option value = ' . $row['status'] . '>' . $row['status'] . '</option>';
                                                            echo '<option value = "Approved" > Approve and Close </option>';
                                                        }elseif($row['status']=="Approved"){
                                                            echo '<select class="custom-select" disabled name="status">';
                                                            echo '<option value = ' . $row['status'] . '>Approved and Closed</option>';
                                                            echo '<option value = "Approved" > Approved </option>';
                                                        }
                                                        else{
                                                            echo '<select class="custom-select" name="status">';
                                                            echo '<option value = ' . $row['status'] . '>' . $row['status'] . '</option>';
                                                            echo '<option value = "Cancel" > Cancel </option>';
                                                        }
                                                    ?>
                                                    </select>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <label for="note">Note</label>
                                            <div class="input-group">
                                                <textarea class="form-control" disabled rows="3"  name="note"><?php echo $row["note"]?></textarea>                                                           
                                            </div>
                                        </div>
                                        <div>
                                            <?php if ($_SESSION['Usertype']=="ICTC") : ?> <!--  needs to edit -->
                                            <label for="technician">Assign Technician ICTC</label>
                                                <select class="custom-select" name="technician">
                                                    <?php
                                                        $query = "SELECT * FROM userdatabase WHERE Usertype='technician'";
                                                        $results = mysql_query($query);
                                                        while ($rows = mysql_fetch_assoc(@$results))
                                                        { 
                                                    ?>
                                                    <option value="<?php echo $rows['username'];?>"><?php echo $rows['username'];?></option>
                                                    <?php
                                                        } 
                                                    ?>
                                                </select>
                                                <?php endif;?>
                                                <?php if ($_SESSION['Usertype']=="Technician") : ?>
                                                <label for="technician">Assign Technician TECH</label>
                                                    <input type="text" class="form-control" name="technician" value="<?php echo $_SESSION['username']; ?>" disabled>
                                                <?php endif;?>
                                        </div>
                                        <div hidden> <!--  needs to edit -->
                                            <?php if ($_SESSION['Usertype']=="Superior" || $_SESSION['Usertype']=="Admin") : ?>
                                            <label for="technician">Assign Technician</label>
                                                <select class="custom-select" name="technician">
                                                    <?php
                                                        $query = "SELECT * FROM userdatabase WHERE Usertype='Technician'";
                                                        $results = mysql_query($query);
                                                        while ($rows = mysql_fetch_assoc(@$results))
                                                        { 
                                                    ?>
                                                    <option value=""><?php echo $rows['username'];?></option>
                                                    <?php
                                                        } 
                                                    ?>                            
                                                </select>
                                            <?php endif;?>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                            <button type="submit"  class="btn btn-success" role="button">Update Request</button>
                                        </div>              
                                    </div>
                                </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    </div>  
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
