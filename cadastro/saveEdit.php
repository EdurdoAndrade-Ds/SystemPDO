<?php

include "../connection.php";

$conexao = connection();

if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $nome = $_POST['nome'];
    $sobrenome = $_POST['sobrenome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $sqlUpdate = "UPDATE backup_users SET firstName='$nome', lastName='$sobrenome',email='$email',passwords='$senha' WHERE id='$id'";

    $result = $conexao->query($sqlUpdate);
}
header('Location: ../home.php');