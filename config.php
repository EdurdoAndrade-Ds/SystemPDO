<?php


$dbHost = 'localhost';
$dbUsername = 'root';
$dbPassword = '';
$dbName = 'formulario';

$conexao = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

function connectionP()
{
    if (!isset($conexao)) {
        $host = "localhost";
        $dbname = "formulario";
        $usuario = "root";
        $senha = "";

        $dsn = "mysql:host=$host;dbname=$dbname;charset=utf8";

        try {
            $conexao = new PDO($dsn, $usuario, $senha);
            $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            // echo "<h3>Conectado com o banco de dados:</h3> ";
            return $conexao;
        } catch (PDOException $e) {
            die("Erro de conexão catch: " . $e->getMessage());
        }
    }

    return $conexao;

}

