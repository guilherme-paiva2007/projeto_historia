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
    question: "Qual é o nome do período em que os primeiros seres humanos surgiram?",
    answers: [
      { text: "Idade Média", correct: false },
      { text: "Idade Antiga", correct: false },
      { text: " Pré-história", correct: true },
      { text: "Idade Moderna", correct: false }
    ]
  },
  {
    question: "Em que período os primeiros seres humanos começaram a usar ferramentas de pedra?",
    answers: [
      { text: "Paleolítico", correct: true },
      { text: "Neolítico", correct: false },
      { text: "Idade do Ferro", correct: false },
      { text: "Idade do Bronze", correct: false }
    ]
  },
  {
    question: 'Qual animal foi domesticado primeiro pelo ser humano?',
    answers: [
      { text: 'Cão', correct: true },
      { text: 'Gato', correct: false },
      { text: 'Ovelha', correct: false },
      { text: "Nenhuma das alternativas", correct: false }
    ]
  },
  {
    question: 'Os seres humanos pré-históricos usavam metal para fabricar ferramentas durante o período Paleolítico. ',
    answers: [
      { text: "Verdadeiro", correct: false },
      { text: "Falso", correct: true }
    ]
  },
  {
    question: 'O que os primeiros seres humanos utilizavam para caçar?',
    answers: [
      { text: 'Facas de metal', correct: false },
      { text: 'Lanças e pedras', correct: true },
      { text: 'Redes', correct: false },
      { text: 'Arcos e flechas', correct: false }
    ]
  },
  {
    question: 'Qual é o nome da técnica de pintura usada nas cavernas pré-históricas?',
    answers: [
      { text: 'Pintura a óleo', correct: false },
      { text: ' Pintura rupestre', correct: true },
      { text: 'Pintura em tela', correct: false },
      { text: 'Escultura em pedra', correct: false }
    ]
  },
  {
    question: 'Onde foram encontradas as primeiras evidências de civilizações na pré-história? ',
    answers: [
      { text: 'Europa', correct: false },
      { text: ' América', correct: false },
      { text: 'Ásia', correct: false },
      { text: 'África', correct: true },
    ]
  },
]

