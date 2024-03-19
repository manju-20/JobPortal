<!DOCTYPE html>
<!-- Created By CodingNepal - www.codingnepalweb.com -->
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Quick Links</title>
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');
*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'Poppins', sans-serif;
}
body{
  overflow: hidden;
  padding: 0 20px;
  background: linear-gradient(rgba(0, 0, 50, 0.5), rgba(0, 0, 50, 0.5)), url('Images/pop-up.png');
  background-size: cover;
  background-position: center;
}
::selection{
  background: rgba(23,162,184,0.3);
}
.wrapper{
  max-width: 850px;
  width: 100%;
  margin: 30px auto;
  padding: 25px 30px 30px 30px;
  border-radius: 5px;
  background: #fff;
  box-shadow: 0px 10px 15px rgba(0,0,0,0.1);
}
.wrapper header{
  font-size: 30px;
  font-weight: 600;
  padding-bottom: 20px;
}
.wrapper nav{
  position: relative;
  width: 95%;
  height: 50px;
  display: flex;
  align-items: center;
}
.wrapper nav label{
  display: block;
  height: 100%;
  width: 100%;
  text-align: center;
  line-height: 50px;
  cursor: pointer;
  position: relative;
  z-index: 1;
  color: #17a2b8;
  font-size: 16px;
  border-radius: 5px;
  margin: 0 5px;
  transition: all 0.3s ease;
}
.wrapper nav label:hover{
  background: rgba(23,162,184,0.3);
}
#home:checked ~ nav label.home,
#blog:checked ~ nav label.blog,
#code:checked ~ nav label.code,
#help:checked ~ nav label.help,
  #about:checked ~ nav label.about{
  color: #fff;
}
nav label i{
  padding-right: 5px;
}
nav .slider{
  position: absolute;
  height: 100%;
  width: 20%;
  left: 0;
  bottom: 0;
  z-index: 0;
  border-radius: 5px;
  background: #17a2b8;
  transition: all 0.3s ease;
}
input[type="radio"]{
  display: none;
}
#blog:checked ~ nav .slider{
  left: 20%;
}
#code:checked ~ nav .slider{
  left: 40%;
}
#help:checked ~ nav .slider{
  left: 60%;
}
#about:checked ~ nav .slider{
  left: 80%;
}
section .content{
  display: none;
  background: #fff;
}
#home:checked ~ section .content-1,
#blog:checked ~ section .content-2,
#code:checked ~ section .content-3,
#help:checked ~ section .content-4,
#about:checked ~ section .content-5{
  display: block;
}
section .content .title{
  font-size: 21px;
  font-weight: 500;
  margin: 30px 0 10px 0;
}
section .content p{
text-align: justify;
}

#main{
  width: 50%;
  margin: auto;
  background-color: #f8f9fa;
}

#side img{
  float: right;
  width:200px;
  height: 300px;
}


.contact-title{
  color: #17a2b8;
  text-transform: uppercase;
  transition: all 0.4s ease-in-out;
}

.contact-title h2{
  font-size: 16px;
}

form{
  margin: auto;
  margin-top: 10px;
  transition: all 4s ease-in-out;
  box-shadow: 10px 10px 5px grey;
  border-radius: 5px;

}

.form-control{
  width: 80%;
  margin-left:40px;
  margin-top: 5px;
  border: none;
  outline: none;
  border-bottom: 1px solid grey;
  background-color: transparent;
  font-size:15px;
  margin-bottom: 5px;
}

input{
  height:45px;
}

form .submit{
  background-color:#ff5722;
  border-color: transparent;
  color: #fff;
  font-size:15px;
  font-weight: bold;
  letter-spacing: 1.4px;
  height: 40px;
  margin: 20px 0px 20px 40px;
}

    </style>

</head>

