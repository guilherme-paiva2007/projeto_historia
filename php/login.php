<?php
include './connection.php';
session_start();

if (isset($_SESSION['logged']) && $_SESSION['logged'] == true) {
    header("Location: ../home.php");
}

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
        $_SESSION['id'] = $userinfo['id'];

        $query_nota = "SELECT nota FROM avaliacoes WHERE id_usuario = ?";
        $statement = $connection->prepare($query_nota);
        $statement->bind_param("i", $userinfo['id']);
        $statement->execute();
        
        $_SESSION['nota'] = $statement->get_result()->fetch_assoc()['nota'];

        $_SESSION['logged'] = true;
        header("Location: ../home.php");
    } else {
        $_SESSION['failed_login'] = true;
        header("Location: ../login.php");
    }
}