<?php

$host = "localhost";
$bd = "upload";
$user = "root";
$pass = "";

$mysqli = new mysqli($host, $user, $pass, $bd);

if ($mysqli->connect_errno) {
    echo "Connect falied: " . $mysqli->connect_error;
    exit();
}
