<?php
	session_start();
    if(isset($_POST["submit"]))
    {
        include 'connect.inc';
		$query="INSERT INTO userdatabase (fname, lname, email, contact, Usertype, username, password) 
				VALUES('".$_POST["fname"]."','".$_POST["lname"]."','".$_POST["email"]."','".$_POST["contact"]."','".$_POST["Usertype"]."','".$_POST["username"]."','".$_POST["password"]."')";
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
            ICTC | Search Accountt
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
                <h4 class="mb-1">Search Account </h4>     
                <form method="GET" action="ViewSearch1.php" class="needs-validation" novalidate> 
                    <div class="row">
                        <div class="col-4 mb-1">
                            <label for="firstName">Please input the username of the account</label>
                            <input type="find" class="form-control" name="find" placeholder="Username of the Account" required>
                            <div class="invalid-feedback">
                                Valid Username is Required.
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-2 offset-md-1">
                            <button class="btn btn-primary btn-md btn-block" type="submit" name="submit">Search Account</button>
                        <div>
                        </div>
                    </div>
                </form>
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
