<?php
    include './php/functions.php';
    
    if($_SERVER["REQUEST_METHOD"] == "POST") {
        $termo = $_POST["termo"];
        $descricao = $_POST["descricao"];


        $cadastro = "INSERT INTO glossario (glossario.term , glossario.description) VALUES ('$termo' , '$descricao')";
        $sql_query = $connection->query($cadastro);
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/insert.css">
    <title>Document</title>
</head>
<body id="formulario">
    <div  id="logar">

        <form action="" method="post">
            <h2>Insira um novo termo no glossario</h2>
            <label for="termo"></label>
            <input type="text" name="termo" placeholder="termo desejado:" require>
            <hr>
            
            <label for="descricao"> </label>
            <input type="text" name="descricao" placeholder="descrição do termo:" require>
            <hr>
            <div>

                <button type="submit" id="content">enviar</button>
                <button type="button" id="cancelar">Cancelar</button>
            </div>
           
        </form>
    </div>
    
</body>
</html>