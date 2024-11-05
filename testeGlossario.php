<?php
    $base_project_name = '/projeto_historia';
    $root_folder = $_SERVER['DOCUMENT_ROOT'] . $base_project_name;
    $root_folder_link = $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] . $base_project_name;
    include $root_folder . '/php/functions.php';
    include $root_folder . '/php/connection.php';
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <?php include './html/links.php' ?>
    </head>
    <body>
        <section>
            <?php
            $buttons = ["a","b","c","d","e","f","g","h","i","j","k","l","m","n","o","p","q","r","s","t","u","v","w","x","y","z","-","*"];

            foreach ($buttons as $key => $letter) {
                echo "<button onclick=\"glossario.printTable(output, '$letter', obj => console.log(obj.id))\">$letter</button>";
            }
            ?>
            <!-- <input type="text" id="letterinput"> -->
            <table>
                <thead>
                    <tr>
                        <th style="padding-right: 2rem">Termo</th>
                        <th>Descrição</th>
                    </tr>
                </thead>
                <tbody id="letteroutput"></tbody>
            </table>
            <script>
                let output =searchElement('letteroutput', 'id');
            </script>
        </section>
    </body>
</html>