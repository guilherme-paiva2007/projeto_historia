<?php
    $base_project_name = '/projeto_historia';
    $root_folder = $_SERVER['DOCUMENT_ROOT'] . $base_project_name;
    $root_folder_link = $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] . $base_project_name;
    include $root_folder . '/php/functions.php';
    include $root_folder . '/php/connection.php';
    session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="./css/style.css"/>
        <title>Document</title>
    </head>
    <body>
        <nav>
            </div>
            <ul class="nav__links" id="nav-links">
                <li><a href="#">Home</a></li>
                <li><a href="#">Glossário</a></li>
            </ul>
            <div class="nav__btns">
                <button class="btn">Sign Up</button>
            </div>
        </nav>
        <header class="section__container header__container">
            <div class="header__image">
                <img src="../css/3079185.png" alt="">
            </div>
            <div class="header__content">
                <h2>Bem vindo a</h2>
                <h1>Crônicas do tempo</h1>
            </div>
        </header>
    </body>
</html>