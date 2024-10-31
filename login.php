<?php
    $base_project_name = '/projeto_historia';
    $root_folder = $_SERVER['DOCUMENT_ROOT'] . $base_project_name;
    $root_folder_link = $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] . $base_project_name;
    include $root_folder . '/php/functions.php';
    include $root_folder . '/php/connection.php';
    session_start();

    if ($_SERVER['REQUEST_METHOD'] == "POST") {
        $email = $_POST['email'];
        $password = md5($_POST['password']);

        $query = "SELECT * FROM usuarios WHERE email = ? AND password = ?";
        $statement = $connection->prepare($query);

        $statement->bind_param("ss", $email, $password);
        $statement->execute();

        $result = $statement->get_result();

        if ($result->num_rows > 0) {
            $userinfo = $result->fetch_assoc();
            $_SESSION['name'] = $userinfo['name'];
            $_SESSION['type'] = $userinfo['type'];
            $_SESSION['logged'] = true;
            header("Location: home.php");
        } else {
            echo "Usuário ou senha incorretos ou inexistentes.";
        }
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <?php include './html/links.php'; ?> 
        <link rel="stylesheet" href="./css/logim.css">

        <title>Formulário</title>
    </head>
    <body>
        <form action="" method="post">
            <section>
                <h2>Conectar-se</h2>
            </section>
            <label for="input-email">E-mail:</label>
            <input type="email" id="input-email" name="email"><br><br>

            <label for="input-password">Senha:</label>
            <input type="password" id="input-password" name="password"><br><br>

            <a id="a_login" href="./cadastro.php">Criar conta</a>

            <input type="submit" value="Enviar">
        </form>
    </body>
</html>