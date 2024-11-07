<?php
include './connection.php';
session_start();

if (isset($_SESSION['logged']) && $_SESSION['logged'] == true) {
    header("Location: ../home.php");
}

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    if (isset($_POST['email']) && isset($_POST['name']) && $_POST['password']) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['password'];

        $verify_query = "SELECT * FROM usuarios WHERE email = ?";
        $verify_statement = $connection->prepare($verify_query);
        $verify_statement->bind_param("s", $email);

        $verify_statement->execute();
        $verify_result = $verify_statement->get_result();

        if ($verify_result->num_rows == 0) {
            $insert_query = "INSERT INTO `usuarios` (`name`, `email`, `password`, `type`) VALUES (?, ?, MD5(?), \"user\");";
            $insert_statement = $connection->prepare($insert_query);
            $insert_statement->bind_param("sss", $name, $email, $password);

            $insert_statement->execute();

            $_SESSION['name'] = $name;
            $_SESSION['type'] = "user";
            $_SESSION['logged'] = true;
            header("Location: ../home.php");
        } else {
            $_SESSION['register_failed'] = true;
            header('Location: ../login.php');
        }
    } else {
        $_SESSION['register_failed'] = true;
        header('Location: ../login.php');
    }
} else {
    header("Location: ../login.php");
}