<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">
    <title>Back to top</title>

    <style>
        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }

        /* html {
  scroll-behavior: smooth;
} */
        body .back-to-top{
            font-family: Arial, Helvetica, sans-serif;
            font-size: 20px;
            background-color: #fff;
            color: #333;
        }

        h1 {
            font-size: 32px;
            margin: 20px 0;
        }

        h2 {
            font-size: 26px;
        }

        hr {
            margin: 40px 0;
        }


        #back-to-top-btn {
            display: none;
            position: fixed;
            bottom: 20px;
            left: 20px;
            font-size: 26px;
            width: 50px;
            height: 50px;
            background-color: #fff;
            color: #333;
            cursor: pointer;
            outline: none;
            border: 3px solid #333;
            border-radius: 50%;
            transition-duration: 0.2s;
            transition-timing-function: ease-in-out;
            transition-property: background-color, color;
        }

        #back-to-top-btn:hover,
        #back-to-top-btn:focus {
            background-color: #333;
            color: #fff;
        }

        @media(max-width: 992px) {
            .container {
                padding: 20px 100px;
            }

            #back-to-top-btn {
                font-size: 22px;
                width: 40px;
                height: 40px;
                bottom: 15px;
                right: 15px;
            }
        }

        @media(max-width:768px) {
            body {
                font-size: 16px;
            }

            .container {
                padding: 10px 50px;
            }

            h1 {
                font-size: 26px;
            }

            h2 {
                font-size: 22px;
            }

            hr {
                margin: 30px 0;
            }

            #back-to-top-btn {
                font-size: 18px;
                width: 32px;
                height: 32px;
                bottom: 6px;
                right: 6px;
            }
        }

        /* Animations */
        .btnEntrance {
            animation-duration: 0.5s;
            animation-fill-mode: both;
            animation-name: btnEntrance;
        }

        /* zoomIn */
        /* @keyframes btnEntrance { 
  from {
    opacity: 0;
    transform: scale3d(0.3, 0.3, 0.3);
  }
  to {
    opacity: 1;
  }    
} */

        /* fadeInUp */
        @keyframes btnEntrance {
            from {
                opacity: 0;
                transform: translate3d(0, 100%, 0);
            }

            to {
                opacity: 1;
                transform: translate3d(0, 0, 0);
            }
        }

        .btnExit {
            animation-duration: 0.25s;
            animation-fill-mode: both;
            animation-name: btnExit;
        }

        /* zoomOut */
        /* @keyframes btnExit {
  from {
    opacity: 1;
  }
  to {
    opacity: 0;
    transform: scale3d(0.3, 0.3, 0.3);
  }
} */

        /* fadeOutDown */
        @keyframes btnExit {
            from {
                opacity: 1;
            }

            to {
                opacity: 0;
                transform: translate3d(0, 100%, 0);
            }
        }
    </style>

</head>

<body class="back-to-top">
    <button id="back-to-top-btn"><i class="fas fa-angle-double-up"></i></button>

    <script>
        const backToTopButton = document.querySelector("#back-to-top-btn");

        window.addEventListener("scroll", scrollFunction);

        function scrollFunction() {
            if (window.pageYOffset > 300) { // Show backToTopButton
                if (!backToTopButton.classList.contains("btnEntrance")) {
                    backToTopButton.classList.remove("btnExit");
                    backToTopButton.classList.add("btnEntrance");
                    backToTopButton.style.display = "block";
                }
            }
            else { // Hide backToTopButton
                if (backToTopButton.classList.contains("btnEntrance")) {
                    backToTopButton.classList.remove("btnEntrance");
                    backToTopButton.classList.add("btnExit");
                    setTimeout(function () {
                        backToTopButton.style.display = "none";
                    }, 250);
                }
            }
        }

        backToTopButton.addEventListener("click", smoothScrollBackToTop);

        // function backToTop() {
        //   window.scrollTo(0, 0);
        // }

        function smoothScrollBackToTop() {
            const targetPosition = 0;
            const startPosition = window.pageYOffset;
            const distance = targetPosition - startPosition;
            const duration = 750;
            let start = null;

            window.requestAnimationFrame(step);

            function step(timestamp) {
                if (!start) start = timestamp;
                const progress = timestamp - start;
                window.scrollTo(0, easeInOutCubic(progress, startPosition, distance, duration));
                if (progress < duration) window.requestAnimationFrame(step);
            }
        }

        function easeInOutCubic(t, b, c, d) {
            t /= d / 2;
            if (t < 1) return c / 2 * t * t * t + b;
            t -= 2;
            return c / 2 * (t * t * t + 2) + b;
        };
    </script>

</body>

</html>