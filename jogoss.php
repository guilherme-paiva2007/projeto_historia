<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Animated Image Slider</title>
    <link rel="stylesheet" href="./css/home2.css" />
    <link rel="stylesheet" href="./css/jogos.css"/>

</head>
<body>
    
    <header>

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
      <li><a href="pre_historia.php">Pré-Historia</a></li>
        <li><a href="antiga.php">Idade Antiga</a></li>
        <li><a href="idademe.php">Idade Média</a></li>
        <li><a href="idademoder.php">Idade Moderna</a></li>
        <li><a href="idadecontem.php">Idade Contemporânea</a></li>
      </ul>
    </li>
    <li><a href="glo.php">GLOSSSÁRIO</a></li>
    <li><a href="jogoss.php">JOGOS</a></li>

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

    </header>


    <div class="carousel">

        <div class="list">

            <div class="item" style="background-image:linear-gradient(rgba(0, 0, 0, 0.371), rgba(0, 0, 0, 0.612)), url(https://caracteristicas.pt/wp-content/uploads/2021/10/idade-contemporanea.jpg);">
                <div class="content">
                    <div class="title">Idade Contemporânea</div>
                    <div class="des">ㅤ</div>
                    <div class="btn">
                    <a href="./idade_moderna_quiz.php"><button>Quiz</button></a>
                    <a href="./idade_moderna_forca.php"><button>Forca</button></a>
                    </div>
                </div>
            </div>

            <div class="item" style="background-image:linear-gradient(rgba(0, 0, 0, 0.371), rgba(0, 0, 0, 0.612)), url(https://static.ndmais.com.br/2024/04/arte-na-pre-historia-rupestre-800x533.jpg);">
                
                <div class="content">
                    <div class="title">Pré-História</div>
                    <div class="des">ㅤ</div>
                    <div class="btn">
                    <a href="./idade_moderna_quiz.php"><button>Quiz</button></a>
                    <a href="./idade_moderna_forca.php"><button>Forca</button></a>
                    </div>
                </div>

            </div>

            <div class="item" style="background-image:linear-gradient(rgba(0, 0, 0, 0.371), rgba(0, 0, 0, 0.612)), url(https://humanidades.com/wp-content/uploads/2017/04/edad-antigua-1-e1669918853997-800x400.jpg);">

                <div class="content">
                    <div class="title">Idade Antiga</div>
                    <div class="des">ㅤ</div>
                    <div class="btn">
                    <a href="./idade_moderna_quiz.php"><button>Quiz</button></a>
                    <a href="./idade_moderna_forca.php"><button>Forca</button></a>
                    </div>
                </div>

            </div>

            <div class="item" style="background-image:linear-gradient(rgba(0, 0, 0, 0.371), rgba(0, 0, 0, 0.612)), url(https://www.vestibulandoweb.com.br/wp-content/uploads/2024/04/idade-media-ia.jpg);">
                
                <div class="content">
                    <div class="title">Idade Média</div>
                    <div class="des">ㅤ</div>
                  <div class="btn">
                    <a href="./idade_moderna_quiz.php"><button>Quiz</button></a>
                    <a href="./idade_moderna_forca.php"><button>Forca</button></a>
                    </div>
                </div>

            </div>

            <div class="item" style="background-image:linear-gradient(rgba(0, 0, 0, 0.371), rgba(0, 0, 0, 0.612)), url(https://images.educamaisbrasil.com.br/content/banco_de_imagens/guia-de-estudo/D/jornada-de-10-de-agosto-de-1792.jpg);">
                
                <div class="content">
                    <div class="title">Idade Moderna</div>
    
                    <div class="des">ㅤ</div>
                    <div class="btn">
                 <a href="./idade_moderna_quiz.php"><button>Quiz</button></a>
                    <a href="./idade_moderna_forca.php"><button>Forca</button></a>
                    </div>
                </div>

            </div>

          

        

        </div>

        <!--next prev button-->
        <div class="arrows">
            <button class="prev"><</button>
            <button class="next">></button>
        </div>


        <!-- time running -->
        <div class="timeRunning"></div>

    </div>

    <script src="./js/jogos.js"></script>
</body>
</html>