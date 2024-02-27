<!DOCTYPE html>
<html>

<head>
    <title>Học tiếng Anh - Quả cam</title>
    <?php include 'timeout.php'; ?>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            margin: 0;
            padding: 0;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            background-image: url('retrieve_images.php?id=19');
            background-size: cover;
        }

        .fruit-block {
            padding: 30px;
            border: 2px solid #333;
            border-radius: 10px;
            cursor: pointer;
            display: none;
            /* Ẩn tất cả các block ban đầu */
            background-color: #b5f469;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }

        .fruit-image {
            width: 200px;
            height: 200px;
            border-radius: 50%;
        }

        .fruit-name {
            font-size: 27px;
            font-weight: bold;
            margin-top: 10px;
        }

        #fruit-container {
            margin-top: 30px;
        }

        .next-button {
            position: fixed;
            bottom: 10%;
            left: 45%;
            transform: translateX(-50%);
            background-color: green;
            color: white;
            padding: 10px 15px;
            border: none;
            cursor: pointer;
            border-radius: 10px;

        }

        .next-button.disabled {
            background-color: #ccc;
            /* Màu xám nhạt */
            cursor: not-allowed;
            /* Thay đổi con trỏ chuột */
        }

        .back-button {
            position: fixed;
            bottom: 10%;
            left: 60%;
            transform: translateX(-150%);
            /* Điều chỉnh vị trí nút */
            background-color: #333;
            /* Màu đen */
            color: white;
            padding: 10px 15px;
            border: none;
            cursor: pointer;
            border-radius: 10px;
            transition: background-color 0.3s;
            /* Hiệu ứng chuyển màu */
            display: none;
            /* Ẩn nút quay lại ban đầu */
        }

        .back-button:hover {
            background-color: #555;
            /* Màu xám nhạt khi hover */
        }

        .next-button:hover {
            background-color: #45a049;
            /* Màu xanh lá nhạt khi hover */
        }

        .close-button {
            position: fixed;
            top: 20px;
            left: 20px;
            width: 40px;
            /* Độ rộng của khối hình vuông */
            height: 40px;
            /* Chiều cao của khối hình vuông */
            background-color: rgb(233, 38, 38);
            color: rgb(243, 243, 243);
            border: none;
            border-radius: 5px;
            /* Bo tròn viền của nút */
            border: 2px solid rgb(81, 81, 81);
            cursor: pointer;
            font-size: 20px;
            display: flex;
            justify-content: center;
            align-items: center;

        }

        .close-button:hover {
            background-color: rgb(225, 97, 97);
        }

        .icon {
            position: fixed;
            top: 5vw;
            right: 5vw;
            transform: translate(0, -50%);
            width: 25vw;
            height: auto;
            animation: pulse-scale 1.2s infinite;
        }

        @keyframes pulse-scale {

            0%,
            100% {
                transform: scale(1);
            }

            50% {
                transform: scale(1.3);
            }
        }

        .small-icon {
            width: 25vw;
            height: auto;
        }

        .icon-left {
            position: fixed;
            bottom: 4vw;
            left: 5vw;
            transform: translate(0, 0);
            animation: pulse-scale 1.2s infinite;
        }

        .small-icon-left {
            width: 25vw;
            height: auto;
            animation: shake 0.5s infinite;
        }


        .challenge-button {
            position: fixed;
            bottom: 10%;
            /* Điều chỉnh vị trí dưới cùng */
            left: 80%;
            background-color: #007bff;
            /* Màu xanh dương */
            color: white;
            padding: 20px 2%;
            border: none;
            cursor: pointer;
            border-radius: 10px;
            transition: background-color 0.3s;
            /* Hiệu ứng chuyển màu */
            font-size: 30px;
        }

        .challenge-button:hover {
            background-color: #0056b3;
            /* Màu xanh dương nhạt khi hover */
        }

        .choice .Image {
            width: 50px;
            height: 50px;
            position: absolute;
            top: 510px;
            right: 500px;
        }
    </style>
</head>

