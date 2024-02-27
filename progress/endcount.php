<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome and Play MP3</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            background-image: url('retrieve_images.php?id=19'); /* Replace with the actual image ID */
            background-size: cover;
        }

        .container {
            text-align: center;
            background-color: rgba(255, 255, 255, 0.5);
            /* Transparent white background */
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.8);
        }

        h1 {
            margin-bottom: 10px;
        }

        audio {
            display: none;
        }

        .next-button {
            background-color: #ff9800;
            color: white;
            border: none;
            padding: 10px 20px;
            cursor: pointer;
            border-radius: 8px;
            font-size: 30px;
            transition: background-color 0.3s ease, transform 0.3s ease;
            text-decoration: none;
            margin-top: 30px;
        }

        .next-button:hover {
            background-color: #f57c00;
            transform: scale(1.05);
        }
    </style>
</head>

<body>
    <div class="container">
        <img src="retrieve_image.php?id=18" alt="Image">
        <h1>Chúc mừng bạn đã hoàn thành bài học!!</h1>
        <audio autoplay>
            <source src="retrieve_file.php?id=1" type="audio/mpeg">
        </audio>
        <a id="nextPageLink" href="dashboard.php" id="nextButton" class="hidden next-button">Học tiếp</a>

    </div>
</body>

</html>