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
        <?php include './html/links.php'; ?>
        <link rel="stylesheet" href="./css/perfil.css">
        <title>Perfil</title>
    </head>
    <body style="display: flex; justify-content: center; align-items: center; height: 100vh">
        <section style="margin-top: 0;">

            <div style="display: flex; flex-direction: column;">
                <a href="./home.php">Início</a>
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
                <section style="margin-top: 3rem">
                    <button onclick="location.href='./php/logout.php'" style="margin: 0 auto; padding: 2px 4px; margin-bottom: 1rem">Sair</button>
                    
    
    
                </section>
            
            </div>
        </section>
    </body>
</html>