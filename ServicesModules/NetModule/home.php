<?php
session_start();
if (!isset ($_SESSION['username']) && !isset($_SESSION['password']))
{
  header('location:login.php');
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
    <title>Network Support | Home</title>
    
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
 
    <!-- Custom styles for this template -->
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:700,900" rel="stylesheet">
    <link href="style_home.css" rel="stylesheet">
  </head>
  <?php include "index.php";?>
  <body style="color: white; background-color: #344e35">
      <div class="jumbotron p-3 p-md-5 text-dark rounded" style="background-image: url('c.png'); background-attachment: fixed;";>
        <div class="col-md-6 px-0">
          <h1 class="display-4 text-dark font-italic">ICTC NeSSys: Network Service System</h1>
          <p class="lead my-3">Need a helping hand about networks? Network traffic? LAN Cables? No Internet Connection? We will fix that for you!</p>
        </div>
      </div>
 
      <div class="row mb-2 text-dark">
        <div class="col-md-6" >
          <div class="card flex-md-row mb-4 box-white h-md-250 alt="" style="background-image: url('c.png'); background-attachment: fixed;">

            <div class="card-body d-flex flex-column align-items-start">
              <h3 class="mb-0">
                <a class="text-dark" href="Request.php">Make a Request!</a>
              </h3>
              <div class="mb-1 text-muted"></div>
              <p class="card-text mb-auto">Feels like time lapsed in the medieval days because of the network connection? Just send a Report or a Request Now!</p>
              <a href="Request.php">Create Request...</a>
            </div>
            
          </div>
        </div>
        <div class="col-md-6 text-muted "  >
          <div class="card flex-md-row mb-4 box-shadow h-md-250"  style="background-image: url('c.png'); background-attachment: fixed;" >
            <div class="card-body d-flex flex-column align-items-start" >
       
              <h3 class="mb-0 text-dark">
                <a class="text-dark" href="Status.php">Check your Status!</a>
              </h3>
 
              <p class="card-text mb-auto">Frustrated waiting? Check the status of your requested form and be surprised how fast the process is!</p>
              <a href="Status.php">See My Forms...</a>
            </div>
            <img class="card-img-right flex-auto d-none d-md-block" data-src="holder.js/200x198?theme=thumb" >
          </div>
        </div>
      </div>

      <div class="row mb-2  text-muted">
        <div class="col-md-6">
          <div class="card flex-md-row mb-4 box-shadow h-md-250" style="background-image: url('c.png'); background-attachment: fixed;">
            <div class="card-body d-flex flex-column align-items-start">
         
              <h3 class="mb-0">
                <a class="text-dark" href="Transactions.php">View History!</a>
              </h3>
              <div class="mb-1 text-dark"></div>
              <p class="card-text mb-auto">Having extra time? Why not check some of the forms from the other requestors like you!</p>
              <a href="Transactions.php">See all the transactions</a>
            </div>
            <img class="card-img-right flex-auto d-none d-md-block" data-src="holder.js/200x198?theme=thumb">
          </div>
        </div>
        <div class="col-md-6  text-muted">
          <div class="card flex-md-row mb-4 box-shadow h-md-250"  style="background-image: url('c.png'); background-attachment: fixed;">
            <div class="card-body d-flex flex-column align-items-start">
              <h3 class="mb-0 ">
                <a class="text-dark" href="FaQ.php">Check FAQs!</a>
              </h3>
              <p class="card-text mb-auto">Out of time? Feels like you could fix it yourself? Check our FaQs for some guides for the amazing people like you!</p>
              <a href="FaQ.php">Continue reading</a>
            </div>
            <img class="card-img-right flex-auto d-none d-md-block" data-src="holder.js/200x198?theme=thumb">
          </div>
        </div>
      </div>
    </div>
    <main role="main" class="container">
      <div class="row">
        <div class="col-md-8 blog-main">
          <div class="blog-post">
            <h3 class="blog-post-title">Network Support Simplified</h3>
<!--        <p class="blog-post-meta">January 1, 2014 by <a href="#">Mark</a></p> -->

            <hr>
            <p>NesSys is trusted by the ICTC to provide workable solutions for network problem and provide swift responding network support. Our system provide a faster and easier way to your network needs. We provide a easy to understand FAQ, faster way to send network request, smoother and faster queue time, and status update. </p>

          </div><!-- /.blog-post -->
 
          <nav class="blog-pagination">
            <a class="btn btn-outline-primary" href="#">Older</a>
            <a class="btn btn-outline-secondary disabled" href="#">Newer</a>
          </nav>
 
        </div><!-- /.blog-main -->
 
        <aside class="col-md-4 blog-sidebar">
          <div class="p-3 mb-3">
            <h4 class="font-italic">About</h4>
            <p class="mb-0">NesSys is about achievements, experience and make our goal to provide efficient and fast response to the request of our clients come true.</p>
          </div>
 
          <div class="p-3">
            <h4 class="font-italic">Elsewhere</h4>
            <ol class="list-unstyled">
              <li><a href="https://www.facebook.com/neSsysDLSLU">Facebook</a></li>
              <li><a href="https://www.twitter.com/neSsysDLSLU">Twitter</a></li>
              <li><a href="https://www.Instagram.com/neSsysDLSLU">Instagram</a></li>
              <li><a href="https://www.google.com/neSsysDLSLU">Google</a></li>
            </ol>
          </div>
        </aside><!-- /.blog-sidebar -->
 
      </div><!-- /.row -->
 
    </main><!-- /.container -->
 
    <footer class="blog-footer" style="background-color: #21282E;">
      <p> <a href="https://www.facebook.com/neSsysDLSLU"><i class="fa fa-facebook-f"></i></a> | <a href="https://www.twitter.com/neSsysDLSLU"><i class="fa fa-twitter"></i></a> | <a href="https://www.instagram.com/neSsysDLSLU"><i class="fa fa-instagram"></i></a> | <a href="https://www.google.com/neSsysDLSLU"><i class="fa fa-google"></i></a></p>
      <p>
        <a href="#">Back to top</a>
      </p>
    </footer>
 
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src="https://getbootstrap.com/assets/js/vendor/holder.min.js"></script>
    <script>
      Holder.addTheme('thumb', {
        bg: '#55595c',
        fg: '#eceeef',
        text: 'Thumbnail'
      });
    </script>
  </body>
</html>