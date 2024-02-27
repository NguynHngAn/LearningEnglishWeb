const correctSound = new Audio("");
const incorrectSound = new Audio("wrong-answer.mp3");
const congratulatorySound = new Audio("right-answer.mp3");
const choices = document.querySelectorAll(".choice");
const congratulationsMessage = document.getElementById("congratulations");
const nextPage = document.getElementById("nextPage");
const nextButton = document.getElementById("nextButton");

let correctAnswerChosen = false; // Tracks if the correct answer is chosen
function playSound(audio) {
    audio.currentTime = 0; // Reset audio to start playing from the beginning
    audio.play();
}

function disableChoiceButtons() {
    choices.forEach(button => button.disabled = true);
}

function enableChoiceButtons() {
    choices.forEach(button => button.disabled = false);
}

function checkAnswer(isCorrect, soundFileName) {
    const answerSound = new Audio(soundFileName);

    playSound(answerSound);

    if (!correctAnswerChosen) {
        if (isCorrect) {
            correctAnswerChosen = true;
            playSound(correctSound);
            setTimeout(() => {
                playSound(congratulatorySound);
                congratulationsMessage.classList.remove("hidden");
                nextPage.classList.remove("hidden");
                nextButton.classList.remove("hidden");
                disableChoiceButtons(); // Disable buttons after a correct answer
            }, congratulatorySound.duration * 1000);
        } else {

            setTimeout(() => {
                playSound(incorrectSound);
            }, incorrectSound.duration * 100);
            // Apply bouncing animation to question text
            questionElement.classList.add("bounce");
            // Remove animation class after animation completes
            questionElement.addEventListener("animationend", function () {
                questionElement.classList.remove("bounce");
            });
        }
    }
}

