<?php
session_start();
if (isset($_SESSION['logged']) && $_SESSION['logged'] == false) {
    header('Location: login.php');
}

error_reporting(0); ini_set("display_errors", 0 );
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.3.0/fonts/remixicon.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.3.0/fonts/remixicon.css" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="./css/home.css" />
    <script src="./js/prototypes.js"></script>
    <script src="./js/script.js"></script>
    <script src="./js/config.js"></script>
    <script src="./js/load.js" defer></script>
    <title>Início - Crônicas do Tempo</title>
    <style>
        .tooltip {
            color: black;
        }
    </style>
</head>

<body>
<div class="sidebar">
    <div class="logo_details">
      <img src="./img/logoo.jpeg" alt="Logo" class="logo_image">
      <div class="logo_name">Code Effect</div>
      <i class="bx bx-menu" id="btn"></i>
    </div>
    <ul class="nav-list">
      
      <li>
        <a href="home.php">
          <i class="bx bx-grid-alt"></i>
          <span class="link_name">Inicio</span>
        </a>
        <span class="tooltip">Inicio</span>
      </li>
      <li>
        <a href="perfil.php">
          <i class="bx bx-user"></i>
          <span class="link_name">Perfil</span>
        </a>
        <span class="tooltip">Perfil</span>
      </li>
      <li>
        <a href="glo.php">
        <i class="bi bi-journal-text"></i>
          <span class="link_name">Glossário</span>
        </a>
        <span class="tooltip">Glossário</span>
      </li>
      
      <li>
      <a href="jogo.php">
        <i class="bi bi-controller"></i>
          <span class="link_name">Jogos</span>
        </a>
        <span class="tooltip">Jogos</span>
      </li>
     
      <li class="profile">
        <div class="profile_details"><?php
                if ( $_SESSION['type'] == "admin"){
                   echo '<img src="./img/utilizador-dourado.png" alt="profile image">';
                }else if ( $_SESSION['type'] == 'user'){ 
                   echo '<img src="./img/utilizador-dourado.png" alt="profile image">';
                }else{
                    echo '<img src="./img/do-utilizador (1).png">';
                }
                ?>
          <div class="profile_content">

            <div class="name">
                <?php
                if ( $_SESSION['type'] == "admin"){
                 echo $_SESSION['name'];
                }else if ( $_SESSION['type'] == 'user')
                 echo $_SESSION['name'];
                ?>
            </div>

            <div class="designation"> <?php
                if ( $_SESSION['type'] == "admin"){
                echo $_SESSION['type'];
                }else if ( $_SESSION['type'] == 'user')
                 echo $_SESSION['type'];
              

                ?>
        </div>
        <i class="bx bx-log-out" onclick="location.href='./php/logout.php'" href="login.php" id="log_out"></i>
        <?php
                 if(  $_SESSION['type'] == "admin"){
                    echo ('<button onclick="location.href=" style="margin: 0 auto; padding: 2px 4px">criar</button>');
                 }
                ?>
      </li>
    </ul>
  </div>


  
  <header id="home">
    <div class="header__container">
        <div class="header__content">
            <p>DESBRAVANDO O PASSADO</p>
            <h1>Bem-vindo a Crônicas do Tempo.</h1>
            <div class="header__btns">

            </div>
        </div>
        <div class="header__image">
            <img src="./img/lupa.png" alt="">
        </div>
    </div>
</header>


<!-- <section class="section__container destination__container" id="about"> -->
<section class="section__container menu__container" id="menu">
      <p class="section__subheader">OUR MENU</p>
      <h2 class="section__header">Menu That Always Make You Fall In Love</h2>
      <!-- Slider main container -->
      <div class="swiper">
        <!-- Additional required wrapper -->
        <div class="swiper-wrapper">
          <!-- Slides -->
          <div class="swiper-slide">
            <div class="menu__card">
              <img src="./img/prehistoria.webp" alt="menu" />
              <div class="menu__card__details">
                <h4>Italian Pizza</h4>
                <h5><span>$</span>7.49</h5>
                <a href="#">
                  Order Now
                  <span><i class="ri-arrow-right-line"></i></span>
                </a>
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="menu__card">
              <img src="./img/prehistoria.webp" alt="menu" />
              <div class="menu__card__details">
                <h4>Burrito Wrap</h4>
                <h5><span>$</span>4.49</h5>
                <a href="#">
                  Order Now
                  <span><i class="ri-arrow-right-line"></i></span>
                </a>
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="menu__card">
              <img src="./img/prehistoria.webp" alt="menu" />
              <div class="menu__card__details">
                <h4>Red Sause Pasta</h4>
                <h5><span>$</span>5.99</h5>
                <a href="#">
                  Order Now
                  <span><i class="ri-arrow-right-line"></i></span>
                </a>
              </div>
            </div>
<<<<<<< HEAD
          </div>
          <div class="swiper-slide">
            <div class="menu__card">
              <img src="./img/prehistoria.webp" alt="menu" />
              <div class="menu__card__details">
                <h4>Fresh Pan Pizza</h4>
                <h5><span>$</span>6.49</h5>
                <a href="#">
                  Order Now
                  <span><i class="ri-arrow-right-line"></i></span>
                </a>
              </div>
