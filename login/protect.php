<link rel="stylesheet" href="./assets/css/styles.css">

<?php

if(!isset($_SESSION)) {
    session_start();
}

if(!isset($_SESSION["id"])) {
    die("<h1 id='warningLog'>Voce nao pode acessar porque nao esta logado.</h1>");
    
}

?>
