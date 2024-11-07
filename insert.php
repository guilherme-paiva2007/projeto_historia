<?php
    // include './php/functions.php';
    
    // if($_SERVER["REQUEST_METHOD"] == "POST") {
    //     $termo = $_POST["termo"];
    //     $descricao = $_POST["descricao"];


    //     $cadastro = "INSERT INTO glossario (glossario.term , glossario.description) VALUES ('$termo' , '$descricao')";
    //     $sql_query = $connection->query($cadastro);
    // }
?>
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
            <h2>Insira um novo termo no glossario</h2>
            <label for="termo">Termo</label>
            <input type="text" name="term" placeholder="termo desejado:" required>
            <hr>
            
            <label for="descricao">Descrição</label>
            <input type="text" name="description" placeholder="descrição do termo:" required>
            <hr>
            <div>

                <button type="submit" id="content">Adicionar</button>
            </div>
        </form>
        <script>
            searchElement('form-add', 'id').addEventListener('submit', event => {
                const form = event.target;
                const alertElem = searchElement('alert', 'id')

                if (!form.term) {
                    alertElem.style.display = "block";
                    alertElem.innerHTML = "Termo não fornecido";
                    return event.preventDefault()
                };
                if (!form.description) {
                    alertElem.style.display = "block";
                    alertElem.innerHTML = "Descrição não fornecida";
                    return event.preventDefault()
                };

                const term = form.term.value;
                const description = form.description.value;

                let exists = false;

                glossario.allTerms.forEach(termObj => {
                    if (termObj.term.toLowerCase() == term.toLowerCase()) {
                        exists = true;
                        alertElem.style.display = "block";
                        alertElem.innerHTML = "Termo já existe";
                    }
                })

                if (exists) return event.preventDefault();

                fetch(`./php/editGlossario.php?action=add&term=${encodeURI(term)}&description=${encodeURI(description)}`).then(resp => resp.text()).then(text =>console.log(text));
            })
        </script>
    </div>
    
</body>
</html>