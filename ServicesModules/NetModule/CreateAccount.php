<?php
    session_start();
		if	(isset($_POST["submit"])){
			 include 'connect.inc';
				$query="INSERT INTO userdatabase (fname, lname, email, contact, Usertype, username, password) 
					VALUES('".$_POST["fname"]."','".$_POST["lname"]."','".$_POST["email"]."','".$_POST["contact"]."','".$_POST["Usertype"]."','".$_POST["username"]."','".$_POST["password"]."')";
				$is_query_successful=mysql_query($query);
				if($is_query_successful)  
				{
                    echo "<script type='text/javascript'>alert('Creating Account Success!');</script>";
				}
				else 
				{
					echo "<script type='text/javascript'>alert('Creating Account Failure!');</script>";
				}
    }
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>ICTC | Request</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
 
    <!-- Custom styles for this template -->
    <link href="style_request.css" rel="stylesheet">

  </head>
<?php include "index.php";?>
    <body style="color: white; background-color: #344e35">
        <div class="col-12 mb-3 tableBorder">
            <div class="col-12 p-2">
                <h4 class="mb-1">Create Account </h4>     
                <div class="row">
                    <h6 class="col-10 mb-2">Your Personal Information</h6> 
            </div>
            <form method="POST" action="CreateAccount.php" class="needs-validation" novalidate> 
                <div class="row"><!-- Personal Info -->
                    <div class="col-6 mb-3">
                        <label for="">First Name</label>
                        <input type="text" class="form-control" name="fname" placeholder="Input First Name" required>
                        <div class="invalid-feedback">
                            Valid First Name required
                        </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="">Last Name</label>
                        <input type="text" class="form-control" name="lname" placeholder="Input Last Name" value="" required>
                        <div class="invalid-feedback">
                            Valid Last Name Required
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-6 mb-3">
                        <label for="">Email Address</label>
                        <input type="email" class="form-control" name="email" placeholder="Input Email Address" required>
                        <div class="invalid-feedback">
                            Valid E-mail Address required
                        </div>
                    </div>
                    <div class="col-md-6 mb-5">
                        <label for="">Contact Number</label>
                        <input type="text" class="form-control" name="contact" placeholder="Input Contact Number" value="" required>
                        <div class="invalid-feedback">
                            Valid Contact Number Required
                        </div>
                    </div>
                </div>
                <div class="row"><!-- Account Info -->
                    <h6 class="col-10 mb-2">Your Account Information</h6> 
                </div>
                <div class="row">
                    <div class="col-6 mb-3">
                        <label for="">Select User type</label>
                        <select class="custom-select" name="Usertype">
                            <option value="Requestor">Requestor</option>
                            <option value="Superior">Superior</option>
                            <option value="ICTC">ICTC</option>
                            <option value="Technician">Technician</option>
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="">Username</label>
                        <input type="text" class="form-control" name="username" placeholder="Input Username" value="" required>
                        <div class="invalid-feedback">
                        Valid Username Required
                        </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="">Password</label>
                        <input type="password" class="form-control" name="password" placeholder="Input Password" value="" required>
                        <div class="invalid-feedback">
                        Valid Password Required
                        </div>
                    </div>
                </div>
                <hr class="col-mb-1">
                <button class="btn btn-primary btn-lg btn-block" type="submit" name="submit">Create Account</button>
            </form>
        </div>
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