=======
            <div class="periodo_carrossel">
                <div class="destination__card periodo_carrossel">
                    <a href="./idadecontem.php">
                    <img src="./img/guerra.webp" alt="destination" />
                        
                        <p class="periodo_titulo_float">Idade Comtemporânea</p>
                    </a>
                </div>
                <div class="destination__card__details">
                    <div class="periodo_titulo">
                        <!-- <p>ㅤ</p> -->
                        <h4>Idade Contemporânea</h4>
                    </div>
                    <div class="periodo_texto">
                        <p>É como conhecemos o período histórico que começa com a Revolução Francesa, em 1789, e segue até os dias atuais. Esse período é marcado por profundas transformações políticas, sociais e tecnológicas ao redor do mundo. Esse período também é marcado por conflitos mundiais, movimentos sociais e a globalização, que altera a forma como as pessoas interagem e vivem.</p>
                    </div>
                </div>
>>>>>>> d735930ed214e4b464d3e642099d3e758ca57fd3
            </div>
          </div>
          <div class="swiper-slide">
            <div class="menu__card">
              <img src="./img/prehistoria.webp" alt="menu" />
              <div class="menu__card__details">
                <h4>Chicken Nuggets</h4>
                <h5><span>$</span>4.99</h5>
                <a href="#">
                  Order Now
                  <span><i class="ri-arrow-right-line"></i></span>
                </a>
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="menu__card">
              <img src="./img/prehistoria.webp" alt="menu" />
              <div class="menu__card__details">
                <h4>Dum Biryani</h4>
                <h5><span>$</span>8.49</h5>
                <a href="#">
                  Order Now
                  <span><i class="ri-arrow-right-line"></i></span>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
<!-- </section> -->


<section class="section__container journey__container" id="tour">
    <h2 class="section__header">Explore os Caminhos da História!</h2>
    <p class="section__description">
        Descubra os eventos e personagens que moldaram o mundo.
    </p>
    <div class="journey__grid">
        <div class="journey__card">
            <div class="journey__card__bg">
                <span><i class="ri-bookmark-3-line"></i></span>
                <h4>Momentos Decisivos</h4>
            </div>
            <div class="journey__card__content">
                <span><i class="ri-bookmark-3-line"></i></span>
                <h4>Crises, Revoluções e Vitórias</h4>
                <p>
                    Explore os momentos em que a história mudou drasticamente o rumo da humanidade.
                </p>
            </div>
        </div>
        <div class="journey__card">
            <div class="journey__card__bg">
                <span><i class="ri-landscape-fill"></i></span>
                <h4>Civilizações Antigas</h4>
            </div>
            <div class="journey__card__content">
                <span><i class="ri-landscape-fill"></i></span>
                <h4>Egito, Roma e Além</h4>
                <p>
                    Descubra como as primeiras grandes civilizações influenciaram o mundo moderno.
                </p>
            </div>
        </div>
        <div class="journey__card">
            <div class="journey__card__bg">
                <span><i class="ri-map-2-line"></i></span>
                <h4>Personagens Notáveis</h4>
            </div>
            <div class="journey__card__content">
                <span><i class="ri-map-2-line"></i></span>
                <h4>Líderes, Visionários e Heróis</h4>
                <p>
                    Conheça as figuras mais influentes da história e seus legados.
                </p>
            </div>
        </div>
    </div>
</section>
<section class="section__container showcase__container" id="package"> 
<div class="showcase__image">
      <img src="./img/compass-2946959_1280.jpg" alt="destination" style="border-radius: 12px" />
      </div>

    <div class="showcase__content">
        <h4>Aprenda História de Forma Dinâmica</h4>
        <p>
            Este site foi criado como uma ferramenta interativa para auxiliar os alunos no aprendizado de história.
            Desenvolvido em conjunto com profissionais de desenvolvimento de sistemas, ele oferece um espaço digital
            onde é possível explorar conteúdos históricos de maneira acessível e envolvente, complementando o que é
            ensinado em sala de aula.
        </p>
        <p>
            Com este recurso, os alunos podem aprofundar seus conhecimentos, estudar para avaliações e reforçar o
            entendimento de momentos e figuras históricas. O site é pensado para tornar o estudo da história mais
            interessante e dinâmico, permitindo uma imersão nos fatos e processos que moldaram o mundo atual.
        </p>
    </div>
</section>
<section class="section__container discover__container">
    <h2 class="section__header">A influência da história em nosso mundo</h2>
    <p class="section__description">
    </p>
    <div class="discover__grid">
        <div class="discover__card">
            <span><i class="bi bi-bricks"></i></i></span>
            <h4>Conquistas e impérios</h4>
            <p>
                Impérios dominaram regiões e moldaram culturas, espalhando ideias e tecnologias que marcaram a
                história de várias civilizações.
            </p>
        </div>
        <div class="discover__card">
            <span><i class="bi bi-brush"></i></span>
            <h4>Arte e cultura</h4>
            <p>
                A arte e cultura ao longo da história refletiram valores e influenciaram a forma como as sociedades
                se expressam e se relacionam.
            </p>
        </div>
        <div class="discover__card">
            <span><i class="bi bi-stickies"></i></span>
            <h4>Ciência e história</h4>
            <p>
                Inovações científicas e tecnológicas moldaram a vida humana, transformando desde o cotidiano até o
                desenvolvimento das sociedades.
            </p>
        </div>
    </div>
