<?php

include "../config.php";

$conexao = connectionP();

if (isset($_POST['updateCom'])) {
    $tipo = $_POST['tipo'];
    $marca = $_POST['marca'];
    $user = $_POST['user'];
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $password = $_POST['passwords'];
    $teamviewer = $_POST['teamviewer'];
    $mac = $_POST['mac'];
    $ip = $_POST['ip'];
    $rede = $_POST['rede'];
    $sever = $_POST['sever'];
    $proces = $_POST['proces'];
    $placaM = $_POST['placaM'];
    $memoriaR = $_POST['memoriaR'];
    $placaV = $_POST['placaV'];
    $armazenamento = $_POST['armazenamento'];
    $sistema = $_POST['sistema'];
    $alimentacao = $_POST['alimentacao'];

    $sqlUpdate = "UPDATE registro SET firstName='$nome', lastName='$sobrenome',email='$email',passwords='$senha' WHERE id='$id'";

    $result = $conexao->query($sqlUpdate);
}
header('Location: ../home.php');