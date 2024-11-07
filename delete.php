<?php
    $base_project_name = '/projeto_historia';
    $root_folder = $_SERVER['DOCUMENT_ROOT'] . $base_project_name;
    $root_folder_link = $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] . $base_project_name;
    include $root_folder . '/php/functions.php';
    include $root_folder . '/php/connection.php';
    session_start();

    if (!isset($_SESSION['type']) || $_SESSION['type'] !== "admin") {
        header("Location: ./home.php");
    }

    if ($_SERVER['REQUEST_METHOD'] !== "GET" || (!isset($_GET['term']) && !isset($_GET['id']) && !isset($_GET['description']))) {
        header("Location: ./glo.php");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/insert.css">
    <title>Document</title>
    <?php include './html/links.php' ?>
</head>
<body id="formulario">
    <div  id="logar">
        <a href="./glo.php">Voltar</a><br><br>

        <form action="./glo.php" method="post" id="form-add">
            <p style="display: none; color: red; text-align: center" id="alert"></p>
            <h2>Realmente deseja remover este termo?</h2>
            <p id="display-term"><b>Termo: </b><?php if ($_GET['term']) echo $_GET['term'] ?></p>
            <p id="display-desc"><b>Descrição: </b><?php if($_GET['description']) echo $_GET['description'] ?></p>

            <input type="hidden" name="id_input" value="<?php echo $_GET['id'] ?>">

            <hr>
            <div>
                <button type="submit" id="content">Remover</button>
            </div>
        </form>
        <script>
            window.addEventListener('load', () => {
                const id = <?php echo $_GET['id'] ?>;

                searchElement('form-add', 'id').addEventListener('submit', event => {
                    const form = event.target;

                    const id = form.id_input.value

                    fetch(`./php/editGlossario.php?action=remove&id=${encodeURI(id)}`).then(resp => resp.text()).then(text =>console.log(text));
                    location.href = "./glo.php"
                    event.preventDefault();
                })
            })
        </script>
    </div>
    
</body>
</html>