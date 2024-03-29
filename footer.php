<!DOCTYPE html>
<html>

<head>
    <title>How to Create Responsive Footer in Html CSS and Bootstrap Create Professional Footer </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
    <link rel="stylesheet" href="style.css">

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700;800;900&display=swap');

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body .bottom{
            font-family: 'Poppins', sans-serif;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: flex-end;
            flex-direction: column;
            /* background-image: linear-gradient( 109.6deg,  rgba(48,207,208,1) 11.2%, rgba(51,8,103,1) 92.5% ); */
        }

        .site-footer {
            background-color: #26272b;
            padding: 45px 30px 20px;
            font-size: 15px;
            line-height: 24px;
            color: #737373;
            border-radius: 12px;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.5);
            margin-bottom: -15px;
        }

        .site-footer hr {
            border-top-color: #bbb;
            opacity: 0.5;
        }

        .site-footer hr.small {
            margin: 20px 0;
        }

        .site-footer h6 {
            color: #fff;
            font-size: 16px;
            text-transform: uppercase;
            margin-top: 5px;
            letter-spacing: 2px;
        }

        .site-footer a {
            color: #737373;
        }

        .site-footer a:hover {
            color: #fff;
            text-decoration: none;
        }

        .footer-links {
            padding-left: 50px;
            list-style: none;
        }

        .footer-links li {
            display: block;
        }

        .footer-links a {
            color: #737373;
        }

        .footer-links a:active,
        .footer-links a:focus,
        .footer-links a:hover {
            color: #fff;
            text-decoration: none;
        }

        .site-footer .social-icons {
            text-align: right;
        }

        .site-footer .social-icons a {
            width: 40px;
            height: 40px;
            line-height: 40px;
            margin-left: 6px;
            margin-right: 0;
            border-radius: 100%;
            background-color: #33353d;
        }

        .copyright-text {
            margin: 0;
        }

        @media (max-width: 991px) {
            .site-footer [class^="col-"] {
                margin-bottom: 30px;
            }
        }

        @media (max-width: 767px) {
            .site-footer {
                padding-bottom: 0;
            }

            .site-footer .copyright-text,
            .site-footer .social-icons {
                text-align: center;
            }
        }

        .social-icons {
            padding-left: 0;
            margin-bottom: 0;
            list-style: none;
        }

        .social-icons li {
            display: inline-block;
            margin-bottom: 4px;
            margin-right: 8px;
        }

        .social-icons a {
            background-color: #eceeef;
            color: #818a91;
            font-size: 16px;
            display: inline-block;
            line-height: 44px;
            width: 44px;
            height: 44px;
            text-align: center;
            margin-right: 8px;
            border-radius: 100%;
            -webkit-transition: all 0.2s linear;
            -o-transition: all 0.2s linear;
            transition: all 0.2s linear;
        }

        .social-icons a:active,
        .social-icons a:focus,
        .social-icons a:hover {
            color: #fff;
            background-color: #29aafe;
        }

        .social-icons a.facebook:hover {
            background-color: #3b5998;
        }

        .social-icons a.twitter:hover {
            background-color: #00aced;
        }

        .social-icons a.linkedin:hover {
            background-color: #007bb6;
        }

        .social-icons a.dribbble:hover {
            background-color: #ea4c89;
        }
    </style>
</head>

<body class="bottom">
    <footer class="site-footer">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-6">
                    <h6>About</h6>
                    <p class="text-justify">The main objective of the Job Portal System is to manage the details of Interview,
                      Employer, Search job, Registration, Internships, Post Job. This website is totally built at administative end and thus only the administrator is gaurented the access. The main aim of this webpage is to build an application program to reduce the manual work for managing the Interview,Employer,post job. It Tracks all the detils about the Employer, Registration, Search job, Etc</p>
                </div>

                <div class="col-6 col-md-3">
                    <h6 style="padding-left: 50px;">Categories</h6>
                    <ul class="footer-links ">
                        <li><a href="Interview.php">Interview QA</a></li>
                        <li><a href="http://localhost/intern_sys/">Internships</a></li>
                        <li><a href="company.php">Compapany Login</a></li>
                        <li><a href="company.php">Company Registration</a></li>
                        <li><a href="login.php">User login</a></li>
                        <li><a href="admin/index.php">administrator Login</a></li>
                    </ul>
                </div>

                <div class="col-6 col-md-3">
                    <h6 style="padding-left: 50px;">Quick Links</h6>
                    <ul class="footer-links">
                        <li><a href="pop-up.php">About Us</a></li>
                        <li><a href="#">Contact Us</a></li>
                        <li><a href="#">Contribute</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                        <li><a href="#">Sitemap</a></li>
                    </ul>
                </div>
            </div>
            <hr class="small">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-sm-6 col-12">
                    <p class="copyright-text" style="padding-top:5px;">Copyright © 2020 All Rights Reserved by
                        <a href="#">MN Creations</a>.
                    </p>
                </div>

                <div class="col-md-4 col-sm-6 col-12">
                    <ul class="social-icons">
                        <li><a class="facebook" href="https://www.facebook.com/" target="blank"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a class="twitter" href="https://twitter.com/login" target="blank"><i class="fab fa-twitter"></i></a></li>
                        <li><a class="dribbble" href="https://dribbble.com/" target="blank"><i class="fab fa-dribbble"></i></a></li>
                        <li><a class="linkedin" href="https://www.linkedin.com/login" target="blank"><i class="fab fa-linkedin-in"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>

</html>