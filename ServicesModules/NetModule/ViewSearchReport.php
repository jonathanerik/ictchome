<?php
session_start();
if(isset($_GET["find"]))
{
	$find = $_GET["find"];
	include 'connect.inc';
	$result = mysql_fetch_array(mysql_query("SELECT * FROM requestdatabase WHERE id='$find'"));
}
?>


<!doctype html>
<html lang="en">
    <head>
        <title>
            ICTC | Search Request
        </title>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    </head>
    <?php include "index.php";?>
    <body  class="container-fluid" style="color: white; background-color: #344e35">
        <div class="col-12 mb-3 tableBorder">
            <div class="col-12 p-2">
                <h4 class="mb-1">Search a Request </h4> 
                <form method="GET" action="ViewSearchReport.php" class="needs-validation" novalidate>     
                    <div class="row">
                        <div class="col-4 mb-1">
                            <label for="id">Please input the Request ID</label>
                            <input type="find" class="form-control" name="id" value="<?php echo $result["id"] ?>" required>
                            <div class="invalid-feedback">
                                Valid Request ID is Required.
                            </div>
                        <div class="col-md-6 p-2 offset-md-3">
                            <button class="btn btn-primary btn-md btn-block" type="submit" name="submit">Search Request</button>
                        </div>
                    </div>
                </form>
                <div class="col">
                    <div class="row">
                        <div class="col-6 mb-3">
                            <label for="division">Division</label>
                            <input type="text" class="form-control" name="division"  value="<?php echo $result["division"]?> " >
                        </div>
                    <div class="col-md-6 mb-3">                                                            
                        <label for="contact">Contact</label>
                        <input type="text" class="form-control" name="contact" value="<?php echo $result["contact"]?>" >
                    </div>
                </div><!-- tableborder close -->
                <div class="row">
                    <div class="col-6 mb-3">
                        <label for="date">Date</label>
                        <input type="email" class="form-control" name="date"  value="<?php echo $result["date"]?>" >
                    </div>
                <div class="col-md-6 mb-3">                                                            
                    <label for="comment">Comment</label>
                    <input type="text" class="form-control" name="comment" value="<?php echo $result["comment"]?>" >
                </div>
            </div><!-- tableborder close -->
            <div class="row">
                <div class="col-6 mb-3">
                    <label for="requestedby">Requested By</label>
                    <input type="text" class="form-control" name="requestedby"  value="<?php echo $result["requestedby"]?>" >
                </div>
            <div class="col-md-6 mb-3">                                                            
                <label for="username">Logged-in as</label>
                <input type="text" class="form-control" name="username" value="<?php echo $result["username"]?>" >
            </div>
            <div class="col-md-6 mb-3">                                                            
                <label for="status">Status</label>
                <input type="text" class="form-control" name="status" value="<?php echo $result["status"]?>" >
            </div>
            <div class="col-md-6 mb-3">                                                            
                <label for="note">Note</label>
                <input type="text" class="form-control" name="note" value="<?php echo $result["note"]?>" >
            </div>
            <div class="col-md-6 mb-3">                                                            
                <label for="technician">Technician</label>
                <input type="text" class="form-control" name="technician" value="<?php echo $result["technician"]?>" >
            </div>
        </div>               
        
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="../../../../assets/js/vendor/popper.min.js"></script>
    <script src="../../../../dist/js/bootstrap.min.js"></script>
    <script src="../../../../assets/js/vendor/holder.min.js"></script>
    <script>
      // Example starter JavaScript for disabling form submissions if there are invalid fields
      (function() {
        'use strict';

        window.addEventListener('load', function() {
          // Fetch all the forms we want to apply custom Bootstrap validation styles to
          var forms = document.getElementsByClassName('needs-validation');

          // Loop over them and prevent submission
          var validation = Array.prototype.filter.call(forms, function(form) {
            form.addEventListener('submit', function(event) {
              if (form.checkValidity() === false) {
                event.preventDefault();
                event.stopPropagation();
              }
              form.classList.add('was-validated');
            }, false);
          });
        }, false);
      })();
    </script>
    </body>
</html>
