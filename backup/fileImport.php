<?php

$servidor = $_POST['servidor'];
$user = $_POST['usuario'];
$pass = $_POST['senha'];
$dbname = $_POST['dbname'];

$conn = mysqli_connect($servidor, $user , $pass, $dbname);

if (!isset($conn)) {
    $host = "localhost";
    $dbname = "upload";
    $usuario = "root";
    $senha = "";

    $dsn = "mysql:host=$host;dbname=$dbname;charset=utf8";

    try {
        $conn = new PDO($dsn, $usuario, $senha);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $conn;
    } catch (PDOException $e) {
        die("Erro de conexão catch: " . $e->getMessage());
    }
}