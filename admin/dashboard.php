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

  <style>
    #tblNodes {
      text-align: center;
      font-family: 'Times New Roman', Times, serif;
      font-size: 1.1em;
      font-weight: 600;
      margin: 26px 0px;
    }

    h3 {
      font-weight: 600;
      font-family: 'Times New Roman', Times, serif;
    }
  </style>
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
          <a class="navbar-brand" href="../index.php" style="font-size:1.8em; font-family:ui-sans-serif; padding-top:28px;"> <span class="head" style="color:red; font-family: Georgia, serif; text-decoration:line-through; font-size:1.2em">JOB</span> PORTAL </a>

        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="../logout.php" style="font-family: Gill Sans, Helvetica, sans-serif; font-size:1.5em; padding-right:30px; padding-top:25px; font-weight:500;">Logout</a></li>
          </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>
  </header>

  <div class="container-fluid">
    <div class="row">
      <div class="col-md-2">
        <div class="list-group">
          <a href="dashboard.php" class="list-group-item active" style="font-size: 1.3em; font-weight:500;">Dashboard</a>
          <a href="user.php" class="list-group-item" style="font-size: 1.3em; font-weight:500;">Users</a>
          <a href="company.php" class="list-group-item" style="font-size: 1.3em; font-weight:500;">Company</a>
          <a href="job-posts.php" class="list-group-item" style="font-size: 1.3em; font-weight:500;">Job Posts</a>
          <a href="http://localhost/intern_sys/admin/home.php" class="list-group-item" style="font-size: 1.3em; font-weight:500;">
            Internship Page</a>
        </div>
      </div>
      <div class="col-md-6">
        <?php
        $sql = "SELECT * FROM company WHERE active='2'";
        $result = $conn->query($sql);
        if (!$result->num_rows) {
          echo '<h3>Total Pending Company Accounts: 0 </h3>';
        }
        if ($result->num_rows > 0) {
          echo '<h3>Total Pending Company Accounts: ' . $result->num_rows . '</h3>';
        } ?>

        <table id="tblNodes" style="border: 3px solid black;width: 990px;">
          <thead style="border: 3px solid black;">
            <th style="border: 3px solid black;background-color: #9cd6d6;width:100px;text-align: center; padding:6px 50px;">SNo</th>
            <th style="border: 3px solid black;background-color: #9cd6d6;width:180px;text-align: center;  padding:6px 60px;">Company Name</th>
            <th style="border: 3px solid black;background-color: #9cd6d6;width:180px;text-align: center;  padding:6px 50px;">Head Office</th>
            <th style="border: 3px solid black;background-color: #9cd6d6;width:300px;text-align: center;  padding:6px 50px;">Contact Number</th>
            <th style="border: 3px solid black;background-color: #9cd6d6;width:180px;text-align: center;  padding:6px 50px;">Company Type</th>
            <th style="border: 3px solid black;background-color: #9cd6d6;width:180px;text-align: center;  padding:6px 20px;">Action</th>
          </thead>
          <tbody>
            <?php
            $sql = "SELECT * FROM company WHERE active='2'";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
              $i = 0;
              while ($row = $result->fetch_assoc()) {
            ?>

                <tr style="border: 3px solid black;">
                  <td style="border: 3px solid black;background-color: #9cd6d6;width:100px;text-align: center; padding:6px 50px;">SNo</td>
                  <td style="border: 3px solid black;background-color: #9cd6d6;width:180px;text-align: center;  padding:6px 60px;">Company Name</td>
                  <td style="border: 3px solid black;background-color: #9cd6d6;width:180px;text-align: center;  padding:6px 50px;">Head Office</td>
                  <td style="border: 3px solid black;background-color: #9cd6d6;width:300px;text-align: center;  padding:6px 50px;">Contact Number</td>
                  <td style="border: 3px solid black;background-color: #9cd6d6;width:180px;text-align: center;  padding:6px 50px;">Company Type</td>
                  <td style="border: 3px solid black;background-color: #9cd6d6;width:180px;text-align: center;  padding:6px 20px;">Action</td>
                </tr>

                <tr style="border: 3px solid black;">
                  <td style="border: 3px solid black; padding:8px 6px"><?php echo ++$i; ?></td>
                  <td style="border: 3px solid black; padding:8px 0px"><?php echo $row['companyname']; ?></td>
                  <td style="border: 3px solid black; padding:8px 0px"><?php echo $row['headofficecity']; ?></td>
                  <td style="border: 3px solid black; padding:8px 0px"><?php echo $row['contactno']; ?></td>
                  <td style="border: 3px solid black; padding:8px 0px"><?php echo $row['companytype']; ?></td>
                  <td style="border: 3px solid black; padding:8px -6px"><a href="reject-company.php?id=<?php echo $row['id_company']; ?>">Reject</a> <span style="color: black; font-weight:bold;">/</span> <a href="approve-company.php?id=<?php echo $row['id_company']; ?>">Approve</a></td>
                </tr>
            <?php
              }
            }
            ?>
          </tbody>
        </table>
      </div>
      <div class="col-md-6">
        <?php
        $sql = "SELECT * FROM users WHERE active='2'";
        $result = $conn->query($sql);
        if (!$result->num_rows) {
          echo '<h3>Total Pending User Accounts: 0 </h3>';
        }
        if ($result->num_rows > 0) {
          echo '<h3>Total Pending User Accounts: ' . $result->num_rows . '</h3>';
        }
        ?>
        <table id="tblNodes" style="border: 3px solid black;width: 990px;">
          <thead style="border: 3px solid black;">
            <th style="border: 3px solid black;background-color: #9cd6d6;width:100px;text-align: center;  padding:6px 50px;">SNo</th>
            <th style="border: 3px solid black;background-color: #9cd6d6;width:180px;text-align: center; padding:6px 50px;">First Name</th>
            <th style="border: 3px solid black;background-color: #9cd6d6;width:180px;text-align: center; padding:6px 50px;">Last Name</th>
            <th style="border: 3px solid black;background-color: #9cd6d6;width:300px;text-align: center; padding:6px 50px;">E-Mail</th>

            <th style="border: 3px solid black;background-color: #9cd6d6;width:180px;text-align: center; padding:6px 30px;">Action</th>
          </thead>
          <tbody>
            <?php
            $sql = "SELECT * FROM users WHERE active='2'";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
              $i = 0;
              while ($row = $result->fetch_assoc()) {
            ?>

                <tr style="border: 3px solid black">
                  <td style="border: 3px solid black;background-color: #9cd6d6;width:100px;text-align: center;  padding:6px 50px;">SNo</td>
                  <td style="border: 3px solid black;background-color: #9cd6d6;width:180px;text-align: center; padding:6px 50px;">First Name</td>
                  <td style="border: 3px solid black;background-color: #9cd6d6;width:180px;text-align: center; padding:6px 50px;">Last Name</td>
                  <td style="border: 3px solid black;background-color: #9cd6d6;width:300px;text-align: center; padding:6px 50px;">E-Mail</td>

                  <td style="border: 3px solid black;background-color: #9cd6d6;width:180px;text-align: center; padding:6px 30px;">Action</td>
                </tr>

                <tr style="border: 3px solid black">
                  <td style="border: 3px solid black; padding:8px 5px"><?php echo ++$i; ?></td>
                  <td style="border: 3px solid black; padding:8px 0px"><?php echo $row['firstname']; ?></td>
                  <td style="border: 3px solid black; padding:8px 5px"><?php echo $row['lastname']; ?></td>
                  <td style="border: 3px solid black; padding:8px 0px"><?php echo $row['email']; ?></td>

                  <td style="border: 3px solid black; padding:8px 0px"><a href="reject-user.php?id=<?php echo $row['id_user']; ?>">Reject</a> <span style="color: black; font-weight:bold;">/</span> <a href="approve-user.php?id=<?php echo $row['id_user']; ?>">Approve</a></td>
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
  <!-- <div style="float: right;">
    <img src="../Images/confirm.png" alt="" width="350" height="300">
    <img src="../Images/confirm1.png" alt="" width="550" height="300">
  </div> -->


  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  </script>

  <script>
    $('#tblNodes tr').each(function() {
      $td = $(this).find('td');
      if ($td.text() == '') {
        $(this).hide();
      }
    });
  </script>


</body>



</html>