<?php

session_start();

$servidor = $_POST['servidor'];
$user = $_POST['usuario'];
$pass = $_POST['senha'];
$dbname = $_POST['dbname'];

$conn = mysqli_connect($servidor, $user , $pass, $dbname);
include_once("fileBackup.php");


header("Location: backup.php");