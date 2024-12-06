<?php

class Signup
{

    public function register()
    {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Coletar os dados do formulário
            $name = $_POST["nome"];
            $lastName = $_POST["sobrenome"];
            $password = $_POST["senha"];

            // Conectar-se ao banco de dados MySQL


            $host = "localhost";
            $dbname = "users";
            $usuario = "root";
            $senha = "";

            $conn = mysqli_connect($host, $usuario, $senha, $dbname);

            if (!$conn) {
                die("Conexão falhou: " . mysqli_connect_error());
            }

            // Inserir os dados na tabela d 'o banco de dados
            $sql = "INSERT INTO usuarios (nome, sobrenome, senha) VALUES ('$name', '$lastName', '$password')";

            if (mysqli_query($conn, $sql)) {
                echo "Registro realizado com sucesso!";
            } else {
                echo "Erro ao registrar: " . mysqli_error($conn);
            }

            // Fechar a conexão com o banco de dados
            mysqli_close($conn);
        } else {
            echo "Acesso inválido ao arquivo de processamento.";
        }
    }
}
