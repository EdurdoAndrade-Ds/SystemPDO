<link rel="stylesheet" href="./assets/css/styles.css">


<?php

include "./config.php";

$userDeletado = $_POST['idUser'];

$conn = connectionP();

$sql = "DELETE FROM registro WHERE id = $userDeletado";

if ($conn->query($sql) != "") {
    echo "true";
} else {
    echo "Erro ao deletar usuário: " . $conn->$error;
}

