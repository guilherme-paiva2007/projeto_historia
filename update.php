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
            <h2>Editar termo do glossário</h2>
            <label for="termo">Termo</label>
            <input type="text" name="term" placeholder="<?php echo $_GET['term'] ?>">
            <hr>
            
            <label for="descricao">Descrição</label>
            <input type="text" name="description" placeholder="<?php echo $_GET['description'] ?>">
            <input type="hidden" name="id_input" value="<?php echo $_GET['id'] ?>">
            <hr>
            <div>

                <button type="submit" id="content">Editar</button>
            </div>
        </form>
        <script>
            searchElement('form-add', 'id').addEventListener('submit', event => {
                const form = event.target;
                const alertElem = searchElement('alert', 'id')

                const term = form.term.value;
                const desc = form.description.value;
                const id_input = form.id_input.value;

                let sufix = ['action=edit', `id=${encodeURI(id_input)}`]

                if (term !== "") sufix.push(`term=${encodeURI(term)}`);
                if (desc !== "") sufix.push(`description=${encodeURI(desc)}`)

                fetch(`./php/editGlossario.php?` + sufix.join("&")).then(resp => resp.text()).then(text =>console.log(text));

                location.href = "";
            })
        </script>
    </div>
    
</body>
</html>