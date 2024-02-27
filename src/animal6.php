<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Quiz Game</title>
  <?php include 'timeout.php'; ?>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f0f0f0;
      margin: 0;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      background-image: url('retrieve_images.php?id=19');

      background-size: cover;
      background-repeat: no-repeat;
      background-position: center;
    }

    .quiz-container {
      background-color: rgba(255, 255, 255, 0.9);
      /* padding: 30px; */
      border-radius: 15px;
      box-shadow: 0 0 20px rgba(0, 0, 0, 0.3);
      text-align: center;
      width: 90%;
      max-width: 700px;
      margin: 0 auto;
      position: relative;
      animation: fadeInUp 1s ease both;
      height: 750px;
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
    }


    .question {
      font-size: 30px;
      color: #3680ca;
      animation: bounce 1s infinite;
    }

    .question img {
      width: 280px; /* Adjust the width as needed */
      height: auto; 
    }

    /*boing boing effect*/
    @keyframes bounce {

      0%,
      100% {
        transform: translateY(0);

      }

      50% {
        transform: translateY(-10px);

      }
    }

    .choice {
      width: calc(50% - 20px);
      background-color: rgb(175, 250, 89);
      color: white;
      border: none;
      padding: 10px;
      margin: 10px;
      cursor: pointer;
      border-radius: 8px;
      font-size: 30px;
      transition: background-color 0.3s ease;
      animation: fadeInRight 1s ease both;
      position: relative;
      /* Add relative positioning for the image */
      overflow: hidden;
      /* Hide any overflow from the image */
      text-align: center;
      display: flex;
      flex-direction: column;
      transition: transform 0.3s ease;
      /* Add transition for smooth zoom effect */
    }

    .choice:hover {
      background-color: #2ac437;
      transform: scale(1.1);
      transition: background-color 0.3s ease, transform 0.3s ease;
    }

    #congratulations {
      font-size: 28px;
      /* Increase font size */
      color: #ff9800;
      margin-top: 20px;
      /* display: none; */
      animation: fadeInUp 1.5s ease both;
    }

    #congratulations.active {
      display: block;
      animation: fadeInUp 1.5s ease both, pulse 2s infinite;
    }

    @keyframes pulse {
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

    .next-page {
      margin-top: 20px;
      animation: fadeInUp 2s ease both;
    }

    #nextPage {
      display: flex;
      flex-direction: column;
      align-items: center;
    }

    .hidden {
      display: none;
      size: 20px;
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
    }

    .next-button:hover {
      background-color: #f57c00;
      transform: scale(1.05);
    }

    .top-left-info,
    .top-right-info {
      position: absolute;
      top: 20px;
      font-size: 20px;
      font-weight: bold;
      transition: transform 0.3s ease, color 0.3s ease;
      color: rgb(235, 122, 17);
      /* Add transition effect */
    }

    .top-left-info:hover,
    .top-right-info:hover {
      color: #ff9800;
      /* Change color on hover */
      transform: scale(1.1);
      /* Add scaling effect on hover */
    }

    .top-left-info {
      left: 20px;
    }

    .top-right-info {
      right: 20px;
    }

    .question {
      padding-top: 20px;
      font-size: 30px;
      font-weight: bold;
      animation: fadeInUp 2s ease both;
    }


    .choice img {
      max-width: 81%;
      max-height: 100%;
      object-fit:fill;
      opacity: 0.7;
      transition: opacity 0.3s ease, transform 0.3s ease;

    }

    .choice:hover img {
      opacity: 1;
      transform: scale(1.06);
    }

    .upper-answers {
      display: flex;
      justify-content: space-between;
    }

    .lower-answers {
      display: flex;
      justify-content: center;
    }

    .answer-image {
      flex: 1;
      display: flex;
      justify-content: center;
      align-items: flex-start;
      padding: 0 10px;
    }

    .answer-text {
      flex: 1;
      display: flex;
      justify-content: center;
      align-items: center;
    }

    .answers-container {
      display: flex;
      justify-content: space-between;
      flex-wrap: wrap;
      max-width: 450px;
      margin: 0 auto;

    }

    .answer-content {
      flex: 1;
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      width: 100%;
      transition: opacity 0.3s ease, transform 0.3s ease;

    }

    .answers-content:hover {
      transform: scale(1.1);
    }
  </style>
</head>

<body>
    <div class="quiz-container">
      <h1></h1>
      <p class="top-left-info">Con vật</p>
      <p class="top-right-info">Câu 6/10</p>
      <div class="question">
      <img src="retrieve_image.php?id=20" alt="Image">
        <p class="question">Tên tiếng Anh của con Báo là gì?</p>
      </div>
      <div class="answers-container">
        <button id="choice1" class="choice" onclick="checkAnswer(true, 13)">Puma</button>
        <button id="choice2" class="choice" onclick="checkAnswer(false, 4)">Fox</button>
        <button id="choice3" class="choice" onclick="checkAnswer(false, 3)">Elephant</button>
        <button id="choice4" class="choice" onclick="checkAnswer(false, 2)">Dog</button>
    </div>
   
    <div id="nextPage" class="hidden">
      <p class="hidden" id="congratulations">You're correct. GREAT!</p>
      <a href="animal7.php" id="nextButton" class="hidden next-button">Next</a>
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
  
      const congratulatoryMessages = [
        "You're correct. GREAT!",
        "Amazing! That's the right answer!",
        "Fantastic job! You got it right!",
        "Impressive! You're correct!"
      ];
  
      const encouragementMessages = [
        "Don't worry, try again! You've got this!",
        "Oops, that's not quite right. Keep going!",
        "Almost there! Keep trying!",
        "No worries, keep going and give it another shot!"
      ];
  
      function getRandomMessage(messages) {
        const randomIndex = Math.floor(Math.random() * messages.length);
        return messages[randomIndex];
      }
  
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
      const answerSound = new Audio("retrieve_files.php?id=" + audioID);

        playSound(answerSound);
  
        if (!correctAnswerChosen) {
          if (isCorrect) {
            correctAnswerChosen = true;
            playSound(congratulationsSound);
            const randomCongratulatoryMessage = getRandomMessage(congratulatoryMessages);
            congratulationsMessage.textContent = randomCongratulatoryMessage;
            congratulationsMessage.classList.remove("hidden");
            nextPage.classList.remove("hidden");
            nextButton.classList.remove("hidden");
            disableChoiceButtons();
          } else {
            setTimeout(() => {
              playSound(incorrectSound);
            }, incorrectSound.duration * 100);
            const randomEncouragementMessage = getRandomMessage(encouragementMessages);
            congratulationsMessage.textContent = randomEncouragementMessage;
            congratulationsMessage.classList.remove("hidden");
          }
        }
      }
    </script>
  </body>
  
  </html>