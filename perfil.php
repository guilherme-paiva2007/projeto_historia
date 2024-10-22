<?php
    $base_project_name = '/projeto_historia';
    $root_folder = $_SERVER['DOCUMENT_ROOT'] . $base_project_name;
    $root_folder_link = $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] . $base_project_name;
    include $root_folder . '/php/functions.php';
    include $root_folder . '/php/connection.php';
    session_start();

    if ($_SESSION['logged'] == false) {
        header('Location: login.php');
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <?php include $root_folder . '/html/links.php'; ?>
        <link rel="stylesheet" href="./css/perfil.css">
        <title>Perfil</title>
    </head>
    <body>
        <div style="display: flex; flex-direction: column;">
            <h2>Bem vindo</h2>
            <?php
             if(  $_SESSION['type'] == "admin"){
                echo ('<img id="uso" src="./img/utilizador-dourado.png" alt="">');
            }else{
                echo ('<img id="uso" src="./img/do-utilizador (1).png" alt="">');
            }
            ?>
            <p id="info">Nome: <?php echo $_SESSION['name'] ?></p>
            <p>Nível de usuário: <?php echo $_SESSION['type']; 
            ?></p>
            <section>
                <button onclick="location.href='./php/logout.php'" style="margin: 0 auto; padding: 2px 4px">Sair</button>
                <?php
                 if(  $_SESSION['type'] == "admin"){
                    echo ('<button onclick="location.href=" style="margin: 0 auto; padding: 2px 4px">criar</button>');
                 }
                ?>


            </section>
        
        </div>
    </body>
</html>