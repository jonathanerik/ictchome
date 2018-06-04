<?php
    session_start();
		if	(isset($_POST["submit"])){
			 include 'connect.inc';
				$query="INSERT INTO requestdatabase (division, contact, comment, requestedby, username, status, note, technician) 
					VALUES('$_POST[division]','$_POST[contact]','$_POST[comment]','$_POST[requestedby]','$_SESSION[username]','Pending','','')";
				$is_query_successful=mysql_query($query);
				if($is_query_successful)  
				{
          echo "<script type='text/javascript'>alert('Submititng a request Success!');</script>";
        }
        else 
        {
          echo "<script type='text/javascript'>alert('Submitting a request Failed!');</script>";
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
        <h4 class="mb-1">Network Service Request Form </h4>     
        <div class="row">
          <h6 class="col-10 mb-4">FORM ICT - 0010 - INTv1. 00s2015</h6>   
          <?php
            echo "" . date("M/d/y") . "<br>";
          ?>                
        </div>
        <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" class="needs-validation" novalidate> 
          <div class="row">
            <div class="col-6 mb-3">
              <label for="firstName">Request for</label>
              <input type="text" class="form-control" name="division" placeholder="Division / Department" required>
              <div class="invalid-feedback">
                Valid Division / Department is required.
              </div>
            </div>
            <div class="col-md-6 mb-3">
              <label for="lastName">Local / contact Number</label>
              <input type="text" class="form-control" name="contact" placeholder="" value="" required>
              <div class="invalid-feedback">
                Valid Local / contact Number is required.
              </div>
            </div>
          </div>
          <div class="mb-3">
            <label for="comment">Request Description</label>
            <div class="input-group">
              <textarea class="form-control" rows="5" name="comment" placeholder="Please describe as completely as possible" required></textarea>
              <div class="invalid-feedback" style="width: 100%;">
                Your Request Description is required.
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="row">
              <label for="lastName">Requsted By</label>
              <input type="text" class="form-control" name="requestedby" placeholder="" value="" required>
              <div class="invalid-feedback">
                Valid Requestor Name is required.
              </div>
            </div>
          </div>
          <hr class="col-mb-1">
          <button class="btn btn-primary btn-lg btn-block" type="submit" name="submit">Submit Form</button>
        </form>
        </div>
      </div>
  </div>
      <footer class="blog-footer" style="background-color: #21282E;">
        <p> <a href="https://www.facebook.com/neSsysDLSLU"><i class="fa fa-facebook-f"></i></a> | <a href="https://www.twitter.com/neSsysDLSLU"><i class="fa fa-twitter"></i></a> | <a href="https://www.instagram.com/neSsysDLSLU"><i class="fa fa-instagram"></i></a> | <a href="https://www.google.com/neSsysDLSLU"><i class="fa fa-google"></i></a></p>
        <p>
          <a href="#">Back to top</a>
        </p>
      </footer>
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
