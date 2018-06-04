<?php
    session_start();
    include 'connect.inc';
        if	(isset($_POST['faqid']))   
		{   
            $faqid = $_POST['faqid'];
            $title = $_POST['title'];
            $description = $_POST['description'];
            $query="UPDATE faqdatabase SET title = '$title', description = '$description' WHERE faqid = '$faqid'";
            $is_query_successful=mysql_query($query);            
        }
?>

<!doctype html>
<html lang="en">
    <head>
        <title>
            ICTC | FaQ's
        </title>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    </head>
    <?php include "index.php";?>
    <body  class="container-fluid" style="color: white; background-color: #344e35">
        <form  class="col-md-12 column" id="formTbl" method="get">								
	        <!--
            <button id="btnDelete" onclick="buttonDelete()">Delete Request/s</button>
            -->
            <div class="row clearfix">
                <div class="col-md-12 col-12 column">
                    <table class="table table-hover" id="formtbl">
                        <?php
                            include('connect.inc');
                            $result = mysql_query("SELECT * FROM faqdatabase")
                            or die(mysql_error());
                            echo '<tr>';
                            echo '<th>Title</th>';
                            echo '<th>Description</th>';
                            echo '<th></th>';
                            echo '</tr>';
                            while($row = mysql_fetch_array( $result ))
                            {
                                echo '<tr>';
                                echo '<td>' . $row['title'] . '</td>';
                                echo '<td>' . $row['description'] . '</td>';
                        ?> 
                        <?php if ($_SESSION['Usertype']=="Admin"):?>
                        <td>
                        <?php echo'<button type="button" class= "btn-sm btn" data-toggle="modal" data-target="#exampleModal' . $row['faqid'] . '">Edit FAQ</button>';?> 
                            <!-- Button trigger modal --> 
                            <div class="modal fade text-dark"  id="exampleModal<?php echo $row['faqid'];?>"  tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <?php $_SESSION['faqid']=$row['faqid']; ?>
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Manage FAQs</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <!-- Modal --></form>
                                            <div class="modal-body">
                                                <form method="POST" action="FAQ.php">
                                                    <input type="hidden" name="faqid" value="<?php echo $row["faqid"] ?>">
                                                    <div class="tableBorder"><!-- tableborder open -->
                                                        <div class="col">
                                                            <div class="row">
                                                                <div class="col-6 mb-3">
                                                                    <label for="title">Title</label>
                                                                    <input type="text" class="form-control" name="title"  value="<?php echo $row["title"]?> " >
                                                                </div>
                                                            </div><!-- tableborder close -->
                                                            <div class="row">
                                                                <div class="col-12 mb-3">
                                                                    <label for="description">Description</label>
                                                                    <div class="input-group">
                                                                        <textarea class="form-control" rows="3" name="description" ><?php echo $row["description"]?></textarea>                                                           
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                                        <button type="submit" class="btn btn-success" role="button">Update FAQ</button>
                                                    </div>
                                                </form>
                                                
                                            </div>
                                        </div>
                                    </div>                                    
                            </div>
                            <?php endif;?>
                            <?php
                        
                                echo '</tr>';
                                }
                        ?>
                    </table>
                </div>
            </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>
