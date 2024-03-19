<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pop-up</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">

    <style>

        body {
            background: #ddd;
            font-family: "Raleway";
            background-image:url('../Images/success1.jpg');
            background-position: center;
            background-size: cover;
        }

        .center {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            border: 1px solid black;
            border-radius: 8px;
            padding: 10px 24px;
            background-color: #48cae4;
            text-align: center;
        }

        .center h1{
            text-align: center;
            text-transform: capitalize;
            letter-spacing: 1px;
            color: #fb5607;
            
        }

        .center h3{
            text-align: center;
            font-size: 1.3em;
            font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        .center button{
            padding: 6px 22px;
            border-radius: 10px;
            font-size: 1.7em;
            font-weight: 600;
            border: 2px solid #dc2f02;
            color: #ffc300;
            background-color: #495057;
            cursor: pointer;
        }

        .center button:hover{
            color: #495057;
            background-color: #c7f9cc;
        }

        .popup {
            width: 350px;
            height: 280px;
            padding: 30px 20px;
            background: #f5f5f5;
            border-radius: 10px;
            box-sizing: border-box;
            z-index: 2;
            text-align: center;
            opacity: 0;
            top: -200%;
            transform: translate(-50%, -50%) scale(0.5);
            transition: opacity 300ms ease-in-out,
                top 1000ms ease-in-out,
                transform 1000ms ease-in-out;
        }

        .popup.active {
            opacity: 1;
            top: 50%;
            transform: translate(-50%, -50%) scale(1);
            transition: transform 300ms cubic-bezier(0.18, 0.89, 0.43, 1.19);
        }

        .popup .icon {
            margin: 5px 0px;
            width: 50px;
            height: 50px;
            border: 2px solid #34f234;
            text-align: center;
            display: inline-block;
            border-radius: 50%;
            line-height: 60px;
        }

        .popup .icon i.fa {
            font-size: 30px;
            color: #34f234;
        }

        .popup .title {
            margin: 5px 0px;
            font-size: 30px;
            font-weight: 600;
        }

        .popup .description {
            color: #222;
            font-size: 15px;
            padding: 5px;
        }

        .popup .dismiss-btn {
            margin-top: 15px;
        }

        .popup .dismiss-btn button {
            padding: 10px 20px;
            background: #111;
            color: #f5f5f5;
            border: 2px solid #111;
            font-size: 16px;
            font-weight: 600;
            outline: none;
            border-radius: 10px;
            cursor: pointer;
            transition: all 300ms ease-in-out;
        }

        .popup .dismiss-btn button:hover {
            color: #111;
            background: #f5f5f5;
        }

        .popup>div {
            position: relative;
            top: 10px;
            opacity: 0;
        }

        .popup.active>div {
            top: 0px;
            opacity: 1;
        }

        .popup.active .icon {
            transition: all 300ms ease-in-out 250ms;
        }

        .popup.active .title {
            transition: all 300ms ease-in-out 300ms;
        }

        .popup.active .description {
            transition: all 300ms ease-in-out 350ms;
        }

        .popup.active .dismiss-btn {
            transition: all 300ms ease-in-out 400ms;
        }
    </style>

</head>

<body>
    <div class="popup center">
        <div class="icon">
            <i class="fa fa-check"></i>
        </div>
        <div class="title">
            Success!!
        </div>
        <div class="description">
            The mail will be sent to the Employee about further Interview rounds, salary pacakge and Company Terms & Conditions..
        </div>
        <div class="dismiss-btn">
            <a href="dashboard.php">
            <button id="dismiss-popup-btn">
                Dismiss
            </button>
            </a>
        </div>
    </div>
    <div class="center">
        <h1>confirm call </h1>
        <h3>Please confirm here to send the confirmation <br> mail to the Employee</h3>
        <button id="open-popup-btn">
            Agree
        </button>
    </div>

    <script>
        document.getElementById("open-popup-btn").addEventListener("click", function () {
            document.getElementsByClassName("popup")[0].classList.add("active");
        });

        document.getElementById("dismiss-popup-btn").addEventListener("click", function () {
            document.getElementsByClassName("popup")[0].classList.remove("active");
        });
    </script>
</body>

</html>