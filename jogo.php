<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.3.0/fonts/remixicon.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.3.0/fonts/remixicon.css" rel="stylesheet" />
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link rel="stylesheet" href="./css/jogo.css"/>
    
</head>
<body>

    <div class="container">
    <button class="btn" onclick="window.history.back()">&#8592; Voltar</button><button class="btn" onclick="window.history.back()">&#8592; Voltar</button>
        <div id="slide">

        <!-- NUM 5 -->
            <div class="item" style="background-image:linear-gradient(rgba(0, 0, 0, 0.371), rgba(0, 0, 0, 0.612)), url(https://caracteristicas.pt/wp-content/uploads/2021/10/idade-contemporanea.jpg);">
                <div class="content">
                    <div class="name">Idade Contemporânea</div>
                    <div class="des">ㅤ</div>
                    <a href="./idade_cont_quiz.php">  <button class="i">QUIZ</button> </a>
                    <a href="./idade_cont_forca.php"> <button class="i">FORCA</button></a>
                </div>
            </div>

        <!-- NUM 1 -->
            <div class="item" style="background-image:linear-gradient(rgba(0, 0, 0, 0.371), rgba(0, 0, 0, 0.612)), url(https://static.ndmais.com.br/2024/04/arte-na-pre-historia-rupestre-800x533.jpg);">
                <div class="content">
                    <div class="name">Pré-História</div>
                    <div class="des">ㅤ</div>
                    <a href="./jogopre1.php">  <button class="i">QUIZ</button> </a>
                    <a href="./jogopre2.php"> <button class="i">FORCA</button></a>
                </div>
            </div>

            <!-- NUM 2 -->
            <div class="item" style="background-image:linear-gradient(rgba(0, 0, 0, 0.371), rgba(0, 0, 0, 0.612)), url(https://humanidades.com/wp-content/uploads/2017/04/edad-antigua-1-e1669918853997-800x400.jpg);">
                <div class="content">
                    <div class="name">Idade Antiga</div>
                    <div class="des">ㅤ</div>
                    <a href="./jogoantiga1.php">  <button class="i">QUIZ</button> </a>
                    <a href="./jogoantiga1.php"> <button class="i">FORCA</button></a>
                </div>
            </div>

            <!-- NUM 3 -->
            <div class="item" style="background-image:linear-gradient(rgba(0, 0, 0, 0.371), rgba(0, 0, 0, 0.612)), url(https://www.vestibulandoweb.com.br/wp-content/uploads/2024/04/idade-media-ia.jpg);">
                <div class="content">
                    <div class="name">Idade Média</div>
                    <div class="des">ㅤ</div>
                    <a href="./idade_media_quiz.php">  <button class="i">QUIZ</button> </a>
                    <a href="./idadde_media_forca.php"> <button class="i">FORCA</button></a>
                </div>
            </div>

            
            <div class="item" style="background-image:linear-gradient(rgba(0, 0, 0, 0.371), rgba(0, 0, 0, 0.612)), url(https://images.educamaisbrasil.com.br/content/banco_de_imagens/guia-de-estudo/D/jornada-de-10-de-agosto-de-1792.jpg);">
                <div class="content">
                    <div class="name">Idade Moderna</div>
                    <div class="des">ㅤ</div>
                    <a href="./idade_moderna_quiz.php">  <button class="i">QUIZ</button> </a>
                    <a href="./idade_moderna_forca.php"> <button class="i">FORCA</button></a>
                </div>
            </div>
        </div>
        <div class="buttons">
            <button id="prev"><i class="fa-solid fa-angle-left"></i></button>
            <button id="next"><i class="fa-solid fa-angle-right"></i></button>
        </div>
    </div>

    <script src="./js/jogo.js"></script>
</body>
</html>
