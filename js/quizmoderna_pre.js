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
    question: "Qual evento histórico marcou o início da Idade Moderna?",
    answers: [
      { text: "A queda de Constantinopla", correct: true },
      { text: "A Revolução Industrial", correct: false },
      { text: "A descoberta da América", correct: false },
      { text: "A Revolução Francesa", correct: false }
    ]
  },
  {
    question: "Quem foi o navegador português que chegou ao Brasil em 1500?",
    answers: [
      { text: "Cristóvão Colombo", correct: false },
      { text: "Vasco da Gama", correct: false },
      { text: "Pedro Álvares Cabral", correct: true },
      { text: "Fernão de Magalhães", correct: false }
    ]
  },
  {
    question: "O Renascimento começou em qual região da Europa?",
    answers: [
      { text: "França", correct: false },
      { text: "Itália", correct: true },
      { text: "Inglaterra", correct: false },
      { text: "Alemanha", correct: false }
    ]
  },
  {
    question: "Quem foi o líder da Revolução Francesa?",
    answers: [
      { text: "Napoleão Bonaparte", correct: false },
      { text: "Luís XVI", correct: false },
      { text: "Robespierre", correct: true },
      { text: "Carlos Magno", correct: false }
    ]
  },
  {
    question: "Qual invenção de Gutenberg revolucionou a comunicação?",
    answers: [
      { text: "A imprensa", correct: true },
      { text: "O telefone", correct: false },
      { text: "A máquina a vapor", correct: false },
      { text: "O avião", correct: false }
    ]
  },
  {
    question: "Verdadeiro ou Falso: A Revolução Industrial começou no século XVI.",
    answers: [
      { text: "Verdadeiro", correct: false },
      { text: "Falso", correct: true }
    ]
  },
  {
    question: "O que foi a Reforma Protestante?",
    answers: [
      { text: "Uma guerra contra os franceses", correct: false },
      { text: "Uma mudança religiosa que iniciou na Alemanha", correct: true },
      { text: "A invenção da imprensa", correct: false },
      { text: "A independência da Inglaterra", correct: false }
    ]
  }
];
