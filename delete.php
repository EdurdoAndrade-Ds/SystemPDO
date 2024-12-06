<link rel="stylesheet" href="./assets/css/styles.css">


<?php

include "./connection.php";

$userDeletado = $_POST['idUser'];

$conn = connection();

$sql = "DELETE FROM users WHERE id = $userDeletado";

if ($conn->query($sql) != "") {
    echo "true";
} else {
    echo "Erro ao deletar usuário: " . $conn->$error;
}

