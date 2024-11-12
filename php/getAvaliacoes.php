<?php
include './connection.php';
session_start();

if ($_SESSION['type'] == "admin") {
    $query = "SELECT COUNT(nota) AS 'qnt_notas', AVG(nota) AS 'media' FROM avaliacoes";
    $statement = $connection->prepare($query);
    $statement->execute();
    $result = $statement->get_result();

    $assoc = $result->fetch_assoc();

    echo json_encode($assoc);
} else {
    exit("Acesso inválido");
}