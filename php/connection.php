<?php

$connection = new mysqli("localhost", "root", "", "projeto_historia");

function print_users() {
    global $connection;

    $search = $connection->query("SELECT * FROM users");

    while ($user = $search->fetch_assoc()) {
        foreach ($user as $key => $value) {
            echo "$key: $value  |  ";
        }
        echo "<br>";
    }
}