</section>
<footer id="contact">
    <div class="section__container footer__container">
        <div class="footer__col">
            <img id="sesi" src="./img/fa6e1de0-005a-11ec-9c76-59037194a6de_1630771003936_128.png" alt="">
            <div class="footer__logo">
            </div>
            <p>
                A Educação Básica do SESI-SP é baseada em uma proposta pedagógica sólida, focada na formação cidadã.
                Seu objetivo é capacitar os alunos para participarem ativamente em uma sociedade diversa, promovendo
                liberdade, respeito e solidariedade.
            </p>
        </div>
        <div class="footer__col">
            <h4>Integrantes</h4>
            <ul class="footer__links">
                <li><a href="https://www.instagram.com/l1nn_l?igsh=MWVscHA2YWRiZWtoeQ==" target="_blank">Guilherme
                        Paiva</a></li>
                <li><a href="https://www.instagram.com/lanna.kfm?igsh=MW83enltcjZ3czJuOQ==" target="_blank">Lanna
                        Kamilly</a></li>
                <li><a href="https://www.instagram.com/flaviaglendaa_?igsh=NWd6NWpkdG8yejF3" target="_blank">Flávia
                        Glenda</a></li>
                <li><a href="https://www.instagram.com/borgesm58?igsh=azI0MHdoYW92cDc=" target="_blank">Miguel
                        Borges</a></li>
            </ul>
        </div>
        <div class="footer__col">
            <h4>Contato</h4>
            <ul class="footer__links">
                <li>
                    <a href="#">
                        <span><i class="ri-phone-fill"></i></span> (12) 3653-1943
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span><i class="ri-map-pin-2-fill"></i></span> Sesi Caçapava, 207
                    </a>
                </li>
            </ul>
        </div>
        <div class="footer__col">
            <h4>Deixe uma nota para o site !</h4>
<div class="radio">
  <input id="rating-5" type="radio" name="rating" value="5" <?php if($_SESSION['nota'] == '5') echo "checked" ?> />
  <label for="rating-5" title="5 stars">
    <svg viewBox="0 0 576 512" height="1em" xmlns="http://www.w3.org/2000/svg">
      <path
        d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z"
      ></path>
    </svg>
  </label>

  <input id="rating-4" type="radio" name="rating" value="4" <?php if($_SESSION['nota'] == '4') echo "checked" ?> />
  <label for="rating-4" title="4 stars">
    <svg viewBox="0 0 576 512" height="1em" xmlns="http://www.w3.org/2000/svg">
      <path
        d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z"
      ></path>
    </svg>
  </label>

  <input id="rating-3" type="radio" name="rating" value="3" <?php if($_SESSION['nota'] == '3') echo "checked" ?> />
  <label for="rating-3" title="3 stars">
    <svg viewBox="0 0 576 512" height="1em" xmlns="http://www.w3.org/2000/svg">
      <path
        d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z"
      ></path>
    </svg>
  </label>

  <input id="rating-2" type="radio" name="rating" value="2" <?php if($_SESSION['nota'] == '2') echo "checked" ?> />
  <label for="rating-2" title="2 stars">
    <svg viewBox="0 0 576 512" height="1em" xmlns="http://www.w3.org/2000/svg">
      <path
        d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z"
      ></path>
    </svg>
  </label>

  <input id="rating-1" type="radio" name="rating" value="1" <?php if($_SESSION['nota'] == '1') echo "checked" ?> />
  <label for="rating-1" title="1 star">
    <svg viewBox="0 0 576 512" height="1em" xmlns="http://www.w3.org/2000/svg">
      <path
        d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z"
      ></path>
    </svg>
  </label>
</div>
<div id="container_button_nota">
    <button id="button_nota">Salvar nota</button>
    <script>
        document.getElementById('button_nota').addEventListener('click', () => {
            let nota = document.querySelector('input[type=radio][name=rating]:checked');
            let descricao = document.getElementById('description_nota');

            if (nota == null) {
                return descricao.innerHTML = "Selecione uma nota."
            } else {
                if (!['1', '2', '3', '4', '5'].includes(nota.value)) return descricao.innerHTML = "Erro: Nota inválida."
                fetch('./php/postAvaliacao.php?nota=' + nota.value);
                return descricao.innerHTML = "Nota registrada!";
            }
        })
        </script>
</div>
<p style="font-size: 12px; opacity: 0.7; margin: 0; text-align: center" id="description_nota" ></p>

        </div>
    </div>
    <div class="footer__bar">
        Sesi Senai © 2024 Desenvolvimento de Sistemas.
    </div>
</footer>

    <!-- <script src="https://unpkg.com/scrollreveal"></script> -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="./js/home.js"></script>
</body>

</html>