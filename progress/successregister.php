<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Congratulations!</title>
    <?php include 'timeout.php'; ?>

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f3f3f3;
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            overflow: hidden;
            background-image: url("back-ground.jpg");
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
        }

        .container {
            width: 50%;
            text-align: center;
            padding: 20px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transform: scale(0.8);
            opacity: 0;
            animation: showContainer 1s ease forwards, scaleContainer 1s ease forwards;
        }

        @keyframes showContainer {
            to {
                opacity: 1;
            }
        }

        @keyframes scaleContainer {
            to {
                transform: scale(1);
            }
        }

        .message {
            font-size: 24px;
            color: #333;
            margin-bottom: 20px;
        }

        .confetti {
            position: relative;
            width: 100%;
            height: 400px;
            margin: 20px auto;
            background: url('welcome.png') no-repeat;
            background-size: cover;
            animation: confettiAnimation 5s linear infinite;
        }

        @keyframes confettiAnimation {

            0%,
            100% {
                transform: translateY(0);
            }

            50% {
                transform: translateY(-40px);
            }
        }

        #phpLink {
            display: inline-block;
            padding: 10px 20px;
            background-color: #3498db;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s ease;
            
        }
        
        #phpLink:hover {
            background-color: #2980b9;
        }

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(20px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes fadeInRight {
            from {
                opacity: 0;
                transform: translateX(-20px);
            }

            to {
                opacity: 1;
                transform: translateX(0);
            }
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="confetti"></div>
        <a href="login.html" id="phpLink">GO TO LOGIN NOW</a>
    </div>
</body>

</html>