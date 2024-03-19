<?php
//To Handle Session Variables on This Page
session_start();

//If user is already logged in then redirect them back to dashboard. 
if (isset($_SESSION['id_user'])) {
  header("Location: user/dashboard.php");
  exit();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <title>Job Portal</title>

  <!-- Bootstrap -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<style type="text/css">
  body {
    background-image: url('compbg.jpg');
    background-repeat: no-repeat;
    background-size: cover;
  }
</style>

<body>

  <!-- NAVIGATION BAR -->
  <header>
    <nav class="navbar navbar-default">
      <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <img src="Images/logo1.png" alt="" style="width:70px; height:70px;  float:left;">
          <a class="navbar-brand" href="index.php" style="font-size:1.8em; font-family:ui-sans-serif; padding-top:26px;"> <span class="head" style="color:red; font-family: Georgia, serif; text-decoration:line-through; font-size:1.2em">JOB</span> PORTAL </a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav navbar-right">
            <?php
            //Show user dashboard link once logged in.
            //Todo: Check if Company logged in then show company dashboard? 
            if (isset($_SESSION['id_user'])) {
            ?>
              <li><a href="user/dashboard.php">Dashboard</a></li>
              <li><a href="logout.php" >Logout</a></li>
            <?php
            } else {
              //Show Login Links if no one is logged in.
            ?>
              <li><a href="company.php" style="font-family: Gill Sans, Helvetica, sans-serif; font-size:1.3em; 
              padding-right:25px; padding-top:23px; font-weight:500">Company</a></li>
              <li><a href="register.php" style="font-family: Gill Sans, Helvetica, sans-serif; font-size:1.3em; 
               padding-right:23px; padding-top:23px; font-weight:500">Register</a></li>
              <li><a href="login.php" style="font-family: Gill Sans, Helvetica, sans-serif; font-size:1.3em; 
              padding-right:25px; padding-top:23px; font-weight:500">Login</a></li>
            <?php } ?>
          </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>
  </header>

  <section>
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <div class="jumbotron text-center" style="background-image: url('Images/Group 3.png');background-repeat: no-repeat;background-size: cover; background-position:center; min-height:250px;">
            <!-- <span style="background-color: white;border-radius: 15px;font-size: 65px;color: black;opacity: 0.7">Job Portal</span>
            <p><b style="color: #ffffff; background-color:grey;border-radius:2%; opacity:0.8">Find Your Dream Job<b></p> -->
            <p><a class="btn btn-primary btn-lg" href="company-register.php" role="button" style="margin-top: 100px; background-color:#f48c06; font-family:serif; padding:8px 30px; font-size:1.2em; border:1px solid #f48c06; opacity:0.8;">Register</a></p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <br><br><br>
  <section>
    <div class="container" style="margin-top:-80px;">
      <div class="row">
        <div class="col-md-4 col-md-offset-4 well" style="background-color: black;color: white;">
          <h2 class="text-center" style="text-transform: uppercase; font-weight: 600;">Company</h2>
          <p class="text-center">Register to Company if new,if already registered login directly here</p>
          <div class="pull-left">
            <a href="company-register.php" class="btn btn-default"  style="font-size:1.2em; font-weight:600; font-family:sans-serif;  background-color:#ffd6a5; border:none; color:#118ab2;">Company Register</a>
          </div>
          <div class="pull-right">
            <a href="company-login.php" class="btn btn-default" style="font-size:1.3em; font-weight:600; font-family:sans-serif;  background-color:#ffd6a5; border:none; color:#118ab2; ">Company Login</a>
          </div>
        </div>
      </div>
    </div>
  </section>


  <!--------------------Footer---------------------->
  
    <!--------------------Footer---------------------->

  

  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>

</html>