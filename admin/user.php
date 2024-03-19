<?php

//To Handle Session Variables on This Page
session_start();

//If user Not logged in then redirect them back to homepage. 
//This is required if user tries to manually enter dashboard.php in URL.
if (empty($_SESSION['id_admin'])) {
  header("Location: index.php");
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
  tr:nth-child(even) {
    background-color: #c1c1c1;
  }

  tr:nth-child(odd) {
    background-color: white;
  }

  tr:hover {
    background-color: #ddd;
  }

  body {
    background-image: url('jobpostbg.png');
    background-color: #cccccc;
    /* Used if the image is unavailable */
    height: 500px;
    /* You must set a specified height */
    background-position: center;
    /* Center the image */
    background-repeat: no-repeat;
    /* Do not repeat the image */
    background-size: cover;
    width: 100%;
    height: 1080px;

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
          <img src="../Images/logo1.png" alt="" style="width:70px; height:70px;  float:left;">
          <a class="navbar-brand" href="index.php" style="font-size:1.8em; font-family:ui-sans-serif; padding-top:28px;"> <span class="head" style="color:red; font-family: Georgia, serif; text-decoration:line-through; font-size:1.2em">JOB</span> PORTAL </a>

        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="../logout.php" style="font-family: Gill Sans, Helvetica, sans-serif; font-size:1.3em; padding-right:30px; padding-top:30px; font-weight:500;">Logout</a></li>
          </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>
  </header>

  <div class="container-fluid">
    <div class="row">
      <div class="col-md-2">
        <div class="list-group">
          <a href="dashboard.php" class="list-group-item" style="font-size: 1.3em; font-weight:500;">Dashboard</a>
          <a href="user.php" class="list-group-item  active" style="font-size: 1.3em; font-weight:500;">Users</a>
          <a href="company.php" class="list-group-item" style="font-size: 1.3em; font-weight:500;">Company</a>
          <a href="job-posts.php" class="list-group-item" style="font-size: 1.3em; font-weight:500;">Job Posts</a>
          <a href="http://localhost/intern_sys/admin/home.php" class="list-group-item" style="font-size: 1.3em; font-weight:500;">
            Internship Page</a>
        </div>
      </div>
      <div class="col-md-6">
        <?php
        $sql = "SELECT * FROM users";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
          echo '<h3>Total Users: ' . $result->num_rows . '</h3>';
        }
        ?>
        <table class="table" style="border: 3px solid black;width: 995px;">
          <thead style="border: 3px solid black;">
            <th style="border: 3px solid black;background-color: #9cd6d6;width:100px;text-align: center; padding:10px 50px;">SNo</th>
            <th style="border: 3px solid black;background-color: #9cd6d6;width:100px;text-align: center; padding:10px 50px;">FirstName</th>
            <th style="border: 3px solid black;background-color: #9cd6d6;width:100px;text-align: center; padding:10px 50px;">LastName</th>
            <th style="border: 3px solid black;background-color: #9cd6d6;width:100px;text-align: center; padding:10px 50px;">Email</th>
            <th style="border: 3px solid black;background-color: #9cd6d6;width:100px;text-align: center; padding:10px 50px;">Address</th>
            <th style="border: 3px solid black;background-color: #9cd6d6;width:100px;text-align: center;  padding:10px 50px;">Action</th>
          </thead>
          <tbody>
            <?php
            $sql = "SELECT * FROM users";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
              $i = 0;
              while ($row = $result->fetch_assoc()) {
            ?>
                <tr style="border: 3px solid black">
                  <td style="border: 3px solid black"><?php echo ++$i; ?></td>
                  <td style="border: 3px solid black"><?php echo $row['firstname']; ?></td>
                  <td style="border: 3px solid black"><?php echo $row['lastname']; ?></td>
                  <td style="border: 3px solid black"><?php echo $row['email']; ?></td>
                  <td style="border: 3px solid black"><?php echo $row['address']; ?></td>
                  <td style="border: 3px solid black"><a href="delete-user.php?id=<?php echo $row['id_user']; ?>">Delete</a></td>
                </tr>
            <?php
              }
            }
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