<?php
session_start();
if(isset($_GET["find"]))
{
	$find = $_GET["find"];
	include 'connect.inc';
	$result = mysql_fetch_array(mysql_query("SELECT * FROM userdatabase WHERE username='$find'"));
}
?>

<!doctype html>
<html lang="en">
    <head>
        <title>
            ICTC | Search Account
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
                    <div class="row">
                        <div class="col-4 mb-1">
                            <label for="username">Please input the username of the account</label>
                            <input type="find" class="form-control" name="find" value="<?php echo $result["username"] ?>" required>
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

                                                <input 
													type="text" 
													name="fname" 
													placeholder="" 
													required="true"
													pattern="[0-9]{5}"
													title="Product Number should contain 5 integers. e.g. 14373"
													style="width: 320px; height: 35px; padding-left: 8px; font-weight: normal; "
													value="<?php echo $result["fname"] ?>"
												/>


                                                <input 
													type="text" 
													name="lname" 
													placeholder="" 
													required="true"
													pattern="[0-9]{5}"
													title="Product Number should contain 5 integers. e.g. 14373"
													style="width: 320px; height: 35px; padding-left: 8px; font-weight: normal; "
													value="<?php echo $result["lname"] ?>"
												/>


                                                <input 
													type="text" 
													name="email" 
													placeholder="" 
													required="true"
													pattern="[0-9]{5}"
													title="Product Number should contain 5 integers. e.g. 14373"
													style="width: 320px; height: 35px; padding-left: 8px; font-weight: normal; "
													value="<?php echo $result["email"] ?>"
												/>


                                                <input 
													type="text" 
													name="contact" 
													placeholder="" 
													required="true"
													pattern="[0-9]{5}"
													title="Product Number should contain 5 integers. e.g. 14373"
													style="width: 320px; height: 35px; padding-left: 8px; font-weight: normal; "
													value="<?php echo $result["contact"] ?>"
												/>


                                                <input 
													type="text" 
													name="Usertype" 
													placeholder="" 
													required="true"
													pattern="[0-9]{5}"
													title="Product Number should contain 5 integers. e.g. 14373"
													style="width: 320px; height: 35px; padding-left: 8px; font-weight: normal; "
													value="<?php echo $result["Usertype"] ?>"
												/>


                                                <input 
													type="text" 
													name="username" 
													placeholder="" 
													required="true"
													pattern="[0-9]{5}"
													title="Product Number should contain 5 integers. e.g. 14373"
													style="width: 320px; height: 35px; padding-left: 8px; font-weight: normal; "
													value="<?php echo $result["username"] ?>"
												/>


                                                <input 
													type="text" 
													name="password" 
													placeholder="" 
													required="true"
													pattern="[0-9]{5}"
													title="Product Number should contain 5 integers. e.g. 14373"
													style="width: 320px; height: 35px; padding-left: 8px; font-weight: normal; "
													value="<?php echo $result["password"] ?>"
												/>







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
