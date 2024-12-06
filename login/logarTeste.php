<?php

include "../connection.php";

$mysqli = connectionUser();

if(isset($_POST["login"]) || isset($_POST["senha"])) {
    if(strlen($_POST['login']) == 0) {
        echo "Preencha o Login!";
    } else if(strlen($_POST['senha']) == 0) {
            echo "Preencha o Senha!";
    } else {
        $login = $mysqli->real_escape_string($_POST["login"]);
        $senha = $mysqli->real_escape_string($_POST["senha"]);

        $sql_code = "SELECT * FROM backup_users WHERE firstName = '$login' AND passwords = '$senha'";
        $sql_query = $mysqli->query($sql_code) or die("falha na execução do code SQL: " . $mysqli->error);

        $quantidade = $sql_query->num_rows;

        if($quantidade == 1) {
            $usuario = $sql_query->fetch_assoc();

            if(!isset($_SESSION)) {
                session_start();
            }

            $_SESSION['id'] = $usuario['id'];
            $_SESSION['firstName'] = $usuario['firstName'];
            $_SESSION['lastName'] = $usuario['lastName'];

            header("Location: ../home.php");

        } else {
            echo "Login ou senha invalidos";
        }
    }

}
