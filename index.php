<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Vertical Drop-Down Menu</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,400;0,500;1,500&display=swap');

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: "poppins", sans-serif;
        }

        body {
            height: 100vh;
            width: 100%;
            background: #000;

        }

        .background {
            background-image: url('retrieve_backgr.php?id=1');
            background-position: center;
            background-size: cover;
            height: 100vh;
            width: 100%;

        }

        .header {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            padding: 25px 13%;
            background: transparent;
            display: flex;
            justify-content: space-between;
            align-items: center;
            z-index: 100;

        }

        .navbar a {
            position: relative;
            font-size: 16px;
            color: #000;
            margin-right: 30px;
            text-decoration: none;
        }

        .navbar a::after {
            content: "";
            position: absolute;
            left: 0;
            width: 100%;
            height: 2px;
            background: #f542b3;
            bottom: -5px;
            border-radius: 5px;
            transform: translateY(10px);
            opacity: 0;
            transition: .5s ease;
        }

        .navbar a:hover:after {
            transform: translateY(0);
            opacity: 1;
        }

        .container {
            position: absolute;
            left: 40%;
            top: 50%;
            transform: translate(-50%, -50%);
            width: 65%;
            height: 500px;
            margin-top: 20px;
            border-radius: 20px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.3);
            background-color: rgba(255, 255, 255, 0.7);


        }

        .item {
            position: absolute;
            top: 0;
            left: 35%;
            width: 58%;
            height: 100%;
            color: #fff;
            background: transparent;
            padding: 70px;
            margin-left: 20px;
            display: flex;
            justify-content: space-between;
            flex-direction: column;



        }

        .item .logo {
            color: #fff;
            font-size: 30px;
            color: black;

        }

        .text-item h2 {
            font-size: 40px;
            line-height: 1;
            color: black;
        }

        .text-item p {
            font-size: 20px;
            margin: 20px 0;
            color: black;
        }

        .next-button {
            background-color: #ff9800;
            color: white;
            border: none;
            padding: 10px 20px;
            cursor: pointer;
            border-radius: 8px;
            font-size: 20px;
            transition: background-color 0.3s ease, transform 0.3s ease;
            text-decoration: none;
            position: absolute;
            top: 220px;
            left: -170px;
        }

        .next-button:hover {
            background-color: #f57c00;
            transform: scale(1.05);
        }
    </style>
</head>

<body>
    </div>

    <!-- LOGIN FORM CREATION -->
    <div class="background"></div>
    <div class="container">
        <div class="item">
            <h2 class="logo"><i class='bx bxl-xing'></i>English For Kids</h2>
            <div class="text-item">
                <h2>Welcome! <br><span>
                        To My Channel
                    </span></h2>
                <p>I was created to support young people who need to learn English<br>
                    with a convenient and fun learning environment<br>
                    <br>Let's study together!
                </p>
                <button><a  class="next-button" href="login.html">Let's study</a></button>
            </div>
        </div>

</body>

</html>