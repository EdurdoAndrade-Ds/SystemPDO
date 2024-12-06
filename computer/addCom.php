<?php

include "../config.php";



if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // var_dump($tipo = $_POST['tipo']);
    // var_dump($marca = $_POST['marca']);
    // var_dump($user = $_POST['user']);
    // var_dump($nome = $_POST['nome']);
    // var_dump($email = $_POST['email']);
    // var_dump($password = $_POST['passwords']);
    // var_dump($teamviewer = $_POST['teamviewer']);
    // var_dump($mac = $_POST['mac']);
    // var_dump($ip = $_POST['ip']);
    // var_dump($rede = $_POST['rede']);
    // var_dump($sever = $_POST['sever']);
    // var_dump($proces = $_POST['proces']);
    // var_dump($placaM = $_POST['placaM']);
    // var_dump($memoriaR = $_POST['memoriaR']);
    // var_dump($placaV = $_POST['placaV']);
    // var_dump($armazenamento = $_POST['armazenamento']);
    // var_dump($sistema = $_POST['sistema']);
    // var_dump($alimentacao = $_POST['alimentacao']);


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



    $conexao = connectionP();

    try {
        $sql = "INSERT INTO registro (tipo, marca, user, nome, email, passwords, teamviewer, mac, ip, rede, sever, proces, placaM, memoriaR, placaV, armazenamento, sistema, alimentacao) VALUES (:tipo, :marca, :user, :nome, :email, :passwords, :teamviewer, :mac, :ip, :rede, :sever, :proces, :placaM, :memoriaR, :placaV, :armazenamento, :sistema, :alimentacao)";
        $stmt = $conexao->prepare($sql);
        $campos = array(
            ':tipo' => $tipo,
            ':marca' => $marca,
            ':user' => $user,
            ':nome' => $nome,
            ':email' => $email,
            ':passwords' => $password,
            ':teamviewer' => $teamviewer,
            ':mac' => $mac,
            ':ip' => $ip,
            ':rede' => $rede,
            ':sever' => $sever,
            ':proces' => $proces,
            ':placaM' => $placaM,
            ':memoriaR' => $memoriaR,
            ':placaV' => $placaV,
            ':armazenamento' => $armazenamento,
            ':sistema' => $sistema,
            ':alimentacao' => $alimentacao
   
        );
    
    
        if ($stmt->execute($campos)) {
            // echo "Usuário inserido com sucesso!";
            echo "<script>alert('Uusario inserido com sucesso');</script>"; ?>
    
            <script>
                window.location.href = ("../computer/homeComputer.php");
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
