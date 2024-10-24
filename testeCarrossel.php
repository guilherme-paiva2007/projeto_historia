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
        <title>Document</title>
        <?php include './html/links.php' ?>
    </head>
    <style>
        #carousel1 {
            width: 200px;
            height: 200px;
        }
    </style>
    <body>
        <div class="carousel" id="carousel1">
            <div style="background-color: var(--red)" class="carouselSection"></div>
            <div style="background-color: var(--green)" class="carouselSection"></div>
            <div style="background-color: var(--blue)" class="carouselSection"></div>
        </div>
    </body>
</html>
<script>
let carousel1 = new Carousel(searchElement('carousel1', 'id'))
</script>