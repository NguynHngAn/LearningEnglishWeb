<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gia đình</title>
    <?php include 'timeout.php'; ?>
    <link rel="stylesheet" href="styleblankfamily.css">
    <style>
    body {
      background-image: url('retrieve_images.php?id=19');
    }
  </style>
</head>

<body>
    <div class="container">
        <p class="top-left-info">Gia đình</p>
        <p class="top-right-info">Câu 6/10</p>
        <h1 class="question">Hãy nhập "Em bé"</h1>
        <input type="text" id="textInput" placeholder="Enter your answer" oninput="checkInput()">
        <p id="result"></p>

        <a id="nextPageLink" href="family7.php" id="nextButton" class="hidden next-button">Next</a>
        <!-- Hidden by default -->
    </div>
    <audio id="correctSound"></audio> <!-- Empty audio element -->
    <audio id="congratulatorySound"></audio> <!-- Empty audio element -->
    <audio id="extraSound"></audio> <!-- Empty audio element for extra sound -->

    <script>
        const correctSound = document.getElementById("correctSound");
        const congratulatorySound = document.getElementById("congratulatorySound");
        const extraSound = document.getElementById("extraSound");
        const nextPageLink = document.getElementById("nextPageLink");
        const inputElement = document.getElementById("textInput");

        let answered = false;

        async function setAudioSource() {
            const response = await fetch('retrieve_file.php?id=15');
            const audioData = await response.blob();

            correctSound.src = URL.createObjectURL(audioData);
        }

        async function setExtraAudioSource() {
            const response = await fetch('retrieve_file.php?id=8'); // Replace with the actual audio ID for the extra sound
            const audioData = await response.blob();

            extraSound.src = URL.createObjectURL(audioData);
        }

        setAudioSource();
        setExtraAudioSource();

        function checkInput() {
            if (answered) {
                return;
            }

            const inputValue = inputElement.value.trim().toLowerCase();

            const correctAnswers = ["baby"];
            const resultElement = document.getElementById("result");

            if (correctAnswers.includes(inputValue)) {
                resultElement.textContent = "Bạn đã trả lời đúng. Xin chúc mừng!";
                playCorrectSound();
                setTimeout(() => {
                    playCongratulatorySound();
                    playExtraSound(); // Play the extra sound
                }, congratulatorySound.duration * 1200);

                nextPageLink.classList.remove("hidden");
                answered = true;
                inputElement.disabled = true;
            } else {
                resultElement.textContent = "";
            }
        }

        function playCorrectSound() {
            correctSound.currentTime = 0;
            correctSound.play();
        }

        function playCongratulatorySound() {
            congratulatorySound.currentTime = 0;
            congratulatorySound.play();
        }

        function playExtraSound() {
            extraSound.currentTime = 0;
            extraSound.play();
        }

    </script>
</body>

</html>
