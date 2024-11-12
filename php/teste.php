<?php
session_start();

foreach ($_SESSION as $item => $valor) {
    echo $item . " => " . $valor . "<br>";
}