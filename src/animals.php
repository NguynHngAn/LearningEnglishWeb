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

        .animal-block {
            padding: 30px;
            border: 2px solid #333;
            border-radius: 10px;
            cursor: pointer;
            display: none;
            /* Ẩn tất cả các block ban đầu */
            background-color: #b5f469;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }

        .animal-image {
            width: 200px;
            height: 200px;
            border-radius: 50%;
        }

        .animal-name {
            font-size: 27px;
            font-weight: bold;
            margin-top: 10px;
        }

        #animal-container {
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

        .Image {
            width: 50px;
            height: 50px;
            position: absolute;
            top: 500px;
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

    <div id="animal-container">
        <div>

            <div class="animal-block" onclick="playAudio(1)">
                <img class="animal-image" src="retrieve_image.php?id=24">
                <div class="animal-name">Dog /dɔg/: Con chó</div>
                <button id="choice1" class="choice" onclick="checkAnswer(false, 2)">
                    <img class="Image" src="retrieve_images.php?id=18" alt="Image">
                </button>
            </div>

            <div class="animal-block" onclick="playAudio('Lion')">
                <img class="animal-image" src="retrieve_images.php?id=14">
                <div class="animal-name">Lion /ˈlaɪ.ən/: Con sư tử</div>
                <button id="choice1" class="choice" onclick="checkAnswer(false, 9)">
                    <img class="Image" src="retrieve_images.php?id=18" alt="Image">
                </button>
            </div>

            <div class="animal-block" onclick="playAudio('Cat')">
                <img class="animal-image" src="retrieve_images.php?id=11">
                <div class="animal-name">Cat /kæt/: Con mèo</div>
                <button id="choice1" class="choice" onclick="checkAnswer(false, 18)">
                    <img class="Image" src="retrieve_images.php?id=18" alt="Image">
                </button>
            </div>

            <div class="animal-block" onclick="playAudio('elephant')">
                <img class="animal-image" src="retrieve_images.php?id=16">
                <div class="animal-name">Elephant /ˈel.ɪ.fənt/: Con voi</div>
                <button id="choice1" class="choice" onclick="checkAnswer(false, 3)">
                    <img class="Image" src="retrieve_images.php?id=18" alt="Image">
                </button>
            </div>

            <div class="animal-block" onclick="playAudio('Fox')">
                <img class="animal-image" src="retrieve_image.php?id=23">
                <div class="animal-name">Fox – /fɑks/: Con cáo</div>
                <button id="choice1" class="choice" onclick="checkAnswer(false, 4)">
                    <img class="Image" src="retrieve_images.php?id=18" alt="Image">
                </button>
            </div>

            <div class="animal-block" onclick="playAudio('Hart')">
                <img class="animal-image" src="retrieve_images.php?id=9">
                <div class="animal-name">Hart – /hɑrt/: Con hươu</div>
                <button id="choice1" class="choice" onclick="checkAnswer(false, 7)">
                    <img class="Image" src="retrieve_images.php?id=18" alt="Image">
                </button>
            </div>

            <div class="animal-block" onclick="playAudio('panda')">
                <img class="animal-image" src="retrieve_images.php?id=13">
                <div class="animal-name">Panda – /’pændə/: Gấu trúc</div>
                <button id="choice1" class="choice" onclick="checkAnswer(false, 12)">
                    <img class="Image" src="retrieve_images.php?id=18" alt="Image">
                </button>
            </div>

            <div class="animal-block" onclick="playAudio('Bear')">
                <img class="animal-image" src="retrieve_images.php?id=7">
                <div class="animal-name"> Bear /ber/ : Con gấu</div>
                <button id="choice1" class="choice" onclick="checkAnswer(false, 19)">
                    <img class="Image" src="retrieve_images.php?id=18" alt="Image">
                </button>
            </div>

            <div class="animal-block" onclick="playAudio('Gorilla')">
                <img class="animal-image" src="retrieve_images.php?id=8">
                <div class="animal-name">Gorilla – /gəˈrɪl.ə/ : Vượn người</div>
                <button id="choice1" class="choice" onclick="checkAnswer(false, 5)">
                    <img class="Image" src="retrieve_images.php?id=18" alt="Image">
                </button>
            </div>

            <div class="animal-block" onclick="playAudio('puma')">
                <img class="animal-image" src="retrieve_image.php?id=20">
                <div class="animal-name">Puma – /pjumə/: Con báo</div>
                <button id="choice1" class="choice" onclick="checkAnswer(false, 13)">
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
                const animalBlocks = document.querySelectorAll('.animal-block');
                const nextButton = document.querySelector('.next-button');
                const backButton = document.querySelector('.back-button');
                const challengeButton = document.querySelector('.challenge-button');

                function showNextBlock() {
                    if (currentBlockIndex === animalBlocks.length - 2) {
                        nextButton.disabled = true;
                        nextButton.classList.add('disabled');
                    }

                    if (animalBlocks[currentBlockIndex].style.display === 'block') {
                        animalBlocks[currentBlockIndex].style.display = 'none';
                    }

                    currentBlockIndex = (currentBlockIndex + 1) % animalBlocks.length;
                    animalBlocks[currentBlockIndex].style.display = 'block';

                    backButton.style.display = 'block';
                    updateChallengeButtonVisibility();
                }

                function showPreviousBlock() {
                    if (animalBlocks[currentBlockIndex].style.display === 'block') {
                        animalBlocks[currentBlockIndex].style.display = 'none';
                    }

                    currentBlockIndex = (currentBlockIndex - 1 + animalBlocks.length) % animalBlocks.length;
                    animalBlocks[currentBlockIndex].style.display = 'block';

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
                    const isPumaBlock = animalBlocks[currentBlockIndex].querySelector('.animal-name').textContent.includes('Puma');
                    challengeButton.style.display = isPumaBlock ? 'block' : 'none';
                }

                animalBlocks[currentBlockIndex].style.display = 'block';

                function openChallengePage() {
                    window.open('animal1.php', '_blank');
                }

                updateChallengeButtonVisibility(); // Update visibility on page load
            </script>
</body>

</html>