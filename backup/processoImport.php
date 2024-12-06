<?php

session_start();

$arquivo = $_FILES['backup'];
$banco = $arquivo['tmp_name'];

$servidor = $_POST['servidor'];
$user = $_POST['usuario'];
$pass = $_POST['senha'];
$dbname = $_POST['dbname'];


$conn = mysqli_connect($servidor, $user , $pass, $dbname);

$dados = file_get_contents($banco);
// var_dump($dados);

mysqli_multi_query($conn, $dados);

$_SESSION['msg1'] = "<span style='color: green'>Base Dados Restaurado para: $dbname</span>";
header("Location: backup.php");



// include_once("fileBackup.php");




