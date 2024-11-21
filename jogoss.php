<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Animated Image Slider</title>

    <link rel="stylesheet" href="./css/jogos.css"/>

</head>
<body>
    
    <header>

        <nav>
        
            <a href="./home2.php" class="active">Voltar</a>
      
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