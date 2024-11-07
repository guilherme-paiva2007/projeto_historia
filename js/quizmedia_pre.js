const $startGameButton = document.querySelector(".start-quiz")
const $nextQuestionButton = document.querySelector(".next-question")
const $questionsContainer = document.querySelector(".questions-container")
const $questionText = document.querySelector(".question")
const $answersContainer = document.querySelector(".answers-container")
const $answers = document.querySelectorAll(".answer")

let currentQuestionIndex = 0
let totalCorrect = 0

$startGameButton.addEventListener("click", startGame)
$nextQuestionButton.addEventListener("click", displayNextQuestion)

function startGame() {
  $startGameButton.classList.add("hide")
  $questionsContainer.classList.remove("hide")
  displayNextQuestion()
}

function displayNextQuestion() {
  resetState()
  
  if (questions.length === currentQuestionIndex) {
    return finishGame()
  }

  $questionText.textContent = questions[currentQuestionIndex].question
  questions[currentQuestionIndex].answers.forEach(answer => {
    const newAsnwer = document.createElement("button")
    newAsnwer.classList.add("button", "answer")
    newAsnwer.textContent = answer.text
    if (answer.correct) {
      newAsnwer.dataset.correct = answer.correct
    }
    $answersContainer.appendChild(newAsnwer)

    newAsnwer.addEventListener("click", selectAnswer)
  })
}

function resetState() {
  while($answersContainer.firstChild) {
    $answersContainer.removeChild($answersContainer.firstChild)
  }

  document.body.removeAttribute("class")
  $nextQuestionButton.classList.add("hide")
}

function selectAnswer(event) {
  const answerClicked = event.target

  if (answerClicked.dataset.correct) {
    document.body.classList.add("correct")
    totalCorrect++
  } else {
    document.body.classList.add("incorrect") 
  }

  document.querySelectorAll(".answer").forEach(button => {
    button.disabled = true

    if (button.dataset.correct) {
      button.classList.add("correct")
    } else {
      button.classList.add("incorrect")
    }
  })
  
  $nextQuestionButton.classList.remove("hide")
  currentQuestionIndex++
}

function finishGame() {
  const totalQuestions = questions.length
  const performance = Math.floor(totalCorrect * 100 / totalQuestions)
  
  let message = ""

  switch (true) {
    case (performance >= 90):
      message = "Excelente :)"
      break
    case (performance >= 70):
      message = "Muito bom :)"
      break
    case (performance >= 50):
      message = "Bom"
      break
    default:
      message = "Pode melhorar :("
  }

  $questionsContainer.innerHTML = 
  `
    <p class="final-message">
      Você acertou ${totalCorrect} de ${totalQuestions} questões!
      <span>Resultado: ${message}</span>
    </p>
    <button 
      onclick=window.location.reload() 
      class="button"
    >
      Refazer teste
    </button>
  `
}

const questions = [
  {
    question: "Qual evento marcou o início da Idade Média?",
    answers: [
      { text: "A queda de Roma", correct: true },
      { text: "A Revolução Francesa", correct: false },
      { text: "A descoberta da América", correct: false },
      { text: "A invenção da imprensa", correct: false }
    ]
  },
  {
    question: "Qual era a principal instituição que exercia influência sobre a sociedade medieval?",
    answers: [
      { text: "A Igreja Católica", correct: true },
      { text: "A Monarquia", correct: false },
      { text: "O Império Romano", correct: false },
      { text: "As Guildas", correct: false }
    ]
  },
  {
    question: "Quem liderou a invasão da Inglaterra em 1066, conhecida como a Conquista Normanda?",
    answers: [
      { text: "Guilherme, o Conquistador", correct: true },
      { text: "Carlos Magno", correct: false },
      { text: "Ricardo Coração de Leão", correct: false },
      { text: "Joana d'Arc", correct: false }
    ]
  },
  {
    question: "Qual foi o objetivo principal das Cruzadas?",
    answers: [
      { text: "Recuperar Jerusalém dos muçulmanos", correct: true },
      { text: "Expandir o território europeu", correct: false },
      { text: "Unificar a Europa sob um só rei", correct: false },
      { text: "Descobrir novas rotas comerciais", correct: false }
    ]
  },
  {
    question: "Quem foi o imperador do Sacro Império Romano-Germânico no século IX?",
    answers: [
      { text: "Carlos Magno", correct: true },
      { text: "Guilherme, o Conquistador", correct: false },
      { text: "Fernando II", correct: false },
      { text: "Henrique VIII", correct: false }
    ]
  },
  {
    question: "Verdadeiro ou Falso: O feudalismo foi o sistema econômico predominante na Idade Média.",
    answers: [
      { text: "Verdadeiro", correct: true },
      { text: "Falso", correct: false }
    ]
  },
  {
    question: "Quem foi a heroína francesa que liderou tropas contra os ingleses durante a Guerra dos Cem Anos?",
    answers: [
      { text: "Joana d'Arc", correct: true },
      { text: "Isabel I", correct: false },
      { text: "Maria Antonieta", correct: false },
      { text: "Eleanor de Aquitânia", correct: false }
    ]
  }
];
