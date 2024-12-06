<?php

include "./connection.php";


$pesquisa = $mysqli->real_escape_string($_GET['busca']);
$sql_code = "SELECT * FROM users WHERE firstName LIKE '%$pesquisa%' OR lastName LIKE '%$pesquisa%' OR id LIKE '%$pesquisa%'";
$sql_code .= "SELECT * FROM backup_users WHERE firstName LIKE '%$pesquisa%' OR lastName LIKE '%$pesquisa%' OR id LIKE '%$pesquisa%'";

$sql_query = $mysqli->query($sql_code) or die("Erro ao consultar " . $mysqli->error);