<body>
  <div class="wrapper">
    <header><i style="margin-right:10px" class="fas fa-layer-group"></i>Quick Links</header>
    <a href="http://localhost/MN_Creations/jobportal/index.php"style="float: right; margin-top:-65px;font-weight:bold; font-size:1.5em; color:black; text-decoration:none;"><i style="margin-right:10px;" class="fas fa-chevron-left"></i>Back</a>
    <input type="radio" name="slider" checked id="home">
    <input type="radio" name="slider" id="blog">
    <input type="radio" name="slider" id="code">
    <input type="radio" name="slider" id="help">
    <input type="radio" name="slider" id="about">
    <nav>
      <label for="home" class="home"><i class="fas fa-home"></i>About Us</label>
      <label for="blog" class="blog"><i class="fas fa-envelope"></i>Contact Us</label>
      <label for="code" class="code"><i class="fas fa-code"></i>Contribute</label>
      <label for="help" class="help"><i class="fas fa-shield-alt"></i>Privacy Policy</label>
      <label for="about" class="about"><i class="fas fa-map-marked-alt"></i>headquarters</label>
      <div class="slider"></div>
    </nav>
    <section>
      <div class="content content-1">
        <div class="title">Breif On Web Page</div>
        <p>The main objective of the Job Portal System is to manage the details of Interview,
          Employer, Search job, Registration, Internships, Post Job. This website is totally built at administative end
          and thus only the administrator is gaurented the access.</p>
        <div class="title">Our Mission</div>
        <p>The Main aim of this project is to give opportunity for all to apply for the jobs, which matches their Qualification, passion, etc...</p>
        <p>The other aim is to build an application program to reduce the manual work for managing the Interview,Employer,post job. It Tracks all the detils about the Employer, Registration, Search job, Etc</p>
      </div>
      <div class="content content-2">
        <div class="title" style="margin-left: 320px; font-weight: bold;
        font-size: 2em; margin-top:5px">Contact Us</div>
        <div id="main">
          <div class="contact-title">
            <!-- <h2>We are always raedy to serve you</h2> -->
          </div>
          <div class="contact-form">
            <form action="" id="contact-form" method="post">
              <input style="text-transform: capitalize;" type="text" name="name" class="form-control"
                placeholder="Your Name" required>
              <br>
              <input type="email" name="email" class="form-control" placeholder="Your Mail" required>
              <br>
              <textarea style="text-transform: capitalize;" name="message" class="form-control" placeholder="message"
                rows="4" required></textarea>
              <br>
              <input type="submit" class="form-control submit" value="SEND MESSAGE">
            </form>
          </div>
        </div>
      </div>
      <div class="content content-3">
        <div class="title">This is a Code content</div>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iure, debitis nesciunt! Consectetur officiis,
          libero nobis dolorem pariatur quisquam temporibus. Labore quaerat neque facere itaque laudantium odit veniam
          consectetur numquam delectus aspernatur, perferendis repellat illo sequi excepturi quos ipsam aliquid est
          consequuntur.</p>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iure, debitis nesciunt! Consectetur officiis,
          libero nobis dolorem pariatur quisquam temporibus. Labore quaerat neque facere itaque laudantium odit veniam
          consectetur numquam delectus aspernatur, perferendis repellat illo sequi excepturi quos ipsam aliquid est
          consequuntur.</p>
      </div>
      <div class="content content-4">
        <div class="title">Information we collect from you automatically</div>
        <p>We may directly collect analytics data, or use third-party analytics tools to help us measure traffic and usage trends for the service. We collect and use this analytics information in aggrigate form such that it cannot reasonability be manipulated to identify any particular individual user</p>
        <div class="title">Cookies Information</div>
        <p>
          When we visit the service, we may send one or more cookies - a small text file containing a string of alphanumeric characters. A cookies may also convey information to us about how you use the service..
        </p>
        <p>
        Information from your interaction with our website, services, including, but not limited to, location, geo-location information, computer and connection information, IP address, device ID and device type.
        </p>
      </div>
      <div class="content content-5">
        <div class="title">SiteMap </div>
        <main>
          <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3888.595117926134!2d77.68993201362598!3d12.933724090880755!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bae13cb00000001%3A0xab10e26281718cc2!2sNew%20Horizon%20College%20of%20Engineering!5e0!3m2!1sen!2sin!4v1624175124543!5m2!1sen!2sin"
            width="770" height="290" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </main>
      </div>
    </section>
  </div>

</body>

</html>