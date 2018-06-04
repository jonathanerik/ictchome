<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">
    <title>Blog Template for Bootstrap</title>
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- Custom styles for this template -->
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:700,900" rel="stylesheet">
    <link href="blog.css" rel="stylesheet">
  </head>
  <body style="color: white; background-color: #151815">
    <div class="container">
      <header class="blog-header py-3">
        <div class="row flex-nowrap justify-content-between align-items-center">
          <div class="col-4 pt-1">
            <a class="text-light" href="#">Main Menu</a>
          </div>
          <div class="col-4 pt-1 text-center">
          <img class="d-block mx-auto mb-1" src="https://acesdlsl.files.wordpress.com/2010/08/logo-green-copy.png" alt="" width="60" height="100">
            <a class="blog-header-logo text-light" href="#">ICTC ONLINE<br><h5>De La Salle Lipa<h5></a>
          </div>
          <div class="col-4 d-flex justify-content-end align-items-center">
            <a class="btn btn-sm btn-outline-secondary" href="logout.php"><?php echo $_SESSION['username']?></a>
          </div>
        </div>
      </header>
      <div class="nav-scroller py-1 mb-2">
        <nav class="nav d-flex justify-content-between">
          <a class="p-2 text-light" href="home.php">Home</a>
          <?php if ($_SESSION['Usertype']=="Requestor") : ?>
            <a class="p-2 text-light" href="request.php">Request</a>
          <?php endif; ?>
          <?php if ($_SESSION['Usertype']=="Requestor") : ?>
            <a class="p-2 text-light" href="status.php">Status</a>
          <?php endif; ?>
          <?php if ($_SESSION['Usertype']=="Superior" || $_SESSION['Usertype']=="ICTC" || $_SESSION['Usertype']=="Technician") : ?>
           <a class="p-2 text-light" href="ManageRequests.php">Manage Requests</a>
          <?php endif; ?>
          <?php if ($_SESSION['Usertype']=="Admin") : ?>
            <a class="p-2 text-light" href="ManageAccount.php">Manage Account</a>
          <?php endif; ?>
          <a class="p-2 text-light" href="transactions.php">Transactions</a>
          <a class="p-2 text-light" href="#">FAQs</a>
          <a class="p-2 text-light" href="#">About</a>
        </nav>
      </div>
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