<?php

// Banco TablePlus
function connection()
{
    if (!isset($conexao)) {
        $host = "localhost";
        $dbname = "users";
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


function connectionUpload()
{
    if (!isset($conexao)) {
        $host = "localhost";
        $dbname = "upload";
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

function connectionUser()
{
    $host = "localhost";
    $db = "users";
    $user = "root";
    $pass = "";

    $mysqli = new mysqli($host, $user, $pass, $db);
    if($mysqli->connect_errno) {
        die("Falha na conecao com o banco de dados: " . $mysqli->connect_errno);
    }

    return $mysqli;
}

function connectionCom()
{
    $dbHost = 'localhost';
    $dbUsername = 'root';
    $dbPassword = 'dudu22';
    $dbName = 'users';
    
    $conexao = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);
    
    // if($conexao->connect_errno) {
    //     echo "Erro na conexao";
    // } else {
    //     echo "conexao realizada com sucesso";
    // }
    return $conexao;
}

// Banco MysqlWorkbench
// $servername = "localhost:3307";
// $username = "root";
// $password = "";
// $database = "lojaMaster";

// $conn2 = mysqli_connect($servername, $username, $password, $database);

// if ($conn2) {
// echo "<h3>Conectado com o banco de dados:</h3> $database";
// } else {
// die("Conexão falhou: " . mysqli_connect_error());
// }

?>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="./assets/js/usersJs.js" type="text/javascript"></script>
<script src="../assets/js/log.js" type="text/javascript"></script>
<script src="./assets/js/infor.js" type="text/javascript"></script>