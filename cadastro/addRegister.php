<?php

include "../connection.php";



if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST["nome"];
    $sobrenome = $_POST["sobrenome"];
    $email = $_POST["email"];
    $senha = $_POST["senha"];
    // $cpf = $_POST["cpf"];


    $conexao = connection();

    try {
        $sql = "INSERT INTO backup_users (firstName, lastName, email, passwords) VALUES (:nome, :sobrenome, :email, :senha)";
        $stmt = $conexao->prepare($sql);
        $campos = array(
            ':nome' => $nome,
            ':sobrenome' => $sobrenome,
            ':email' => $email,
            ':senha' => $senha
            // ':cpf' => $cpf




        );


        if ($stmt->execute($campos)) {
            // echo "Usuário inserido com sucesso!";
            echo "<script>alert('Uusario inserido com sucesso');</script>"; ?>

            <script>
                window.location.href = ("../login.php");
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
