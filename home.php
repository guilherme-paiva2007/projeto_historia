<?php
session_start();
if (isset($_SESSION['logged']) && $_SESSION['logged'] == false) {
    header('Location: login.php');
}
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
    <link rel="stylesheet" href="./css/nav_home.css">
    <script src="./js/prototypes.js"></script>
    <script src="./js/script.js"></script>
    <script src="./js/config.js"></script>
    <script src="./js/load.js" defer></script>
    <title>Início - Crônicas do Tempo</title>
</head>

<body>
<div class="sidebar">
    <div class="logo_details">
      <i class="bx bxl-audible icon"></i>
      <img src="./img/logo.jpeg" alt="Logo" class="logo_image">
      <div class="logo_name">Code Effect</div>
      <i class="bx bx-menu" id="btn"></i>
    </div>
    <ul class="nav-list">
      
      <li>
        <a href="#">
          <i class="bx bx-grid-alt"></i>
          <span class="link_name">Inicio</span>
        </a>
        <span class="tooltip">Inicio</span>
      </li>
      <li>
        <a href="#">
          <i class="bx bx-user"></i>
          <span class="link_name">Perfil</span>
        </a>
        <span class="tooltip">Perfil</span>
      </li>
      <li>
        <a href="#">
        <i class="bi bi-journal-text"></i>
          <span class="link_name">Glossário</span>
        </a>
        <span class="tooltip">Glossário</span>
      </li>
      <li>
        <a href="#">
          <i class="bx bx-pie-chart-alt-2"></i>
          <span class="link_name">Conteúdo</span>
        </a>
        <span class="tooltip">Conteúdo</span>
      </li>
      <li>
        <a href="#">
        <i class="bi bi-controller"></i>
          <span class="link_name">Jogos</span>
        </a>
        <span class="tooltip">Jogos</span>
      </li>
     
     
      <li class="profile">
        <div class="profile_details">
          <img src="profile.jpeg" alt="profile image">
          <div class="profile_content">
            <div class="name">Perfil</div>
            <div class="designation">Admin</div>
          </div>
        </div>
        <i class="bx bx-log-out" id="log_out"></i>
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
<section class="section__container destination__container" id="about">
    <h2 class="section__header">Cronologia da História</h2>
    <div id="periodos_carrossel_container" style="position: relative; width: 100%">
        <div id="periodos_carrossel" style="">
            <div class="periodo_carrossel">
                <div class="destination__card">
                    <a href="./pre_historia.php">
                        <img src="./img/prehistoria.webp" alt="destination" />
                        <p class="periodo_titulo_float">Pré-História</p>
                    </a>
                </div>
                <div class="destination__card__details">
                    <div class="periodo_titulo">
                        <h4>Pré-História</h4>
                    </div>
                    <div class="periodo_texto">

                    </div>
                </div>
            </div>
            <div class="periodo_carrossel">
                <div class="destination__card periodo_carrossel">
                    <a href="./php/antiga.php">
                        <img src="./img/teste.jpeg" alt="destination" />
                        <p class="periodo_titulo_float">Idade Antiga</p>
                    </a>
                </div>
                <div class="destination__card__details">
                    <div class="periodo_titulo">
                        <h4>Idade Antiga</h4>
                    </div>
                    <div class="periodo_texto">
                        
                    </div>
                </div>
            </div>
            <div class="periodo_carrossel">
                <div class="destination__card periodo_carrossel">
                    <a href="./php/idademe.php">
                        <img src="./img/media.jpeg" alt="destination" />
                        <p class="periodo_titulo_float">Idade Média</p>
                    </a>
                </div>
                <div class="destination__card__details">
                    <div class="periodo_titulo">
                        <h4>Idade Média</h4>
                    </div>
                    <div class="periodo_texto">
                        
                    </div>
                </div>
            </div>
            <div class="periodo_carrossel">
                <div class="destination__card periodo_carrossel">
                    <a href="./php/idademoder.php">
                        <img src="./img/moder.jpeg" alt="destination" />
                        <p class="periodo_titulo_float">Idade Moderna</p>
                    </a>
                    <div class="periodo_texto">
                        
                    </div>
                </div>
                <div class="destination__card__details">
                    <div class="periodo_titulo">
                        <!-- <p>ㅤ</p> -->
                        <h4>Idade Moderna</h4>
                    </div>
                    <div class="periodo_texto">
                        
                    </div>
                </div>
            </div>
            <div class="periodo_carrossel">
                <div class="destination__card periodo_carrossel">
                    <a href="./php/idadecontem.php">
                        <img src="./img/comte.jpeg" alt="destination" />
                        <p class="periodo_titulo_float">Idade Comtemporânea</p>
                    </a>
                </div>
                <div class="destination__card__details">
                    <div class="periodo_titulo">
                        <!-- <p>ㅤ</p> -->
                        <h4>Idade Contemporânea</h4>
                    </div>
                    <div class="periodo_texto">
                        
                    </div>
                </div>
            </div>
        </div>
        <button class="left" onclick="carousels.periodos.slideLeft()"
            style="position: absolute; top: 40%; left: 0">A</button>
        <button class="right" onclick="carousels.periodos.slideRight()"
            style="position: absolute; top: 40%; right: 0">B</button>
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
<section class="section__container showcase__container" id="package"> 
<div class="container">
<div data-text="Github" style="--r:-15;" class="glass">
<svg viewBox="0 0 496 512" height="1em" xmlns="http://www.w3.org/2000/svg">
  <path
    d="M165.9 397.4c0 2-2.3 3.6-5.2 3.6-3.3.3-5.6-1.3-5.6-3.6 0-2 2.3-3.6 5.2-3.6 3-.3 5.6 1.3 5.6 3.6zm-31.1-4.5c-.7 2 1.3 4.3 4.3 4.9 2.6 1 5.6 0 6.2-2s-1.3-4.3-4.3-5.2c-2.6-.7-5.5.3-6.2 2.3zm44.2-1.7c-2.9.7-4.9 2.6-4.6 4.9.3 2 2.9 3.3 5.9 2.6 2.9-.7 4.9-2.6 4.6-4.6-.3-1.9-3-3.2-5.9-2.9zM244.8 8C106.1 8 0 113.3 0 252c0 110.9 69.8 205.8 169.5 239.2 12.8 2.3 17.3-5.6 17.3-12.1 0-6.2-.3-40.4-.3-61.4 0 0-70 15-84.7-29.8 0 0-11.4-29.1-27.8-36.6 0 0-22.9-15.7 1.6-15.4 0 0 24.9 2 38.6 25.8 21.9 38.6 58.6 27.5 72.9 20.9 2.3-16 8.8-27.1 16-33.7-55.9-6.2-112.3-14.3-112.3-110.5 0-27.5 7.6-41.3 23.6-58.9-2.6-6.5-11.1-33.3 2.6-67.9 20.9-6.5 69 27 69 27 20-5.6 41.5-8.5 62.8-8.5s42.8 2.9 62.8 8.5c0 0 48.1-33.6 69-27 13.7 34.7 5.2 61.4 2.6 67.9 16 17.7 25.8 31.5 25.8 58.9 0 96.5-58.9 104.2-114.8 110.5 9.2 7.9 17 22.9 17 46.4 0 33.7-.3 75.4-.3 83.6 0 6.5 4.6 14.4 17.3 12.1C428.2 457.8 496 362.9 496 252 496 113.3 383.5 8 244.8 8zM97.2 352.9c-1.3 1-1 3.3.7 5.2 1.6 1.6 3.9 2.3 5.2 1 1.3-1 1-3.3-.7-5.2-1.6-1.6-3.9-2.3-5.2-1zm-10.8-8.1c-.7 1.3.3 2.9 2.3 3.9 1.6 1 3.6.7 4.3-.7.7-1.3-.3-2.9-2.3-3.9-2-.6-3.6-.3-4.3.7zm32.4 35.6c-1.6 1.3-1 4.3 1.3 6.2 2.3 2.3 5.2 2.6 6.5 1 1.3-1.3.7-4.3-1.3-6.2-2.2-2.3-5.2-2.6-6.5-1zm-11.4-14.7c-1.6 1-1.6 3.6 0 5.9 1.6 2.3 4.3 3.3 5.6 2.3 1.6-1.3 1.6-3.9 0-6.2-1.4-2.3-4-3.3-5.6-2z"
  ></path>
