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
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <label for="termo">termo desejado: </label>
        <input type="text" name="termo" require>

        <label for="descricao">descricao do termo: </label>
        <input type="text" name="descricao" require>

        <input type="submit" >
    </form>
    
</body>
</html>