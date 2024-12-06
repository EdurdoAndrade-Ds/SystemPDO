<?php

include "../connection.php";



if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST["nome"];
    $sobrenome = $_POST["sobrenome"];
    $email = $_POST["email"];
    $senha = $_POST["senha"];
    $table = $_POST["table"];


    $conexao = connection();

    try {
        $sql = "INSERT INTO $table (firstName, lastName, cpf, email, passwords) VALUES (:nome, :sobrenome, :cpf, :email, :senha)";
        $stmt = $conexao->prepare($sql);
        $campos = array(
            ':nome' => $nome,
            ':sobrenome' => $sobrenome,
            ':cpf' => $cpf,
            ':email' => $email,
            ':senha' => $senha




        );


        if ($stmt->execute($campos)) {
            // echo "Usuário inserido com sucesso!";
            echo "<script>alert('Uusario inserido com sucesso');</script>"; ?>

            <script>
                window.location.href = ("../signup.php");
            </script>
<?php
        } else {
            echo "Erro ao inserir usuário: ";
            echo "<script>Alert ('Erro')</script>";
        }
    } catch (\PDOException $e) {
        die($e->getMessage());
    }
}
