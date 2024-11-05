<?php
$base_project_name = '/projeto_historia';
$root_folder = $_SERVER['DOCUMENT_ROOT'] . $base_project_name;
$root_folder_link = $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] . $base_project_name;
include $root_folder . '/php/functions.php';
include $root_folder . '/php/connection.php';
session_start();

// essa duas linha tirão todas as mensagens de erro do php
error_reporting(0);
ini_set("display_errors", 0 );
//
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.3.0/fonts/remixicon.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link rel="stylesheet" href="./css/home.css" />
    <link rel="stylesheet" href="./css/nav_home.css">
    <script src="./js/prototypes.js"></script>
    <script src="./js/script.js"></script>
    <script src="./js/config.js"></script>
    <script src="./js/load.js" defer></script>
    <title>Início - Crônicas do Tempo</title>
</head>

<body>
    <nav>
        <div class="nav__header">
            <div class="nav__logo">
                <a href="#" class="logo"><img id = "logo" src="./img/Capturar.PNG" alt=""></a>
            </div>
            <div class="nav__menu__btn" id="menu-btn">
                <i class="ri-menu-line"></i>
            </div>
        </div>
        <ul class="nav__links" id="nav-links">
            <li><a href="#home">HOME</a></li>
            <li><a href="#about">PERFIL</a></li>
        </ul>
        <div class="nav__btns">
           
        <?php
            if ( $_SESSION['type'] == "admin"){
                echo '<div id = "usuario">';
                echo '<p id="p_bemvindo" class="p_uso">Bem vindo administrador: </p>'; 
                echo '<img class="uso" src="./img/utilizador-dourado.png" alt="">'; 
                echo '<p class="p_uso" >' . $_SESSION ['name'] . '</p>';
                echo '<a href="./perfil.php"><button class="btn">Perfil</button></a>';
                echo '</div>';

            }else if( $_SESSION['type'] == "user"){
                
                echo '<div id = "usuario">';
                echo '<p id="p_bemvindo" class="p_uso">Bem vindo usuario: </p>'; 
                echo '<img class="uso" src="./img/do-utilizador (1).png" alt="">'; 
                echo '<p class="p_uso" >' . $_SESSION ['name'] . '</p>';
                echo '<a href="./perfil.php"><button class="btn">Perfil</button></a>';
                echo '</div>';
            }else{
                echo '<a href="./login.php"><button class="btn">conectar-se</button></a>';
                 error_reporting(0);

            }
            ?>
        </div>
    </nav>
    <header id="home">
        <div class="header__container">
            <div class="header__content">
                <p>DESBRAVANDO O PASSADO</p>
                <h1>Bem-vindo ao seu portal de conhecimento.</h1>
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
            <div id="periodos_carrossel">
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
        <div class="showcase__image">
            <img src="./img/teste3.jpg" alt="destination" />
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