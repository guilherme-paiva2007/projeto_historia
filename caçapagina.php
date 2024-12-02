<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Jogo Caça-Palavras</title>
  <link rel="stylesheet" href="./css/paginacaça.css"> 
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script src="./js/manual.js"></script> 
</head>
<body class="fundo">
<div class="topo">
    <button class="botaoHome" onclick="location.href='./home2.php'">
      &#8592;
    </button>
    
    <div class="ajuda_logo">
      <button class="botaoAjuda" onclick="mostrarInstrucoes()">?</button>
      <img class="logo" src="./img/LOGO SEM FUNDO.png" alt="Logo">
    </div>
  </div>
  <h1> Caça-Palavras</h1>
  <div class="containerCartoes">
    <div class="cartao" style="background-image: url('./img/header pre.webp'); background-size: cover;">
      <div class="overlay"></div>
      <p class="tituloCartao">Pré-História</p>
      <button class="botaoJogar" onclick="location.href='./prehistoria_caça.php'">Jogar</button>
    </div>

    <div class="cartao" style="background-image: url('./img/istock-627488842-scaled.webp'); background-size: cover;">
      <div class="overlay"></div>
      <p class="tituloCartao">Idade Antiga</p>
      <button class="botaoJogar" onclick="location.href='./idadeantiga_caça.php'">Jogar</button>
    </div>

    <div class="cartao" style="background-image: url('./img/idademediaa.jpg'); background-size: cover;">
      <div class="overlay"></div>
      <p class="tituloCartao">Idade Média</p>
      <button class="botaoJogar" onclick="location.href='./idademedia_caça.php'">Jogar</button>
    </div>

    <div class="cartao" style="background-image: url('./img/mod.jpg'); background-size: cover;">
      <div class="overlay"></div>
      <p class="tituloCartao">Idade Moderna</p>
      <button class="botaoJogar" onclick="location.href='./idademoderna-caça.php'">Jogar</button>
    </div>

    <div class="cartao" style="background-image: url('./img/iddcontemporanea.jpg'); background-size: cover;">
      <div class="overlay"></div>
      <p class="tituloCartao">Idade Contemporânea</p>
      <button class="botaoJogar" onclick="location.href='./idadecontemp_caça.php'">Jogar</button>
    </div>
  </div>
</body>
</html>
