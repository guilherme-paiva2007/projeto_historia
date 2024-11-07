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
    <div>
        <h1>Editar</h1>
        <label for="">id</label>
        <input type="number" id="edit-id"><br>
        <label for="">term</label>
        <input type="text" id="edit-term"><br>
        <label for="">description</label>
        <input type="text" id="edit-description"><br>
        <script>
            let edit_id = searchElement('edit-id', 'id');
            let edit_term = searchElement('edit-term', 'id');
            let edit_description = searchElement('edit-description', 'id');
        </script>
        <button onclick="glossario.editTerm(edit_id.value, edit_term.value, edit_description.value)">Editar</button>
    </div>
    <div>
        <h1>Adicionar</h1>
        <label for="">term</label>
        <input type="text" id="add-term"><br>
        <label for="">description</label>
        <input type="text" id="add-description"><br>
        <script>
            let add_term =searchElement('add-term', 'id')
            let add_description =searchElement('add-description', 'id')
        </script>
        <button onclick="glossario.addTerm(add_term.value, add_description.value)">Adicionar</button>
    </div>
    <div>
        <h1>Remover</h1>
        <label for="">id</label>
        <input type="number" id="remove-id"><br>
        <script>
            let remove_id =searchElement('remove-id', 'id')
        </script>
        <button onclick="glossario.removeTerm(remove_id.value)">Remover</button>
    </div>
</body>
</html>