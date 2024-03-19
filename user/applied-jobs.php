<?php

//To Handle Session Variables on This Page
session_start();

//If user Not logged in then redirect them back to homepage. 
//This is required if user tries to manually enter applied-jobs.php in URL.
if(empty($_SESSION['id_user']) || isset($_SESSION['companyLogged'])) {
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
    
    tr:nth-child(even){background-color: #c1c1c1;}
    tr:nth-child(odd){background-color: white;}
    tr:hover {background-color: #ddd;}
    body{
      background-image: url('applyjob.png');
      background-color: #cccccc; /* Used if the image is unavailable */
  height: 1500px; /* You must set a specified height */
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

          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">     
            <ul class="nav navbar-nav navbar-right">
              <li><a href="profile.php" style="font-family: Gill Sans, Helvetica, sans-serif; font-size:1.3em; padding-right:25px; padding-top:23px; font-weight:500"
              >Profile</a></li>
              <li><a href="../logout.php" style="font-family: Gill Sans, Helvetica, sans-serif; font-size:1.3em; padding-right:25px; padding-top:23px; font-weight:500"
              >Logout</a></li>
            </ul>
          </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
      </nav>
    </header>

    <div class="container">

      
      <!-- All Job Posts that we applied to. -->
      <div class="row">
        <div class="col-md-12">
          
            <h2 class="text-center">Applied Jobs</h2>
            <table class="table table-striped" style="border: 3px solid black;width: 1300px;">
              <thead style="border: 3px solid black;">
                <th style="border: 3px solid black;background-color: #9cd6d6;width:100px;text-align: center;">Job Name</th>
                <th style="border: 3px solid black;background-color: #9cd6d6;width:100px;text-align: center;">Job Description</th>
                <th style="border: 3px solid black;background-color: #9cd6d6;width:100px;text-align: center;">Minimum Salary</th>
                <th style="border: 3px solid black;background-color: #9cd6d6;width:100px;text-align: center;">Maximum Salary</th>
                <th style="border: 3px solid black;background-color: #9cd6d6;width:100px;text-align: center;">Experience</th>
                <th style="border: 3px solid black;background-color: #9cd6d6;width:100px;text-align: center;">Qualification</th>
                <th style="border: 3px solid black;background-color: #9cd6d6;width:100px;text-align: center;">Created At</th>
              </thead>
              <tbody>
                <?php
                //Sql Query for showing all applied job posts. 
                //
                //So basically - Select all *job post id* from *apply_job_post table* that match with *job_post table* where user matches currect logged in user in *apply_job post table*.
                  $sql = "SELECT * FROM job_post INNER JOIN apply_job_post ON job_post.id_jobpost=apply_job_post.id_jobpost WHERE apply_job_post.id_user='$_SESSION[id_user]'";
                  $result = $conn->query($sql);

                  //If user applied to job then display that post information.
                  if($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) 
                    {                     
                      
                     ?>
                      <tr style="border:1px solid black;">
                        <td style="border:1px solid black;"><?php echo $row['jobtitle']; ?></td>
                        <td style="border:1px solid black;"><?php echo $row['description']; ?></td>
                        <td style="border:1px solid black;"><?php echo $row['minimumsalary']; ?></td>
                        <td style="border:1px solid black;"><?php echo $row['maximumsalary']; ?></td>
                        <td style="border:1px solid black;"><?php echo $row['experience']; ?></td>
                        <td style="border:1px solid black;"><?php echo $row['qualification']; ?></td>
                        <td style="border:1px solid black;"><?php echo date("d-M-Y", strtotime($row['createdat'])); ?></td>                                              
                      </tr>
                     <?php
                    }
                  }
                  $conn->close();
                ?>
              </tbody>
            </table>
         
        </div>
      </div>
    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  </body>
</html>