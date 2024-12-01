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
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.3.0/fonts/remixicon.css" rel="stylesheet"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="./css/home2.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
    <!-- Swiper CSS -->
<link
  rel="stylesheet"
  href="https://unpkg.com/swiper/swiper-bundle.min.css"
/>
<!-- Swiper JS -->
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

    <title>Crônicas do Tempo</title>
  </head>
  <body>
  <nav>
  <div class="nav__header">
    <div class="nav__logo">
      <a href="#" class="logo">
        <img src="./img/logoo.png" class="logo-img" style="width: 190px">
      </a>
    </div>
    <div class="nav__menu__btn" id="menu-btn">
      <i class="ri-menu-line"></i>
    </div>
  </div>
  <ul class="nav__links" id="nav-links">
    <li> <a href="home2.php">INÍCIO</a></li>
    <li class="dropdown">
      <a href="#about">PERÍODOS</a>
      <ul class="dropdown-menu">
      <li><a href="pre_historia.php">Pré-Historia</a></li>
      <li><a href="antiga.php">Idade Antiga</a></li>
      <li><a href="idademe.php">Idade Média</a></li>
      <li><a href="idademoder.php">Idade Moderna</a></li>
      <li><a href="idadecontem.php">Idade Contemporânea</a></li>
      </ul>
      <li class="dropdown">
      <a href="#about">JOGOS</a>
      <ul class="dropdown-menu">
      <li><a href="caçapagina.php">Caça-Palavras</a></li>
      <li><a href="quiz_jogo.php">Quiz</a></li>
      <li><a href="forca_jogo.php">Forca</a></li>
      <!-- <li><a href="idademoder.php">Idade Moderna</a></li> -->
      <li><a href="idadecontem.php">Idade Contemporânea</a></li>
      </ul>
    </li>
    <li><a href="glo.php">GLOSSSÁRIO</a></li>
    <li><a href="#contact">PERFIL</a></li>
    <li><a href="./php/logout.php">Sair</a></li>
  </ul>
  <div class="nav__btns">
  <?php
    if ( $_SESSION['type'] == "admin"){
        echo '<img id="uso" src="./img/utilizador-dourado.png" style="width: 70px"; alt="">'; 
        echo '<p> ' . $_SESSION ['name'] . '</p>'; 
        echo '<a href="./php/logout.php"><button class="btn">Sair</button></a>';

    }else if( $_SESSION['type'] == ""){
        echo '<a href="./login.php"> <button class="btn">conectar-se</button></a>';

    }else{

        echo '<img id="uso" src="./img/utilizador-dourado.png" style="width: 70px;" alt="">'; 
        echo '<p>'. $_SESSION ["name"].'</p>'; 
        echo '<a href="./php/logout.php"><button class="btn">Sair</button></a>';

    }
    ?>
  </div>
</nav>
<p>ㅤ</p>
<p>ㅤ</p>
<p>ㅤ</p>

    <header id="home">
      <div class="header__container">
        <div class="header__content">
        <p class="cor_header">DESBRAVANDO O PASSADO</p>
        <h1 class="cor_header">Bem-vindo a Crônicas do Tempo.</h1>
         
        </div>
        <div class="header__image">
          <img src="./img/lupa.png" alt="header" />
        </div>
      </div>
    </header>

    <section class="section__container destination__container" id="about">
      <h2 class="section__header">Cronologia da História</h2>
      <div class="swiper">
        <div class="swiper-wrapper">
          <div class="swiper-slide">
            <div class="menu__card">
            <img src="./img/prehistoria.webp" alt="destination" />
              <div class="menu__card__details">
                <h4>Pré-História</h4>
                <a href="./pre_historia.php">
                  Saiba Mais
                  <span><i class="ri-arrow-right-line"></i></span>
                </a>
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="menu__card">
            <img src="./img/teste.jpeg" alt="destination" />
              <div class="menu__card__details">
              <h4>Idade Antiga</h4>
                <a href="./antiga.php">
                Saiba Mais
                  <span><i class="ri-arrow-right-line"></i></span>
                </a>
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="menu__card">
            <img src="./img/media.jpeg" alt="destination" />
              <div class="menu__card__details">
              <h4>Idade Média</h4>
                <a href="./idademe.php">
                Saiba Mais
                  <span><i class="ri-arrow-right-line"></i></span>
                </a>
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="menu__card">
            <img  src="./img/mode.jpg" alt="Idade Contemporânea" />
              <div class="menu__card__details">
              <h4>Idade Moderna</h4>
                <a href="./idademoder.php">
                Saiba Mais
                  <span><i class="ri-arrow-right-line"></i></span>
                </a>
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="menu__card">
            <img  src="./img/contem.jpg" alt="Idade Contemporânea" />
              <div class="menu__card__details">
              <h4>Idade Contemporânea</h4>
              <a href="./idadecontem.php">
                Saiba Mais
                  <span><i class="ri-arrow-right-line"></i></span>
                </a>
              </div>
            </div>
          </div>
        
        </div>
      </div>
    </section>

    
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
</section>
<section class="section__container showcase__container" id="package"> 
<div class="showcase__image">
      <img src="./img/CRON.jpeg" alt="destination" style="border-radius: 12px" />
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
  <h4>Deixe uma nota para o site!</h4>
  <div class="rating">
    <input type="radio" id="star5" name="rating" value="5" <?php if($_SESSION['nota'] == '5') echo "checked" ?> />
    <label title="Excelente!" for="star5">
      <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 576 512">
        <path
          d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z">
        </path>
      </svg>
    </label>

    <input type="radio" id="star4" name="rating" value="4" <?php if($_SESSION['nota'] == '4') echo "checked" ?> />
    <label title="Ótimo!" for="star4">
      <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 576 512">
        <path
          d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z">
        </path>
      </svg>
    </label>

    <input type="radio" id="star3" name="rating" value="3" <?php if($_SESSION['nota'] == '3') echo "checked" ?> />
    <label title="Bom" for="star3">
      <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 576 512">
        <path
          d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z">
        </path>
      </svg>
    </label>

    <input type="radio" id="star2" name="rating" value="2" <?php if($_SESSION['nota'] == '2') echo "checked" ?> />
    <label title="Regular" for="star2">
      <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 576 512">
        <path
          d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z">
        </path>
      </svg>
    </label>

    <input type="radio" id="star1" name="rating" value="1" <?php if($_SESSION['nota'] == '1') echo "checked" ?> />
    <label title="Ruim" for="star1">
      <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 576 512">
        <path
          d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z">
        </path>
      </svg>
    </label>
  </div>
  <button id="button_nota">Enviar</button>
  <div id="description_nota"></div>
  <script>
    document.getElementById('button_nota').addEventListener('click', () => {
      let nota = document.querySelector('input[type=radio][name=rating]:checked');
      let descricao = document.getElementById('description_nota');

      if (nota == null) {
        return descricao.innerHTML = "Selecione uma nota.";
      } else {
        if (!['1', '2', '3', '4', '5'].includes(nota.value)) return descricao.innerHTML = "Erro: Nota inválida.";
        fetch('./php/postAvaliacao.php?nota=' + nota.value);
        return descricao.innerHTML = "Nota registrada!";
      }
    });
  </script>
</div>

<p style="font-size: 12px; opacity: 0.7; margin: 0; text-align: center" id="description_nota" ></p>

        </div>
    </div>

        </div>
    </div>
    <div class="footer__bar">
        Sesi Senai © 2024 Desenvolvimento de Sistemas.
    </div>
</footer>

    <script src="https://unpkg.com/scrollreveal"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="./js/home2.js"></script>
  </body>
</html>