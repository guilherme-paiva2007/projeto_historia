<?php

include './connection.php';

if ($_SERVER['REQUEST_METHOD'] == "GET") {
    if (isset($_GET['letter'])) {
        $letter = substr($_GET['letter'], 0, 1);

        if ($letter == "*") {
            $query = "SELECT * FROM glossario";
            $statement = $connection->prepare($query);
        } else {
            $query = "SELECT * FROM glossario WHERE term LIKE ?";
            $where_letter_like = "$letter%";
            $statement = $connection->prepare($query);
            $statement->bind_param("s", $where_letter_like);
        }

        $statement->execute();
        $result = $statement->get_result();

        $terms_array = [];

        while ($term = $result->fetch_assoc()) {
            array_push($terms_array, $term);
        }

        echo json_encode($terms_array);
    } else if (isset($_GET['word'])) {
        $word = $_GET['word'];

        $query = "SELECT * FROM glossario WHERE term = ?";
        $statement = $connection->prepare($query);
        $statement->bind_param("s", $word);
        
        $statement->execute();
        $result = $statement->get_result();

        $encoded = json_encode($result->fetch_assoc());
        if ($encoded == "null") {
            echo "{}";
        } else {
            echo $encoded;
        }
    } else if (isset($_GET['id'])) {
        $id = $_GET['id'];

        $query = "SELECT * FROM glossario WHERE id = ?";
        $statement = $connection->prepare($query);
        $statement->bind_param("i", $id);

        $statement->execute();
        $result = $statement->get_result();

        $encoded = json_encode($result->fetch_assoc());
        if ($encoded == "null") {
            echo "{}";
        } else {
            echo $encoded;
        }
    } else {
        echo "{}";
    }
}