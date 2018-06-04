<?php
    session_start();
    include 'connect.inc';
        if	(isset($_POST['UserID']))   
		{   
            $UserID = $_POST['UserID'];
            $fname = $_POST['fname'];
            $lname = $_POST['lname'];
            $email = $_POST['email'];
            $contact = $_POST['contact'];
            $Usertype = $_POST['Usertype']; 
            $username = $_POST['username'];
            $password = $_POST['password'];
            $query="UPDATE userdatabase SET fname = '$fname', lname = '$lname', email = '$email', contact = '$contact',
                    Usertype = '$Usertype', username = '$username', password ='$password' WHERE UserID = '$UserID'";
                    
            $is_query_successful=mysql_query($query);            
        }
?>

<!doctype html>
<html lang="en">
    <head>
        <title>
            ICTC | Manage Account
        </title>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    </head>
    <?php include "index.php";?>
    <body style="color: white; background-color: #344e35">
        <form id="formTbl" method="get">								
            <!--
                <button id="btnDelete" onclick="buttonDelete()">Delete Request/s</button>
            -->
            <table class="table table-hover" id="formtbl">
            <?php
                include('connect.inc');
                    echo '<tr>';
                    echo '<th> <a>First Name</a></th>';
                    echo '<th> <a>Last Name</a></th>';
                    echo '<th> <a>E-Mail</a></th>';
                    echo '<th> <a>Contact</a></th>';
                    echo '<th> <a>User Type</a></th>';
                    echo '<th> <a>Logged-in As</a></th>';
                    echo '<th> <a>Password</a></th>';
                    echo '<th> <a></a></th>';		
                    echo '</tr>';

                    $result = mysql_query("SELECT * FROM userdatabase")
                    or die(mysql_error());

                    while($row = mysql_fetch_array( $result )){
                        echo '<td>' . $row['fname'] . '</td>';
                        echo '<td>' . $row['lname'].'</td>';
                        echo '<td>' . $row['email']. '</td>';
                        echo '<td>' . $row['contact'] . '</td>';
                        echo '<td>' . $row['Usertype'] . '</td>';
                        echo '<td>' . $row['username'] . '</td>';
                        echo '<td>' . hash('crc32',$row['password']) . '</td>';
                    
                    ?>                
                <td>   
                <?php echo'<button type="button" class= "btn-sm btn" data-toggle="modal" data-target="#exampleModal' . $row['UserID'] . '">Manage Account</button>';?> 
                    <!-- Button trigger modal --> 
                    <div class="modal fade text-dark"  id="exampleModal<?php echo $row['UserID'];?>"  tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <?php $_SESSION['UserID']=$row['UserID']; ?>
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Manage Account</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <!-- Modal -->
                                    <div class="modal-body">
        </form>
                                        <form method="POST" action="ManageAccount.php">
                                        <input type="hidden" name="UserID" value="<?php echo $row["UserID"] ?>">
                                        <div class="tableBorder"><!-- tableborder open -->
                                            <div class="col">
                                                <div class="row">
                                                    <div class="col-6 mb-3">
                                                        <label for="fname">First Name</label>
                                                        <input type="text" class="form-control" name="fname"  value="<?php echo $row["fname"]?> " >
                                                    </div>
                                                    <div class="col-md-6 mb-3">                                                            
                                                    <label for="lname">Last Name</label>
                                                        <input type="text" class="form-control" name="lname" value="<?php echo $row["lname"]?>" >
                                                    </div>
                                                </div><!-- tableborder close -->
                                                <div class="row">
                                                    <div class="col-6 mb-3">
                                                        <label for="email">Email</label>
                                                        <input type="email" class="form-control" name="email"  value="<?php echo $row["email"]?>" >
                                                    </div>
                                                    <div class="col-md-6 mb-3">                                                            
                                                        <label for="contact">Contact Number</label>
                                                        <input type="text" class="form-control" name="contact" value="<?php echo $row["contact"]?>" >
                                                    </div>
                                                </div><!-- tableborder close -->
                                                <div class="row">
                                                    <div class="col-6 mb-3">
                                                        <label for="Usertype">Usertype</label>
                                                        <input type="text" class="form-control" name="Usertype"  value="<?php echo $row["Usertype"]?>" >
                                                    </div>
                                                </div><!-- tableborder close -->
                                                <div class="row">
                                                    <div class="col-6 mb-3">
                                                        <label for="username">Logged-in As</label>
                                                        <input type="text" class="form-control" name="username"  value="<?php echo $row["username"]?>" >
                                                    </div>
                                                    <div class="col-md-6 mb-3">                                                            
                                                        <label for="password">Password</label>
                                                        <input type="password" class="form-control" name="password" value="<?php echo $row["password"]?>" >
                                                    </div>
                                                </div><!-- tableborder close -->
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                            <button type="submit" class="btn btn-success" role="button">Update Account</button>
                                        </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                    </div>  
                    </td> 
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