<body>

    <div class="icon">
        <img class="small-icon" src="retrieve_images.php?id=4" alt="Icon" />
    </div>
    <div class="icon-left">
        <img class="small-icon-left" src="retrieve_images.php?id=6" alt="Icon Right">
    </div>

    <div id="fruit-container">
        <div>
            <div class="fruit-block" onclick="playAudio('')">
                <div class="fruit-name">Orange /ɒrɪndʒ/: cam</div>
                <img class="fruit-image" src="retrieve_image.php?id=22" alt="">
                <button id="choice1" class="choice" onclick="checkAnswer(false, 11)">
                    <img class="Image" src="retrieve_images.php?id=18" alt="Image">
                </button>
            </div>

            <div class="fruit-block" onclick="playAudio('')">
                <div class="fruit-name">Apple /’æpl/: táo</div>
                <img class="fruit-image" src="retrieve_images.php?id=15" alt="">
                <button id="choice1" class="choice" onclick="checkAnswer(false, 22)">
                    <img class="Image" src="retrieve_images.php?id=18" alt="Image">
                </button>
            </div>

            <div class="fruit-block" onclick="playAudio('')">
                <div class="fruit-name">Banana /bə’nɑ:nə/: chuối</div>
                <img class="fruit-image" src="retrieve_image.php?id=25" alt="">
                <button id="choice1" class="choice" onclick="checkAnswer(false, 20)">
                    <img class="Image" src="retrieve_images.php?id=18" alt="Image">
                </button>
            </div>

            <div class="fruit-block" onclick="playAudio('')">
                <div class="fruit-name">Grape /greɪp/: nho</div>
                <img class="fruit-image" src="retrieve_images.php?id=12" alt="">
                <button id="choice1" class="choice" onclick="checkAnswer(false, 6)">
                    <img class="Image" src="retrieve_images.php?id=18" alt="Image">
                </button>
            </div>

            <div class="fruit-block" onclick="playAudio('')">
                <div class="fruit-name">Watermelon /’wɔ:tə´melən/: dưa hấu</div>
                <img class="fruit-image" src="retrieve_image.php?id=27" alt="">
                <button id="choice1" class="choice" onclick="checkAnswer(false, 15)">
                    <img class="Image" src="retrieve_images.php?id=18" alt="Image">
                </button>
            </div>

            <div class="fruit-block" onclick="playAudio('')">
                <div class="fruit-name">Coconut /’koukənʌt/: dừa</div>
                <img class="fruit-image" src="retrieve_image.php?id=26" alt="">
                <button id="choice1" class="choice" onclick="checkAnswer(false, 1)">
                    <img class="Image" src="retrieve_images.php?id=18" alt="Image">
                </button>
            </div>

            <div class="fruit-block" onclick="playAudio('')">
                <div class="fruit-name">Strawberry /ˈstrɔ:bəri/: dâu tây</div>
                <img class="fruit-image" src="retrieve_images.php?id=20" alt="">
                <button id="choice1" class="choice" onclick="checkAnswer(false, 14)">
                    <img class="Image" src="retrieve_images.php?id=18" alt="Image">
                </button>
            </div>

            <div class="fruit-block" onclick="playAudio('')">
                <div class="fruit-name">Mango /´mæηgou/: xoài</div>
                <img class="fruit-image" src="retrieve_images.php?id=17" alt="">
                <button id="choice1" class="choice" onclick="checkAnswer(false, 10)">
                    <img class="Image" src="retrieve_images.php?id=18" alt="Image">
                </button>
            </div>

            <div class="fruit-block" onclick="playAudio('')">
                <div class="fruit-name">Kiwi fruit /’ki:wi:fru:t/: kiwi</div>
                <img class="fruit-image" src="retrieve_images.php?id=10" alt="">
                <button id="choice1" class="choice" onclick="checkAnswer(false, 8)">
                    <img class="Image" src="retrieve_images.php?id=18" alt="Image">
                </button>
            </div>

            <div class="fruit-block" onclick="playAudio('')">
                <div class="fruit-name">Avocado /¸ævə´ka:dou/: bơ</div>
                <img class="fruit-image" src="retrieve_image.php?id=21" alt="">
                <button id="choice1" class="choice" onclick="checkAnswer(false, 21)">
                    <img class="Image" src="retrieve_images.php?id=18" alt="Image">
                </button>
            </div>

        </div>
        <button class="next-button" onclick="showNextBlock()">Kế tiếp</button>
        <button class="back-button" onclick="showPreviousBlock()">Quay lại</button>
        <button class="close-button" onclick="goBack()">X</button>
        <button class="challenge-button" onclick="openChallengePage()">Kiểm tra</button>
        <div>

            <audio id="english-audio"></audio>



            <script>
                let correctAnswerChosen = false;

                function playSound(audio) {
                    audio.currentTime = 0;
                    audio.play();
                }

                function checkAnswer(isCorrect, audioID) {
                    const answerSound = new Audio("retrieve_files.php?id=" + audioID);

                    playSound(answerSound);

                    if (!correctAnswerChosen) {
                        if (isCorrect) {
                            correctAnswerChosen = true;
                            playSound(congratulationsSound);
                            nextPage.classList.remove("hidden");
                            nextButton.classList.remove("hidden");
                            disableChoiceButtons();
                        }
                    }
                }

            </script>

            <script>
                let currentBlockIndex = 0;
                const fruitBlocks = document.querySelectorAll('.fruit-block');
                const nextButton = document.querySelector('.next-button');
                const backButton = document.querySelector('.back-button');
                const challengeButton = document.querySelector('.challenge-button');

                function showNextBlock() {
                    if (currentBlockIndex === fruitBlocks.length - 2) {
                        nextButton.disabled = true;
                        nextButton.classList.add('disabled');
                    }

                    if (fruitBlocks[currentBlockIndex].style.display === 'block') {
                        fruitBlocks[currentBlockIndex].style.display = 'none';
                    }

                    currentBlockIndex = (currentBlockIndex + 1) % fruitBlocks.length;
                    fruitBlocks[currentBlockIndex].style.display = 'block';

                    backButton.style.display = 'block';
                    updateChallengeButtonVisibility();
                }

                function showPreviousBlock() {
                    if (fruitBlocks[currentBlockIndex].style.display === 'block') {
                        fruitBlocks[currentBlockIndex].style.display = 'none';
                    }

                    currentBlockIndex = (currentBlockIndex - 1 + fruitBlocks.length) % fruitBlocks.length;
                    fruitBlocks[currentBlockIndex].style.display = 'block';

                    nextButton.disabled = false;
                    nextButton.classList.remove('disabled');

                    if (currentBlockIndex === 0) {
                        backButton.style.display = 'none';
                    }
                    updateChallengeButtonVisibility();
                }

                function goBack() {
                    window.history.back();
                }

                function updateChallengeButtonVisibility() {
                    const isAvocadoBlock = fruitBlocks[currentBlockIndex].querySelector('.fruit-name').textContent.includes('Avocado');
                    challengeButton.style.display = isAvocadoBlock ? 'block' : 'none';
                }

                fruitBlocks[currentBlockIndex].style.display = 'block';

                function openChallengePage() {
                    window.location.href = 'fruit1.php';
                }

                updateChallengeButtonVisibility(); // Update visibility on page load
            </script>
</body>

</html>