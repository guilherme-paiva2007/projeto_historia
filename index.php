<?php
    $root_folder = $_SERVER['DOCUMENT_ROOT'] . '/projeto_historia';
    include $root_folder . '/php/functions.php';
    include $root_folder . '/php/connection.php';
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>História</title>
        <?php include $root_folder . '/html/links.php'; ?>
    </head>
    <style>
        * {
            scroll-behavior: smooth;
        }
    </style>
    <body style="scroll-behavior: smooth;">
        <a href="#form">A</a>
        <?php
        for ($i=0; $i < 70; $i++) { 
            echo "<br>";
        }
        ?>
        <?php include $root_folder . '/html/header.php'; ?>
        <?php print_users(); ?>
        <main>
            <?php anchor("Ancora", "/html/header.php");?>
            <form action="#form" id="form" method="POST">
                <input type="text" name="post" id="">
                <button type="submit">Enviar</button>
                <br>
                <?php echo $_SERVER['REQUEST_METHOD']; ?>
                <br>
                <?php echo $_POST['post'] ?>
            </form>
        </main>
        <?php
        for ($i=0; $i < 70; $i++) { 
            echo "<br>";
        }
        ?>
        <?php include $root_folder . '/html/footer.php'; ?>
    </body>
</html>