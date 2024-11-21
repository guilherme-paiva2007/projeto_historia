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
    <link
      href="https://cdn.jsdelivr.net/npm/remixicon@4.3.0/fonts/remixicon.css"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="./css/home2.css" />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"
    />
    <link rel="stylesheet" href="styles.css" />
    <title>Web Design Mastery | SKYWINGS</title>
  </head>
  <body>
  <nav>
  <div class="nav__header">
    <div class="nav__logo">
      <a href="#" class="logo">
        <img src="./img/CRON.jpeg" class="logo-img" style="border-radius: 20px">
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
        <li><a href="#about1">Pré-Historia</a></li>
        <li><a href="#about2">Idade Antiga</a></li>
        <li><a href="#about3">Idade Média</a></li>
        <li><a href="#about4">Idade Moderna</a></li>
        <li><a href="#about5">Idade Contemporânea</a></li>
      </ul>
    </li>
    <li><a href="glo.php">GLOSSSÁRIO</a></li>
    <li><a href="jogoss.php">JOGOS</a></li>
    <li><a href="perfils.php">JOGOS</a></li>
    <li><a href="#contact">PERFIL</a></li>
   
  </ul>
  <div class="nav__btns">
    <button class="btn">perfil</button>
  </div>
</nav>

      

    <header id="home">
      <div class="header__container">
        <div class="header__content">
        <p>DESBRAVANDO O PASSADO</p>
        <h1>Bem-vindo a Crônicas do Tempo.</h1>
         
        </div>
        <div class="header__image">
          <img src="./img/lupa.png" alt="header" />
        </div>
      </div>
    </header>

    <section class="section__container destination__container" id="about">
      <h2 class="section__header">Cronologia da História</h2>
      <p class="section__description">
  
      </p>
      <div class="destination__grid">
        <div class="destination__card">
        <a href="./pre_historia.php">
          <img src="./img/prehistoria.webp" alt="destination" /></a>
          <div class="destination__card__details">
            <div>
              <h4>Pré-História</h4>
            </div>
           
          </div>
        </div>
        <div class="destination__card">
        <a href="./antiga.php">
        <img src="./img/teste.jpeg" alt="destination" /></a>
          <div class="destination__card__details">
            <div>
              <h4>Idade Antiga</h4>
            </div>
          </div>
        </div>
        <div class="destination__card">
        <a href="./idademe.php">
        <a href="./idademe.php">
        <img src="./img/media.jpeg" alt="destination" /></a>
          <div class="destination__card__details">
            <div>
              <h4>Idade Média</h4>
            
            </div>
          </div>
        </div>
        <div></div>
        <div class="destination__card">
        <a href="./idademoder.php">
    <img src="./img/modernaa.webp" alt="Idade Moderna" />
  </a>
  <div class="destination__card__details">
    <div>
      <h4>Idade Moderna</h4>
    </div>
  </div>
</div>
<div class="destination__card">
<a href="./idadecontem.php">
    <img src="./img/35916991_605.jpg" alt="Idade Contemporânea" />
  </a>
  <div class="destination__card__details">
    <div>
      <h4>Idade Contemporânea</h4>
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

    <script src="https://unpkg.com/scrollreveal"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="./js/home2.js"></script>
  </body>
</html>