<?php
session_start();

if(isset($_GET["ids"]))
{
	$idToDelete = $_GET["ids"];

	for($i = 0; $i < count($idToDelete); $i++)
	{
		include 'connect.inc';
		$query="DELETE FROM requestDatabase WHERE division = '$idToDelete[$i]'";
		$is_query_successful=mysql_query($query);
	}
}


?>

<!doctype html>
<html lang="en">
    <head>
        <title>
            ICTC | About
        </title>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    </head>
    <?php include "index.php";?>
    <body  class="container-fluid" style="color: white; background-color: #344e35">
    <div class="col-12 mb-3 p-5 tableBorder">
      <div class="row  text-center">
        <div class="col-4">
        <h4><i class="fa fa-rocket"></i> Elsewhere</h4>
          <i class="fa fa-facebook-f"></i> | <i class="fa fa-twitter"></i> | <i class="fa fa-instagram"></i> | <i class="fa fa-google"></i> <p>/neSsysDLSLU</p>
        </div>
        <div class="col-4">
          <h4 class="text-center"><i class="fa fa-exclamation"></i> About</h4>
            <p>
                NesSys is about achievements, experience and make our goal to provide efficient and fast response to the request of our clients come true. Expertise aside, the most important aspect for any of team members is that they fit with our company culture.
              We believe in providing exceptional service at a fair price because we focus our network support system from the point of view of our client. We believe that there is always room to 
              learn and advance, especially in the world of technology.
            </p>
        </div>
        <div class="col-4">
          <h4><i class="fa fa-phone"></i> Contact Us</h4>
          <p>0998-203-4034 | 0991-325-1161 <br/>(043) 741-7142 | (043) 741-2525 <br/> NesSySezpz@gmail.com</p>
          <p></p>
        </div>
      </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>
