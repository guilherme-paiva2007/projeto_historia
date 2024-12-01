<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link rel="stylesheet" href="./css/quiz.css"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>

  <link rel="stylesheet" href="./css/quizz.css"/>
</head>
<body>
<button class="btn" onclick="window.history.back()">&#8592; Voltar</button>
<div class="container">
    <div class="questions-container hide">
      <span class="question">Pergunta aqui?</span>
      <div class="answers-container">
        <button class="answer button">Resposta 1</button>
        <button class="answer button">Resposta 2</button>
        <button class="answer button">Resposta 3</button>
        <button class="answer button">Resposta 4</button>
      </div>
    </div>
    <div class="controls-container">
      <button class="start-quiz button">Começar Quiz!</button>
      <button class="next-question button hide">Próxima pergunta</button>
    </div>
  </div>

  <button id="mensagem" onclick="exibemanu2()">?</button>
  <!-- esse fas referencia ao comando  onclick -->
  <script src="./js/manual.js"></script>

  <!-- estilo para o alerta -->
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11" style="height:none;"></script>
  <script src="./js/quizcontem_pre.js" type="module"></script>
 
</body>
</html>