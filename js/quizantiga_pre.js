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
    question: "Qual foi a primeira grande civilização da Idade Antiga?",
    answers: [
      { text: " Romanos", correct: false },
      { text: "Gregos", correct: false },
      { text: "  Mesopotâmios", correct: true },
      { text: "Egípcios", correct: false }
    ]
  },
  { 
    question: "Em qual civilização surgiu a escrita cuneiforme?",
    answers: [
      { text: "Suméria", correct: true },
      { text: "Grega", correct: false },
      { text: "Romana", correct: false },
      { text: "Egípcia", correct: false }
    ]
  },
  {
    question: 'Qual império foi o maior da Idade Antiga?',
    answers: [
      { text: 'Império Romano', correct: true },
      { text: 'Império Chinês', correct: false },
      { text: 'Império Persa', correct: false },
      { text: "Império Egípcio", correct: false }
    ]
  },
  {
    question: 'A invenção da roda ocorreu durante a Idade Antiga.',
    answers: [
      { text: "Verdadeiro", correct: true },
      { text: "Falso", correct: false }
    ]
  },
  {
    question: 'Qual filósofo grego é conhecido como o "Pai da Filosofia"?',
    answers: [
      { text: ' Platão', correct: false },
      { text: 'Sócrates', correct: true },
      { text: 'Aristóteles', correct: false },
      { text: ' Pitágoras', correct: false }
    ]
  },
  {
    question: 'Qual foi o nome da famosa guerra entre Esparta e Atenas?',
    answers: [
      { text: 'Pintura a óleo', correct: false },
      { text: ' Pintura rupestre', correct: true },
      { text: 'Pintura em tela', correct: false },
      { text: 'Escultura em pedra', correct: false }
    ]
  },
  {
    question: 'Em que período os egípcios começaram a construir as pirâmides? ',
    answers: [
      { text: 'Europa', correct: false },
      { text: ' América', correct: false },
      { text: 'Ásia', correct: false },
      { text: 'África', correct: true },
    ]
  },
]

