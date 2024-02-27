<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Gia đình</title>
  <link rel="stylesheet" href="stylechoicefamily.css">
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
    <p class="top-left-info">Gia đình</p>
    <p class="top-right-info">Câu 1/10</p>
    <p class="question">Hãy chọn "Bố"</p>
    <div class="answers-container">
      <button id="choice1" class="choice" onclick="checkAnswer(true, 17)">
        <div class="answer-content">
          <div class="answer-image">
            <img src="retrieve_image.php?id=4" alt="Image">
          </div>
          <div class="answer-text">Father</div>
        </div>
      </button>
      <button id="choice2" class="choice" onclick="checkAnswer(false, 18)">
        <div class="answer-content">
          <div class="answer-image">
            <img src="retrieve_image.php?id=5" alt="Image">
          </div>
          <div class="answer-text">Mother</div>
        </div>
      </button>
      <button id="choice3" class="choice" onclick="checkAnswer(false, 19)">
        <div class="answer-content">
          <div class="answer-image">
            <img src="retrieve_image.php?id=1" alt="Image">
          </div>
          <div class="answer-text">Sister</div>
        </div>
      </button>
      <button id="choice4" class="choice" onclick="checkAnswer(false, 16)">
        <div class="answer-content">
          <div class="answer-image">
            <img src="retrieve_image.php?id=3" alt="Image">
          </div>
          <div class="answer-text">Brother</div>
        </div>
      </button>
    </div>
    <p id="congratulations" class="hidden">Bạn đã trả lời đúng. Xin chúc mừng!</p>
    <div id="nextPage" class="hidden">
      <a href="family2.php" id="nextButton" class="hidden next-button">Tiếp theo</a>
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
