<?php

class Login
{
    public function index()
    {
    }

    public function store()
    {
        include 'conection.php';

        if(isset($_POST['login']) || isset($_POST['senha'])) {

            if(strlen($_POST['login']) == null ){
                echo "Preencha o Name";
            } else if(strlen($_POST['senha']) == 0) {
                echo "Preencha a senha";
            } else {
                
                $login = $mysqli->real_escape_string($_POST['login']);
                $login = $mysqli->real_escape_string($_POST['senha']);

                $query = "SELECT * FROM users WHERE username = '$login' AND password = '$password";
                $sql_query = $mysqli->query($query) or die("falha na execução do codígo SQL: $mysqli->error");

                $quantidade = $sql_query->num_rows;

                if($quantidade == 1) {

                    $usuario = $sql_query->fetch_assoc();

                    if(!isset($_SESSION)) {
                        session_start();
                    }

                    $_SESSION['id'] = $usuario['id'];
                    $_SESSION['login'] = $usuario['name'];

                } else {
                    echo "Falha ao logar! Usuario ou senha incorretos";
                }


            }
        }


    }
}
