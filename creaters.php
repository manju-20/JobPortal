<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MN Creations</title>
    <link rel="stylesheet" href="../res/css/default.css">
    <link rel="stylesheet" href="team.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">

    <style>

        body .creators{
            width: 100%;
            margin: auto;

        }


        .OurGang {
            text-align: center;
            margin: auto;
            max-width: 70vh;
            padding-block: 6px;
            margin-bottom: 20px;
            margin-top: 20px;
            border-bottom: 2px dashed black;
            color: #161a1d;
            font-size: 35px;
            letter-spacing: 3px;
        }

        section .OurTeam {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            align-items: center;
            background-color: #161a1d;
        }

        .Gang {
            float: left;
            width: 280px;
            height: 420px;
            overflow: hidden;
            margin: 22px;
            margin:0PX 65PX;
            border: 2px solid #495057;
            border-radius: 16px;
            position: relative;
            background-color: #ffffff34;
        }
        .Gang::before {
            content: '';
            background-image: var(--img);
            background-size: cover;
            background-position: center;
            position: absolute;
            top: 0;
            left: 0;
            bottom: 0;
            right: 0;
            z-index: 1;
            filter: blur(4px) grayscale(100%);
        }

        .Gang img {
            position: absolute;
            top: 0;
            left: 0;
            width: 280px;
            height: 420px;
            border-radius: 16px;
            z-index: 3;
            object-fit: cover;
            border: none;
        }

        .Gang:hover img {
            width: 120px;
            height: 200px;
            border: 2px solid #495057;
            left: 75px;
            top: 75px;
        }

        .Gang .info {
            background-color: white;
            position: absolute;
            bottom: 0px;
            left: 0;
            right: 0;
            z-index: 2;
            color: #363636;
            padding: 16px;
            border-top: 8px solid #faa307;
            border-radius: 50% 50% 0px 0px;
            padding-top: 60px;
            text-align: center;
            transform: scale(1.5);
        }

        .Gang .name {
            font-size: 22px;
            padding: 10px;
            text-transform: capitalize;
        }

        .Gang .title {
            color: grey;
            text-transform: capitalize;
        }


        .Gang:hover .info {
            transform: scale(1);
        }

        .Gang .social {
            padding-block: 13px;
            font-size: 22px;
        }

        .Gang .social i {
            display: inline-block;
            width: 45px;
            padding: 7px;
            background-color: #ededed;
            border-radius: 12px;
            margin: 2px;
            cursor: pointer;
        }

        .Gang .social i:hover {
            color: #43bccd;
            background-color: #363636;
        }
    </style>

</head>

<body class="creators">
    <div class="OurGang">
    <i style="color: red;" class="fas fa-anchor"></i>
        Team Legends
    <i style="color: red;" class="fas fa-anchor"></i>
    </div>
    <section class="OurTeam">
        <div class="Gang" style="--img: url(Images/manja.jpg);">
            <img src="Images/manja.jpg" alt="">
            <div class="info">
                <div class="name">manjunatha HG</div>
                <div class="title">CEO and Founder</div>
                <div class="social">
                    <a href="https://www.facebook.com/" target="blank"><i class="fab fa-facebook-f"></i></a>
                    <a href="https://www.instagram.com/accounts/login/" target="blank"><i class="fab fa-instagram"></i></a>
                    <a href="https://twitter.com/login" target="blank"><i class="fab fa-twitter"></i></a>
                    <a href="https://www.linkedin.com/login" target="blank"><i class="fab fa-linkedin"></i></a>
                </div>
            </div>
        </div>

        <div class="Gang" style="--img: url(Images/boss.jpg);">
            <img src="Images/boss.jpg" alt="">
            <div class="info">
                <div class="name">Naveen Navi</div>
                <div class="title">CEO and Founder</div>
                <div class="social">
                <a href="https://www.facebook.com/" target="blank"><i class="fab fa-facebook-f"></i></a>
                    <a href="https://www.instagram.com/accounts/login/" target="blank"><i class="fab fa-instagram"></i></a>
                    <a href="https://twitter.com/login"><i class="fab fa-twitter"></i></a>
                    <a href="https://www.linkedin.com/login" target="blank"><i class="fab fa-linkedin"></i></a>
                </div>
            </div>
        </div>

        <div class="Gang" style="--img: url(Images/king.jpeg);">
            <img src="Images/king.jpeg" alt="">
            <div class="info">
                <div class="name">Naveen Kumar.</div>
                <div class="title">CEO and Founder</div>
                <div class="social">
                <a href="https://www.facebook.com/" target="blank"><i class="fab fa-facebook-f"></i></a>
                    <a href="https://www.instagram.com/accounts/login/" target="blank"><i class="fab fa-instagram"></i></a>
                    <a href="https://twitter.com/login" target="blank"><i class="fab fa-twitter"></i></a>
                    <a href="https://www.linkedin.com/login" target="blank"><i class="fab fa-linkedin"></i></a>
                </div>
            </div>
        </div>
    </section>
</body>

</html>