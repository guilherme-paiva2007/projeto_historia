<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
      integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <link rel="stylesheet" href="./css/jogo_quiz.css" />
    <title>Quiz App</title>
  </head>
  <body>
  <button class="r" onclick="window.history.back()">&#8592; Voltar</button>
    <div class="container">
      <div class="start-screen">
        <h1 class="heading">Quiz App</h1>
        <div class="settings">
          <label for="num-questions">Number of Questions:</label>
          <select id="num-questions">
            <option value="5">5</option>
            <option value="10">10</option>
            <option value="15">15</option>
            <option value="20">20</option>
            <option value="20">30</option>
            <option value="20">40</option>
            <option value="20">50</option>
          </select>
          <label for="category">Select Category:</label>
          <select id="category">
            <option value="">any category</option>
            <option value="9">general knowledge</option>
            <option value="10">books</option>
            <option value="11">films</option>
            <option value="12">music</option>
            <option value="14">television</option>
            <option value="15">video games</option>
            <option value="16">board games</option>
            <option value="17">science and nature</option>
            <option value="18">computers</option>
            <option value="19">mathematics</option>
            <option value="20">mythology</option>
            <option value="21">sports</option>
            <option value="22">geography</option>
            <option value="23">history</option>
            <option value="24">politics</option>
            <option value="25">art</option>
            <option value="28">vehicles</option>
          </select>
          <label for="difficulty">Select difficulty:</label>
          <select id="difficulty">
            <option value="">any difficulty</option>
            <option value="easy">easy</option>
            <option value="medium">medium</option>
            <option value="hard">hard</option>
          </select>
          <label for="time">Select time per question:</label>
          <select id="time">
            <option value="10">10 seconds</option>
            <option value="15">15 seconds</option>
            <option value="20">20 seconds</option>
            <option value="25">25 seconds</option>
            <option value="30">30 seconds</option>
            <option value="60">60 seconds</option>
          </select>
        </div>
        <button class="btn start">Start Quiz</button>
      </div>
      <div class="quiz hide">
        <div class="timer">
          <div class="progress">
            <div class="progress-bar"></div>
            <span class="progress-text"></span>
          </div>
        </div>
        <div class="question-wrapper">
          <div class="number">
            Question <span class="current">1</span>
            <span class="total">/10</span>
          </div>
          <div class="question">This is a question This is a question?</div>
        </div>
        <div class="answer-wrapper">
          <div class="answer selected">
            <span class="text">answer</span>
            <span class="checkbox">
              <i class="fas fa-check"></i>
            </span>
          </div>
        </div>
        <button class="btn submit" disabled>Submit</button>
        <button class="btn next">Next</button>
      </div>
      <div class="end-screen hide">
        <h1 class="heading">Quiz App</h1>
        <div class="score">
          <span class="score-text">Your score:</span>
          <div>
            <span class="final-score">0</span>
            <span class="total-score">/10</span>
          </div>
        </div>
        <button class="btn restart">Restart Quiz</button>
      </div>
    </div>

    <script src="./js/quiz_pre.js"></script>
  </body>
</html>