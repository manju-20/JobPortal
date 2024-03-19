<?php

//To Handle Session Variables on This Page
session_start();

//If user Not logged in then redirect them back to homepage. 
//This is required if user tries to manually enter dashboard.php in URL.
if(empty($_SESSION['id_user'])) {
	header("Location: ../index.php");
	exit();
}

//Including Database Connection From db.php file to avoid rewriting in all files
require_once("../db.php");
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
   <style>
    
    
    body{
      background-image: url('resumein.jpg');
      background-color: #cccccc; /* Used if the image is unavailable */
  height: 800px; /* You must set a specified height */
  background-position: center; /* Center the image */
  background-repeat: no-repeat; /* Do not repeat the image */
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
              <li><a href="profile.php"style="font-family: Gill Sans, Helvetica, sans-serif; font-size:1.3em; padding-right:25px; padding-top:23px; font-weight:500"
                >Profile</a></li>
              <li><a href="../logout.php"style="font-family: Gill Sans, Helvetica, sans-serif; font-size:1.3em; padding-right:25px; padding-top:23px; font-weight:500"
                >Logout</a></li>
            </ul>
          </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
      </nav>
    </header>

    <div class="container">      
      <div class="row">
        <h2 class="text-center" ><b>RESUME<b></h2>
        <br><br><br>
        <div style="padding-left: 468px;">
          <a href="generate-resume.php" class="btn btn-success" style="font-size: 210%;">Generate Resume</a>
        </div>
        <br><br><br><br><br>
        <div style="padding-left: 474px;">
          <a href="resume-upload.php" class="btn btn-success" style="font-size: 210%;">Upload Resume</a>
        </div>
        <?php
        //If resume is uploaded then show download link.
        $sql = "SELECT resume FROM users WHERE id_user='$_SESSION[id_user]' AND resume IS NOT NULL";
        $result = $conn->query($sql);
        if($result->num_rows > 0) {
          $row = $result->fetch_assoc();
          ?>
        <div class="col-md-2">
          <a href="../uploads/resume/<?php echo $row['resume']; ?>" class="btn btn-success" download="MyUploadedResume">Download Resume</a>
        </div>
        <?php }  ?>
      </div>
    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

  </body>
</html>