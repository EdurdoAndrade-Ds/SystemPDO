<?php

function welcome($user)
{
    if (isset($_SESSION['acao'])){
        $user = $_SESSION['user'];

        return 'Visitante';
    }

    return $_SESSION['fullName'] . ' | <a href="#">Logout</a>';
}

