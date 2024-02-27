<?php
session_start();

function isSessionExpired($timeoutInSeconds) {
    if (isset($_SESSION['last_activity']) && (time() - $_SESSION['last_activity']) > $timeoutInSeconds) {
        return true;
    }
    return false;
}

// Check if the session is expired
$sessionTimeout = 1800; // 30 minutes in seconds
if (isSessionExpired($sessionTimeout)) {
    // Session expired, log the user out and redirect to login
    session_unset();
    session_destroy();
    header("Location: login.html");
    exit();
}

// Update user's last activity time in the session
$_SESSION['last_activity'] = time();

// Retrieve user data from the session or database if necessary

?>

<!DOCTYPE html>
<html>

<head>
    <title>WEB ENGLISH FOR CHILDREN</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: flex-start;
            align-items: center;
            height: 100vh;
            background-image: url('retrieve_images.php?id=19');

            background-size: cover;
        }

        .cloud-container {
            position: absolute;
            top: 15%;
            right: 40%; /* Điều chỉnh khoảng cách từ lề phải */
            transform: translate(0, -50%);
            background-color: #ffffff;
            border-radius: 50%;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
            width: 30%; /* Điều chỉnh kích thước của cloud-container */
            padding: 3%; /* Điều chỉnh khoảng cách nội dung và viền */
            text-align: center;
        }

        .cloud-content {
            color: #333;
            font-size: 22px;
        }

        .icon {
            position: fixed;
            top: 3vw;
            left: 4vw;
            transform: translate(0, -50%);
            animation: blink 1s infinite;
        }

        .small-icon {
            width: 18vw;
            height: auto;
        }

        .icon-right {
            position: fixed;
            top: 25vw;
            right: 5vw;
            transform: translate(0, 0);
        }

        .small-icon-right {
            width: 30vw;
            height: auto;
            animation: shake 0.5s infinite;
        }

        .buttons-container {
            position: absolute;
            top: 45%;
            left: 50%;
            transform: translate(-50%, -50%);
            display: flex;
            justify-content: center;
            align-items: center;
            flex-wrap: wrap;
            margin-top: 50px;
        }

        .button {
            margin: 10px;
            padding: 15px 20px;
            font-size: 18px;
            font-weight: bold;
            color: white;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            transition: box-shadow 0.3s;
        }

        .button:hover {
            box-shadow: 0 0 20px rgba(235, 150, 72, 0.9);
        }

        .button.greeting {
            background-color: #ff5722;
        }

        .button.animals {
            background-color: #2196F3;
        }

        .button.counting {
            background-color: #4CAF50;
        }

        .button.family {
            background-color: #9C27B0;
        }

        .button.colors {
            background-color: #FFC107;
        }

        @keyframes blink {
            0% {
                transform: scale(1);
            }

            50% {
                transform: scale(1.2);
            }

            100% {
                transform: scale(1);
            }
        }

        @keyframes shake {
            0% {
                transform: translateX(0);
            }

            50% {
                transform: translateX(-5px);
            }

            100% {
                transform: translateX(0);
            }
        }
        .aboutus {
            position: absolute;
            top:500px;
            left:47%;
            background-color: aqua;
        }
    </style>
</head>

<body>
    <div class="icon">
        <img class="small-icon" src="retrieve_backgr.php?id=2" alt="Icon">
    </div>

    <div class="icon-right">
        <img class="small-icon-right" src="retrieve_backgr.php?id=3" alt="Icon Right">
    </div>

    <div class="cloud-container">
        <div class="cloud-content">
            <p>Tham gia các bài Tiếng Anh cơ bản cùng với tôi nào</p>
        </div>
    </div>

    <div class="buttons-container">
        <button class="button greeting" onclick="openPage('fruits.php')">Trái cây</button>
        <button class="button animals" onclick="openPage('animals.php')">Động vật</button>
        <button class="button counting" onclick="openPage('count1.php')">Số đếm</button>
        <button class="button family" onclick="openPage('family1.php')">Gia đình</button>
        <button class="button colors" onclick="openPage('colors1.php')">Màu sắc</button>
        <button class="button colors" onclick="openPage('video.php')">Cùng xem phim nào!!</button>
    </div>
        <div class="aboutus">
        <button onclick="openPage('aboutus.php')">Về chúng tôi</button>
        </div>
    <script>
        function openPage(url) {
            window.location.href = url;
        }
    </script>
</body>

</html>
