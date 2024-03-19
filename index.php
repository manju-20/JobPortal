<?php
//To Handle Session Variables on This Page
session_start();
//Including Database Connection From db.php file to avoid rewriting in all files
require_once("db.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <title>Job Portal</title>
  <link rel="stylesheet" href="style1.css">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@500&display=swap" rel="stylesheet">

  <script src="https://kit.fontawesome.com/3942094a32.js" crossorigin="anonymous"></script>

  <!-- Bootstrap -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">

  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  <style>
  @import url('https://fonts.googleapis.com/css2?family=Raleway:wght@500&display=swap');
    span .head {
      color: red;
    }


    /* dropdown Start */

    .dropdown ul{
      border:2px solid #48cae4;
      border-radius: 5px;
    }


  .navbar-nav li:hover > ul.dropdown-menu {
    display: block;
}
.dropdown-submenu {
  position:relative;
}
.dropdown-submenu>.dropdown-menu {
  top: 0;
  left: 100%;
  margin-top:-6px;
}

/* rotate caret on hover */
.dropdown-menu > li > a:hover:after {
  text-decoration: underline;
  transform: rotate(-90deg);
} 


    /* queries */
    @import url('https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,500;1,400&display=swap');

    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: 'Poppins', sans-serif;
    }

    ::selection {
      color: #fff;
      background: #007bff;
    }

    ::-webkit-scrollbar {
      width: 3px;
      border-radius: 25px;
    }

    ::-webkit-scrollbar-track {
      background: #f1f1f1;
    }

    ::-webkit-scrollbar-thumb {
      background: #ddd;
    }

    ::-webkit-scrollbar-thumb:hover {
      background: #ccc;
    }

    body .message {
      overflow: hidden;
    }

    #click {
      display: none;
    }



    label {
      position: fixed;
      right: 25px;
      bottom: 13px;
      height: 45px;
      width: 45px;
      background: -webkit-linear-gradient(left, #a445b2, #fa4299);
      border-radius: 50px;
      text-align: center;
      line-height: 55px;
      font-size: 30px;
      color: #fff;
      cursor: pointer;
    }

    label i {
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      transition: all 0.4s ease;
    }

    label i.fas {
      opacity: 0;
      pointer-events: none;
    }

    #click:checked~label i.fas {
      opacity: 1;
      pointer-events: auto;
      transform: translate(-50%, -50%) rotate(180deg);
    }


    #click:checked~label i.fab {
      opacity: 0;
      pointer-events: none;
      transform: translate(-50%, -50%) rotate(180deg);
    }

    .rapper {
      position: fixed;
      right: 30px;
      bottom: 5px;
      max-width: 330px;
      background: #fff;
      border-radius: 5px;
      border: 1px solid lightgrey;
      border-top: 0px;
      opacity: 0;
      pointer-events: none;
      box-shadow: 0px 15px 20px rgba(0, 0, 0, 0.1);
      transition: all 0.6s cubic-bezier(0.68, -0.55, 0.265, 1.55);
      z-index: 4;
    }

    #click:checked~.rapper {
      opacity: 1;
      bottom: 85px;
      pointer-events: auto;
    }

    .rapper .title {
      background: #007bff;
      color: #fff;
      font-size: 24px;
      font-weight: 600;
      line-height: 60px;
      text-align: center;
      border-bottom: 1px solid #006fe6;
      border-radius: 5px 5px 0 0;
    }

    .rapper .form {
      padding: 20px 15px;
      min-height: 300px;
      max-height: 300px;
      overflow-y: auto;
    }

    .rapper .form .inbox {
      width: 100%;
      display: flex;
      align-items: baseline;
    }

    .rapper .form .user-inbox {
      justify-content: flex-end;
      margin: 13px 0;
    }

    .rapper .form .inbox .icon {
      height: 40px;
      width: 40px;
      color: #fff;
      text-align: center;
      line-height: 40px;
      border-radius: 50%;
      font-size: 18px;
      background: #007bff;
    }

    .rapper .form .inbox .msg-header {
      max-width: 53%;
      margin-left: 10px;
    }

    .form .inbox .msg-header p {
      color: #fff;
      background: #007bff;
      border-radius: 10px;
      padding: 8px 10px;
      font-size: 13px;
      word-break: break-all;
    }

    .form .user-inbox .msg-header p {
      color: #333;
      background: #efefef;
    }

    .rapper .typing-field {
      display: flex;
      height: 60px;
      width: 100%;
      align-items: center;
      justify-content: space-evenly;
      background: #efefef;
      border-top: 1px solid #d9d9d9;
      border-radius: 0 0 5px 5px;
    }

    .rapper .typing-field .input-data {
      height: 40px;
      width: 335px;
      position: relative;
    }

    .rapper .typing-field .input-data input {
      height: 100%;
      width: 100%;
      outline: none;
      border: 1px solid transparent;
      padding: 0 80px 0 15px;
      border-radius: 3px;
      font-size: 15px;
      background: #fff;
      transition: all 0.3s ease;
    }

    .typing-field .input-data input:focus {
      border-color: rgba(0, 123, 255, 0.8);
    }

    .input-data input::placeholder {
      color: #999999;
      transition: all 0.3s ease;
    }

    .input-data input:focus::placeholder {
      color: #bfbfbf;
    }

    .rapper .typing-field .input-data button {
      position: absolute;
      right: 5px;
      top: 50%;
      height: 30px;
      width: 65px;
      color: #fff;
      font-size: 16px;
      cursor: pointer;
      outline: none;
      opacity: 0;
      pointer-events: none;
      border-radius: 3px;
      background: #007bff;
      border: 1px solid #007bff;
      transform: translateY(-50%);
      transition: all 0.3s ease;
    }

    .rapper .typing-field .input-data input:valid~button {
      opacity: 1;
      pointer-events: auto;
    }

    .typing-field .input-data button:hover {
      background: #006fef;
    }

    /* Counter-Up */

    .counter-up {
      background: url("searchbg.jfif") no-repeat;
      min-height: 40vh;
      background-size: cover;
      background-attachment: fixed;
      padding: 0 40px;
      position: relative;
      display: flex;
      align-items: center;
      margin-top: -20px;
      width: 97%;
      margin: auto;
      z-index: -1;
    }

    .counter-up::before {
      position: absolute;
      content: "";
      top: 0;
      left: 0;
      height: 100%;
      width: 100%;
      background: rgba(0, 0, 0, 0.8);
    }

    .counter-up .content {
      z-index: 1;
      position: relative;
      display: flex;
      width: 100%;
      height: 100%;
      flex-wrap: wrap;
      align-items: center;
      justify-content: space-between;
    }

    .counter-up .content .box {
      border: 1px dashed rgba(255, 255, 255, 0.6);
      width: calc(25% - 30px);
      border-radius: 5px;
      display: flex;
      align-items: center;
      justify-content: space-evenly;
      flex-direction: column;
      padding: 16px;
    }

    .content .box .icon {
      font-size: 48px;
      color: #e6e6e6;
    }

    .content .box .counter {
      font-size: 50px;
      font-weight: 500;
      color: #f2f2f2;
      font-family: sans-serif;
    }

    .content .box .text {
      font-weight: 500;
      font-size: 1.4em;
      color: #ccc;
    }

    @media screen and (max-width: 1036px) {
      .counter-up {
        padding: 50px 50px 0 50px;
      }

      .counter-up .content .box {
        width: calc(50% - 30px);
        margin-bottom: 50px;
      }
    }

    @media screen and (max-width: 580px) {
      .counter-up .content .box {
        width: 100%;
      }
    }

    @media screen and (max-width: 500px) {
      .wrapper {
        padding: 20px;
      }

      .counter-up {
        padding: 30px 20px 0 20px;
      }
    }

  </style>

