<link rel="stylesheet" href="../assets/css/styles.css">

<header>
    <a href="../home.php">Inicio</a>
</header>

<h2>Coonection pdo test</h2>

<?php

function connectionTest()
{
    if (!isset($conexao)) {
        $host = "192.168.2.174:3307";
        $dbname = "servidormasterti";
        $usuario = "root";
        $senha = "";

        $dsn = "mysql:host=$host;dbname=$dbname;charset=utf8";

        try {
            $conexao = new PDO($dsn, $usuario, $senha);
            $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            echo "<h3>Conectado com o banco de dados:  $dbname</h3> ";
            return $conexao;
        } catch (PDOException $e) {
            die("Erro de conexão catch: " . $e->getMessage());
        }
    }

    return $conexao;
}

$connT = connectionTest();