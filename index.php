<?php
    $base_project_name = '/projeto_historia';
    $root_folder = $_SERVER['DOCUMENT_ROOT'] . $base_project_name;
    $root_folder_link = $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] . $base_project_name;
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
    <body>
        <a href="#form">A</a>
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