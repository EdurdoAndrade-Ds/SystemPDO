<?php

include "../connection.php";




if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $idUser = isset($_POST['idUser']) ? $_POST['idUser'] : null;

    if ($idUser !== null) {
        echo "ID do Usuário Recebido: $idUser";
    } else {
        echo 'ID do Usuário não fornecido';
    }
} else {
    echo 'Requisição inválida';
}


?>
<link rel="stylesheet" href="../assets/css/styles.css">
<link rel="stylesheet" href="../assets/css/stylesSignup.css">

<header>
    <a class="link" href="../home.php">Voltar</a>
</header>

<div class="div-edit">
    <form action="">

        <h2>Edit</h2>

        <input type="text" name="nome" id="nome" placeholder="FirstName">
        <input type="text" name="sobrenome" id="" placeholder="LastName">
        <input type="email" name="email" id="email" placeholder="Email">
        <input type="password" name="senha" id="senha" placeholder="Senha">

        <button type="submit" name="button" class="btn btn-primary" >Edit</button>
    </form>
</div>