</svg>
</div>
<div data-text="Code" style="--r:5;" class="glass">
<svg viewBox="0 0 640 512" height="1em" xmlns="http://www.w3.org/2000/svg">
  <path
  <img src="./img/envelhecidofundo.jpg" alt=""></path>
</svg>
</div>
<div data-text="Earn" style="--r:25;" class="glass">
<svg viewBox="0 0 576 512" height="1em" xmlns="http://www.w3.org/2000/svg">
  <path
    d="M64 64C28.7 64 0 92.7 0 128V384c0 35.3 28.7 64 64 64H512c35.3 0 64-28.7 64-64V128c0-35.3-28.7-64-64-64H64zm64 320H64V320c35.3 0 64 28.7 64 64zM64 192V128h64c0 35.3-28.7 64-64 64zM448 384c0-35.3 28.7-64 64-64v64H448zm64-192c-35.3 0-64-28.7-64-64h64v64zM288 160a96 96 0 1 1 0 192 96 96 0 1 1 0-192z"
  ></path>
</svg>
</div>
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
            Com este recurso, os alunos podem aprofundar seus conhecimentos, praticar para avaliações e reforçar o
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
            <span><i class="ri-camera-lens-line"></i></span>
            <h4>Conquistas e impérios</h4>
            <p>
                Impérios dominaram regiões e moldaram culturas, espalhando ideias e tecnologias que marcaram a
                história de várias civilizações.
            </p>
        </div>
        <div class="discover__card">
            <span><i class="ri-ship-line"></i></span>
            <h4>Arte e cultura</h4>
            <p>
                A arte e cultura ao longo da história refletiram valores e influenciaram a forma como as sociedades
                se expressam e se relacionam.
            </p>
        </div>
        <div class="discover__card">
            <span><i class="ri-landscape-line"></i></span>
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
            <div class="footer__logo">
                <a href="#" class="logo">Sesi</a>
            </div>
            <p>
                A Educação Básica do SESI-SP é baseada em uma proposta pedagógica sólida, focada na formação cidadã.
                Seu objetivo é capacitar os alunos para participarem ativamente em uma sociedade diversa, promovendo
                liberdade, respeito e solidariedade.
            </p>
            <ul class="footer__socials">
                <li>
                    <a href="https://www.facebook.com/share/XNEfQuartHJrPeNq/"><i class="ri-facebook-fill"></i></a>
                </li>
                <li>
                    <a href="https://www.instagram.com/sesi.cpv?igsh=MW94aGQ4OHNhNTE1bw=="><i
                            class="ri-instagram-line"></i></a>
                </li>
            </ul>
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
            <h4>Deixe seu feedback do site !</h4>
            <form action="/">
                <input type="text" placeholder="Escreva..." />
                <button class="btn">Enviar</button>
            </form>
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