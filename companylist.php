<!DOCTYPE html>
<!-- Created By CodingNepal -->
<html lang="en" dir="ltr">
   <head>
      <meta charset="utf-8">
      <title>Responsive Owl-Carousel Slider | CodingNepal</title>
      <link rel="stylesheet" href="style.css">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">

      <style>

@import url('https://fonts.googleapis.com/css?family=Poppins:400,500,600,700&display=swap');
*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'Poppins', sans-serif;
}
body .company{
  min-height: 80vh;
  display: flex;
  align-items: center;
}
.wrapper{
  width: 100%;
}

.wrapper .box{
  width: 350px;
  margin: 0 auto;
  position: relative;
  perspective: 1000px;
}

.wrapper .box .card{
  background: #fff;
  height: 220px;
  width: 100%;
  display: flex;
  flex-direction: column;
  justify-content: center;
  box-shadow: 0px 5px 20px 0px rgba(0, 81, 250, 0.1);
  transition: all 0.5s ease;
}


.box .back-face{
  position: absolute;
  top: 0;
  left: 0;
  z-index: 1;
  height: 220px;
  width: 100%;
  padding: 30px;
  color: #fff;
  opacity: 0;
  text-align: center;
  transform-style: preserve-3d;
  backface-visibility: hidden;
  background: linear-gradient(-135deg, #c850c0, #4158d0);
  transform: translateY(110px) rotateX(-90deg);
  box-shadow: 0px 5px 20px 0px rgba(0, 81, 250, 0.1);
  transition: all 0.5s ease;
}

.back-face span{
    color: black;
    text-decoration: underline;
}

.box .back-face p{
  margin-top: 5px;
  text-align: justify;
}
.box:hover .back-face{
  opacity: 1;
  transform: rotateX(0deg);
}

.box .back-face span{
  font-size: 22px;
  font-weight: 600;
  text-transform: uppercase;
}


.box:hover .card {
  opacity: 0;
  transform: translateY(-110px) rotateX(90deg);
}

.carousel{
  max-width: 1200px;
  margin: auto;
  padding: 0 30px;
}
.carousel .card{
  color: #fff;
  text-align: center;
  margin: 20px 0;
  line-height: 250px;
  font-size: 90px;
  font-weight: 600;
  border-radius: 10px;
  box-shadow: 0px 4px 15px rgba(0,0,0,0.2);
}
/* .carousel .card-1{
  background: #ed1c24;
}
.carousel .card-2{
  background: #0072bc;
}
.carousel .card-3{
  background: #39b54a;
}
.carousel .card-4{
  background: #f26522;
}
.carousel .card-5{
  background: #630460;
} */
.owl-dots{
  text-align: center;
  margin-top: 10px;
}
.owl-dot{
  height: 8px;
  width: 35px;
  margin: 0 5px;
  outline: none;
  border-radius: 14px;
  border: 2px solid #0072bc!important;
  box-shadow: 0px 4px 15px rgba(0,0,0,0.2);
  transition: all 0.3s ease;
}
.owl-dot.active,
.owl-dot:hover{
  background: #0072bc!important;
}
      
      </style>
   </head>
   <body class="company">
      <div class="wrapper">
         <div class="carousel owl-carousel">
            <div class="box">
               <div class="card card-1">
                  <img src="Images/Wipro.jpg" alt="" width="350px" height="220px">
               </div>
               <div class="back-face">
                  <span>Wipro</span>
                  <p>
                  Wipro Limited is an Indian multinational corporation that provides information technology, consulting and business process services. It is headquartered in Bangalore, Karnataka, India.
                  </p>
               </div>
            </div>
            <div class="box">
               <div class="card card-2">
                  <img src="Images/google.jpg" alt="" width="350px" height="220px">
               </div>
               <div class="back-face">
                  <span>Google LTD</span>
                  <p>
                  Google LLC is an American multinational technology company that specializes in Internet-related services and products, which include online advertising technologies, a search engine, cloud computing, software, and hardware.
                  </p>
               </div>
            </div>
            <div class="box">
               <div class="card card-3">
                  <img src="Images/pubg.jpg" alt="" width="350px" height="220px">
               </div>
               <div class="back-face">
                  <span>PUBG</span>
                  <p>
                  The game is based on previous mods that were created by Brendan "PlayerUnknown" Greene for other games, inspired by the 2000 Japanese film Battle Royale, and expanded into a standalone game under Greene's creative direction. 
                  </p>
               </div>
            </div>
            <div class="box">
               <div class="card card-4">
                  <img src="Images/software.jpg" alt="" width="350px" height="220px">
               </div>
               <div class="back-face">
                  <span>Software Development</span>
                  <p>
                  Software developers typically do the following: Analyze users' needs and then design, test, and develop software to meet those needs
                  </p>
               </div>
            </div>
            <div class="box">
               <div class="card card-5">
                  <img src="Images/twitter.png" alt="" width="350px" height="220px">
               </div>
               <div class="back-face">
                  <span>Twitter</span>
                  <p>
                  Twitter is a 'microblogging' system that allows you to send and receive short posts called tweets. Tweets can be up to 140 characters long and can include links to relevant websites and resources.
                  </p>
               </div>
            </div>
            <div class="box">
               <div class="card card-5">
                  <img src="Images/accountant.jpg" alt="" width="350px" height="220px">
               </div>
               <div class="back-face">
                  <span>Accountant</span>
                  <p>
                  Analyze financial information and prepare financial reports to determine or maintain record of assets, liabilities, profit and loss,or others within an organization.They ensure that financial records are accurate and that taxes are paid properly and on time.
                  </p>
               </div>
            </div>
         </div>
      </div>
      <script>
         $(".carousel").owlCarousel({
           margin: 20,
           loop: true,
           autoplay: true,
           autoplayTimeout: 2000,
           autoplayHoverPause: true,
           responsive: {
             0:{
               items:1,
               nav: false
             },
             600:{
               items:2,
               nav: false
             },
             1000:{
               items:3,
               nav: false
             }
           }
         });
      </script>
   </body>
</html>