</head>

<!-- NAVIGATION BAR -->

<body style="background-image: url('bg4.jpg'); background-size: cover; overflow-x: hidden;">
  <!--------------------Head---------------------->
  <?php include 'back to top.php' ?>
  <!--------------------Head---------------------->
  <header>
    <nav class="navbar navbar-default" style="border-bottom: 2px solid #6c757d;">
      <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>

          <img src="Images/logo1.png" alt="" style="width:80px; height:80px; float:left;">
          <a href="index.php" style="font-size:2em; font-family:ui-sans-serif; padding-top:17px; text-decoration:none; display:flex; align-items:center; padding-left:5px;"> <span class="head" style="color:red; font-family: Georgia, serif; text-decoration:line-through; font-size:1.3em; padding-right:6px;">JOB</span> PORTAL <span style="color:#80b918; font-size:20px; font-weight:bold; padding-left:10px; font-family:ui-sans-serif">MN CREATIONS</span></a>
        </div>

        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav navbar-right" style="padding-top:18px;">
            <?php
            //Show user dashboard link once logged in.
            if (isset($_SESSION['id_user']) && empty($_SESSION['companyLogged'])) {
            ?>
              <li><a href="user/dashboard.php">Dashboard</a></li>
              <li><a href="logout.php">Logout</a></li>
            <?php
            } else if (isset($_SESSION['id_user']) && isset($_SESSION['companyLogged'])) {
            ?>
              <li><a href="company/dashboard.php">Dashboard</a></li>
              <li><a href="logout.php">Logout</a></li>
            <?php } else {
              //Show Login Links if no one is logged in.
            ?>

              <li class="nav-item dropdown" style="font-size:1.2em; font-weight:500;">
                <a class="nav-link dropdown-toggle" href="" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style=" font-family: 'Roboto Slab', serif;"> Interview Q/A  <i style="margin-left:5px;" class="fas fa-caret-down"></i></a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink" style="text-align: center; ">
                    <li><a class="dropdown-item" href="Interview/interview.php" style=" font-size:1.2em; font-family: 'Roboto Slab', serif;border-bottom:2px solid #48cae4;width:100%; margin:auto; border-radius: 5px; padding:5px 10px;">HR Questions</a></li>
                    <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="http://google.com" style=" font-size:1.2em; font-family: 'Roboto Slab', serif; padding:5px 10px;">Apptitude Q/A<i style="margin-left:10px; transform:rotate(270deg)" class="fas fa-caret-down"></i></a>
                        <ul class="dropdown-menu" style="text-align: center;">
                            <li><a class="dropdown-item" href="Interview/logical.php" style=" font-size:1.2em; font-family: 'Roboto Slab', serif; padding:5px 10px;border-bottom:2px solid #48cae4;width:100%; margin:auto; border-radius: 5px; padding:5px 10px;">Logical Q/A</a></li>
                            <li><a class="dropdown-item" href="Interview/verbal.php" style=" font-size:1.2em; font-family: 'Roboto Slab', serif; padding:5px 10px;border-bottom:2px solid #48cae4;width:100%; margin:auto; border-radius: 5px; padding:5px 10px;">Verbal Q/A</a></li>
                            <li><a class="dropdown-item" href="Interview/quantitative.php" style=" font-size:1.2em; font-family: 'Roboto Slab', serif; padding:5px 10px; padding:5px 10px;">Quantitative Q/A</a></li>
                        </ul>
                    </li>
                </ul>
            </li>
            

              <li><a href="company.php" style=" font-size:1.2em; font-family: 'Roboto Slab', serif;">Company</a></li>
              <li><a href="register.php" style="font-size:1.2em; font-family: 'Roboto Slab', serif;">Register</a></li>
              <!-- <li><a href="" style="font-family: Gill Sans, Helvetica, sans-serif; font-size:1.2em;">Creators</a></li> -->
              <li><a href="http://localhost/intern_sys/" style="font-size:1.2em; font-family: 'Roboto Slab', serif;">Internships</a></li>
              <li><a href="admin/index.php" style="font-size:1.2em; font-family: 'Roboto Slab', serif;">Admin</a></li>
              <li><a href="login.php" style="font-size:1.2em; font-family: 'Roboto Slab', serif;">Login</a></li>
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
          <div style="background-image: url('Images/bg1.jpg');background-repeat: no-repeat;background-size: cover; background-position:top; border:2px solid black; min-height:480px; text-align:center; background-attachment:fixed;" class="jumbotron text-center;">

            <br>
            <br>
            <br>
            <span style="color: white;background-color: black;border-radius:20px;font-size: 60px; padding:0 10px;"><b>JOB PORTAL<b></span>

            <br>
            <br>

            <!-- <div class="para" style="color:#16db93;font-family:monospace;">
            <p>
              Don’t know what to do, Visit Us!
            </p>
          </div>
          <div class="dk" style="color:#ff6700; font-family:monospace; ">
            <p>
              Knock the door, get the solution from the recruiting company.
            </p>
          </div> -->
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Counter Up -->

  <div class="counter-up">
    <div class="content">
      <div class="box">
        <div class="icon"><i class="fas fa-history"></i></div>
        <div class="counter">724</div>
        <div class="text">Total Jobs</div>
      </div>
      <div class="box">
        <div class="icon"><i class="far fa-bookmark"></i></div>
        <div class="counter">18</div>
        <div class="text">New & Trending Jobs</div>
      </div>
      <div class="box">
        <div class="icon"><i class="fas fa-users"></i></div>
        <div class="counter">436</div>
        <div class="text">Happy Clients</div>
      </div>
      <div class="box">
        <div class="icon"><i class="fas fa-award"></i></div>
        <div class="counter">120</div>
        <div class="text">Awards Received</div>
      </div>
    </div>
  </div>


  <!-- LATEST JOB POSTS -->
  <section>
    <div class="container">
      <div class="row">
        <h2 class="text-center" style= "text-align: center; margin: auto; max-width: 70vh; padding-block: 15px; margin-top:20px; margin-bottom: 20px; border-bottom: 2px dashed black; color: #161a1d; font-size: 35px; letter-spacing: 3px; font-weight:600;">Latest Job Posts</h2>
        <?php
        /* Show any 4 random job post
           * 
           * Store sql query result in $result variable and loop through it if we have any rows
           * returned from database. $result->num_rows will return total number of rows returned from database.
          */
        $sql = "SELECT * FROM job_post Order By Rand() Limit 4";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
          while ($row = $result->fetch_assoc()) {
        ?>
            <div class="col-md-6 fixHeight" style=" position: relative;float: left;text-align: center; border-radius: 5px;opacity:0.9;">
              <h3 style="font-weight: 600; text-transform:capitalize; font-size:1.8em; color:#000; font-family: 'Raleway', sans-serif; text-decoration:underline #343a40"><?php echo $row['jobtitle']; ?></h3>
              <p style="font-family:serif; font-size:1.2em; color:#000; text-transform:capitalize;"><?php echo $row['description']; ?></p>

            </div>
        <?php
          }
        }
        ?>
      </div>
    </div>
  </section>

  <!-- COMPANIES LIST -->
  <section>
    <div class="container">
      <div class="row">
        <h2 class="text-center" style="text-align: center; margin: auto; max-width: 60vh; padding-block: 15px; margin-bottom: 20px; border-bottom: 2px dashed black; color: #161a1d; font-size: 35px; letter-spacing: 3px; font-weight:600; margin-top:25px;">Companies List</h2>
        <?php include 'companylist.php' ?>
      </div>
    </div>
  </section>


  <!-- queries -->

  <body class="message">
    <div id="backToTop">
      <!-- <h4 style="color: black; position:absolute; right:90px; bottom:25px; text-align:center;">Any <br> Queries</h4> -->
      <input type="checkbox" id="click">
      <label for="click">

        <i class="fas fa-times"></i>
        <i class="fab fa-facebook-messenger"></i>

      </label>
      <div class="rapper">
        <div class="title">Any Queries</div>
        <div class="form">
          <div class="bot-inbox inbox">
            <div class="icon">
              <i class="fas fa-user"></i>
            </div>
            <div class="msg-header">
              <p>Hello there, how can I help you?</p>
            </div>
          </div>
        </div>
        <div class="typing-field">
          <div class="input-data">
            <input id="data" type="text" placeholder="Type something here.." required>
            <button id="send-btn">Send</button>
          </div>
        </div>
      </div>
    </div>

    <!--------------------Creators---------------------->
    <?php include 'creaters.php' ?>
    <!--------------------Creators---------------------->
    <p style="color: #dfe7fd; width:70%; margin:auto">................................................................... </p>
    <!--------------------Footer---------------------->
    <?php include 'footer.php' ?>
    <!--------------------Footer---------------------->

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Counter-Up/1.0.0/jquery.counterup.min.js"></script>

    <script type="text/javascript">
      $(function() {
        var maxHeight = 0;

        $(".fixHeight").each(function() {
          maxHeight = ($(this).height() > maxHeight ? $(this).height() : maxHeight);
        });

        $(".fixHeight").height(maxHeight);
      });

      $(document).ready(function() {
        $("#send-btn").on("click", function() {
          $value = $("#data").val();
          $msg = '<div class="user-inbox inbox"><div class="msg-header"><p>' + $value + '</p></div></div>';
          $(".form").append($msg);
          $("#data").val('');

          // start ajax code
          $.ajax({
            url: 'message.php',
            type: 'POST',
            data: 'text=' + $value,
            success: function(result) {
              $replay = '<div class="bot-inbox inbox"><div class="icon"><i class="fas fa-user"></i></div><div class="msg-header"><p>' + result + '</p></div></div>';
              $(".form").append($replay);
              // when chat goes down the scroll bar automatically comes to the bottom
              $(".form").scrollTop($(".form")[0].scrollHeight);
            }
          });
        });
      });

      window.onscroll = function() {
        if (pageYOffset >= 300) {
          document.getElementById('backToTop').style.visibility = "visible";
        } else {
          document.getElementById('backToTop').style.visibility = "hidden";
        }
      };
    </script>

    <script>
      $(document).ready(function() {
        $('.counter').counterUp({
          delay: 10,
          time: 1200
        });
      });
    </script>

<script>
$(document).ready(function(){
  $('.dropdown-submenu a.test').on("click", function(e){
    $(this).next('ul').toggle();
    e.stopPropagation();
    e.preventDefault();
  });
});
</script>
  </body>

</html>