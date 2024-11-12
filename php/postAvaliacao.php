<?php
include './connection.php';
session_start();

if ($_SERVER['REQUEST_METHOD'] == "GET" && isset($_GET['nota'])) {
    $id = $_SESSION['id'];
    $nota = $_GET['nota'];
    $query_check = "SELECT * FROM avaliacoes WHERE id_usuario = ?";

    $statement = $connection->prepare($query_check);
    $statement->bind_param("i", $id);
    $statement->execute();
    $result = $statement->get_result();

    if (!in_array($nota, ['1', '2', '3', '4', '5'])) {
        exit("0");
    }

    if ($result->num_rows == 0) {
        $query = "INSERT INTO avaliacoes (id_usuario, nota) VALUES (?, ?)";
        $statement = $connection->prepare($query);
        $statement->bind_param("is", $id, $nota);
        $statement->execute();
    }
    if ($result->num_rows == 1) {
        $query = "UPDATE avaliacoes SET nota = ? WHERE id_usuario = ?";
        $statement = $connection->prepare($query);
        $statement->bind_param("si", $nota, $id);
        $statement->execute();
    }
    $_SESSION['nota'] = $nota;
}