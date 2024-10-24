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
        #dropdown1 {
            height: 50px;
            width: 200px;
            background-color: var(--red);
        }
    </style>
    <body>
        <div id="dropdown1">
            <span class="dropdownOption" style="position: absolute; background-color: var(--blue)" onclick="console.log('a')"></span>
            <span class="dropdownOption" style="position: absolute; background-color: var(--green)" onclick="console.log('b')"></span>
            <span class="dropdownOption" style="position: absolute; background-color: var(--yellow)" onclick="console.log('c')"></span>
            <span class="dropdownOption" style="position: absolute; background-color: var(--yellow)" onclick="console.log('d')"></span>
            <span class="dropdownOption" style="position: absolute; background-color: var(--yellow)" onclick="console.log('e')"></span>
            <span class="dropdownOption" style="position: absolute; background-color: var(--yellow)" onclick="console.log('f')"></span>
        </div>
    </body>
</html>
<script>
    let dropdown1 = new Dropdown(searchElement('dropdown1', 'id'));
</script>