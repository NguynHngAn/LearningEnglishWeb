<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Màu sắc</title>
  <link rel="stylesheet" href="stylechoicecolors.css">
  <?php include 'timeout.php'; ?>
  <style>
    body {
      background-image: url('retrieve_images.php?id=19');
    }
  </style>
</head>

<body>
  <div class="quiz-container">
    <h1></h1>
    <p class="top-left-info">Màu sắc</p>
    <p class="top-right-info">Câu 2/10</p>
    <p class="question">Hãy chọn "Màu đỏ"</p>
    <div class="answers-container">
      <button id="choice1" class="choice" onclick="checkAnswer(true, 12)">
        <div class="answer-content">
          <div class="answer-image">
            <img src="retrieve_image.php?id=8" alt="Image">
          </div>
          <div class="answer-text">Red</div>
        </div>
      </button>
      <button id="choice2" class="choice" onclick="checkAnswer(false, 10)">
        <div class="answer-content">
          <div class="answer-image">
            <img src="retrieve_image.php?id=6" alt="Image">
          </div>
          <div class="answer-text">Blue</div>
        </div>
      </button>
      <button id="choice3" class="choice" onclick="checkAnswer(false, 14)">
        <div class="answer-content">
          <div class="answer-image">
            <img src="retrieve_image.php?id=9" alt="Image">
          </div>
          <div class="answer-text">Yellow</div>
        </div>
      </button>
      <button id="choice4" class="choice" onclick="checkAnswer(false, 11)">
        <div class="answer-content">
          <div class="answer-image">
            <img src="retrieve_image.php?id=7" alt="Image">
          </div>
          <div class="answer-text">Green</div>
        </div>
      </button>
    </div>
    <p id="congratulations" class="hidden">Bạn đã trả lời đúng. Xin chúc mừng!</p>
    <div id="nextPage" class="hidden">
      <a href="colors3.php" id="nextButton" class="hidden next-button">Tiếp theo</a>
    </div>
  </div>
  <script>
    const correctSound = new Audio("retrieve_file.php?id=");
    const incorrectSound = new Audio("retrieve_file.php?id=7");
    const congratulationsSound = new Audio("retrieve_file.php?id=8");
    const choices = document.querySelectorAll(".choice");
    const congratulationsMessage = document.getElementById("congratulations");
    const nextPage = document.getElementById("nextPage");
    const nextButton = document.getElementById("nextButton");

    let correctAnswerChosen = false;

    function playSound(audio) {
      audio.currentTime = 0;
      audio.play();
    }

    function disableChoiceButtons() {
      choices.forEach(button => button.disabled = true);
    }

    function enableChoiceButtons() {
      choices.forEach(button => button.disabled = false);
    }

    function checkAnswer(isCorrect, audioID) {
      const answerSound = new Audio("retrieve_file.php?id=" + audioID);

      playSound(answerSound);

      if (!correctAnswerChosen) {
        if (isCorrect) {
          correctAnswerChosen = true;
          playSound(correctSound);
          setTimeout(() => {
            playSound(congratulationsSound);
            congratulationsMessage.classList.remove("hidden");
            nextPage.classList.remove("hidden");
            nextButton.classList.remove("hidden");
            disableChoiceButtons();
          }, congratulationsSound.duration * 400);
        } else {
          setTimeout(() => {
            playSound(incorrectSound);
          }, incorrectSound.duration * 100);
        }
      }
    }
  </script>
</body>

</html>
