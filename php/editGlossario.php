<?php
include './connection.php';
session_start();

if ($_SERVER['REQUEST_METHOD'] == "GET" && $_SESSION['type'] == "admin") {
    if (isset($_GET['action'])) {
        $action = $_GET['action'];

        echo $action;

        switch ($action) {
            case 'add':
                
                if (isset($_GET['term']) && isset($_GET['description'])) {
                    $term = $_GET['term'];
                    $description = $_GET['description'];

                    $query = "INSERT INTO glossario (`term`, `description`) VALUES (?, ?)";
                    $statement = $connection->prepare($query);
                    $statement->bind_param("ss", $term, $description);

                    $statement->execute();

                    echo 1;
                } else {
                    echo 015;
                }

                break;
            case 'edit':

                if (isset($_GET['term']) && isset($_GET['description']) && isset($_GET['id'])) {
                    $id = $_GET['id'];
                    $term = $_GET['term'];
                    $description = $_GET['description'];

                    $query = "UPDATE `glossario` SET `term` = ?, `description` = ? WHERE `id` = ?";
                    $statement = $connection->prepare($query);
                    $statement->bind_param("ssi", $term, $description, $id);

                    $statement->execute();

                    echo 1;
                } else if (isset($_GET['term']) && isset($_GET['id'])) {
                    $id = $_GET['id'];
                    $term = $_GET['term'];

                    $query = "UPDATE `glossario` SET `term` = ? WHERE `id` = ?";
                    $statement = $connection->prepare($query);
                    $statement->bind_param("si", $term, $id);

                    $statement->execute();

                    echo 1;
                } else if (isset($_GET['description']) && isset($_GET['id'])) {
                    $id = $_GET['id'];
                    $description = $_GET['description'];

                    $query = "UPDATE `glossario` SET `description` = ? WHERE `id` = ?";
                    $statement = $connection->prepare($query);
                    $statement->bind_param("si", $description, $id);

                    $statement->execute();

                    echo 1;
                } else {
                    echo 014;
                }

                break;
            case 'remove':
                if (isset($_GET['id'])) {
                    $id = $_GET['id'];
    
                    $query = "DELETE FROM glossario WHERE id = ?";
                    $statement = $connection->prepare($query);
                    $statement->bind_param("i", $id);
    
                    $statement->execute();
    
                    echo 1;
                } else {
                    echo 013;
                }

                break;
            default:
                echo 012;
                break;
        }
    } else {
        echo 011;
    }
} else {
    echo 10;
}