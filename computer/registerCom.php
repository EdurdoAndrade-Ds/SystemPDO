<?php


if(isset($_POST['submit'])) {
    var_dump($_POST['nome']);
    var_dump($_POST['email']);
    var_dump($_POST['passwords']);
    var_dump($_POST['tipo']);
    
    var_dump($_POST['user']);
    var_dump($_POST['teamviewer']);

    var_dump($_POST['mac']);
    var_dump($_POST['ip']);
    var_dump($_POST['rede']);
    var_dump($_POST['sever']);

    include('../config.php');
    $conn = connectionP();

    $tipo = $_POST['tipo'];
    $user = $_POST['user'];
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $password = $_POST['passwords'];
    $teamviewer = $_POST['teamviewer'];
    $mac = $_POST['mac'];
    $ip = $_POST['ip'];
    $rede = $_POST['rede'];
    $sever = $_POST['sever'];

    

    // $result = mysqli_query($conexao, "INSERT INTO registro (tipo,user,nome,email,passwords,teamviewer,mac,ip,rede,sever)
    // VALUES ('$tipo','$user','$nome','$email','$password','$teamviewer','$mac','$ip','$rede','$sever')");
} else {
    echo 'nao enviado';
}



?>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<link rel="stylesheet" href="../assets/css/styles.css">
<link rel="stylesheet" href="../assets/css/styleCom.css">

<header>
    <a href="../home.php">Inicio</a>
    <a href="./homeComputer.php">Computer</a>
</header>


<h1>Register Computer</h1>

<div class="div-editCom">
        <form action="addCom.php" method="post">
            <fieldset>
                <br>

                <div class="inputBoxContainer">
                    <div class="inputBox1">
                        <input type="text" name="tipo" id="tipo" class="inputUser" required>
                        <label for="tipo" class="labelInput">Tipo</label>
                    </div>
                </div>


            <div class="inputBoxContainer">
                <div class="inputBox1">
                    <input type="text" name="marca" id="marca" class="inputUser" required>
                    <label for="marca" class="labelInput">marca</label>
                </div>
            </div>

            <div class="inputBoxContainer">
                <div class="inputBox1">
                    <input type="text" name="user" id="user" class="inputUser" required>
                    <label for="user" class="labelInput">User</label>
                </div>
            </div>

            <div class="inputBoxContainer">
                <div class="inputBox1">
                    <input type="text" name="nome" id="nome" class="inputUser" required>
                    <label for="nome" class="labelInput">Nome</label>
                </div>
            </div>

            <div class="inputBoxContainer">
                <div class="inputBox1">
                    <input type="text" name="email" id="email" class="inputUser" required>
                    <label for="email" class="labelInput">Email</label>
                </div>
            </div>

            <div class="inputBoxContainer">
                <div class="inputBox1">
                    <input type="passwords" name="passwords" id="passwords" class="inputUser" required>
                    <label for="passwords" class="labelInput">Senha</label>
                </div>
            </div>

            <div class="inputBoxContainer">
                <div class="inputBox2">
                    <input type="text" name="teamviewer" id="teamviewer" class="inputUser" required>
                    <label for="teamviewer" class="labelInput">Teamviewer</label>
                </div>
            </div>

            <div class="inputBoxContainer">
                <div class="inputBox2">
                    <input type="text" name="mac" id="mac" class="inputUser" required>
                    <label for="mac" class="labelInput">Mac</label>
                </div>
            </div>

            <div class="inputBoxContainer">
                <div class="inputBox2">
                    <input type="text" name="ip" id="ip" class="inputUser" required>
                    <label for="ip" class="labelInput">IP</label>
                </div>
            </div>

            <div class="inputBoxContainer">
                <div class="inputBox2">
                    <input type="text" name="rede" id="rede" class="inputUser" required>
                    <label for="rede" class="labelInput">Rede Wifi</label>
                </div>
            </div>

            <div class="inputBoxContainer">
                <div class="inputBox2">
                    <input type="text" name="sever" id="sever" class="inputUser" required>
                    <label for="sever" class="labelInput">Sever</label>
                </div>
            </div>

            <div class="inputBoxContainer">
                <div class="inputBox2">
                    <input type="text" name="proces" id="proces" class="inputUser" required>
                    <label for="proces" class="labelInput">proces</label>
                </div>
            </div>

            <div class="inputBoxContainer">
                <div class="inputBox3">
                    <input type="text" name="placaM" id="placaM" class="inputUser" required>
                    <label for="placaM" class="labelInput">placaM</label>
                </div>
            </div>

            <div class="inputBoxContainer">
                <div class="inputBox3">
                    <input type="text" name="memoriaR" id="memoriaR" class="inputUser" required>
                    <label for="memoriaR" class="labelInput">memoriaR</label>
                </div>
            </div>

            <div class="inputBoxContainer">
                <div class="inputBox3">
                    <input type="text" name="placaV" id="placaV" class="inputUser" required>
                    <label for="placaV" class="labelInput">placaV</label>
                </div>
            </div>

            <div class="inputBoxContainer">
                <div class="inputBox3">
                    <input type="text" name="armazenamento" id="armazenamento" class="inputUser" required>
                    <label for="armazenamento" class="labelInput">armazenamento</label>
                </div>
            </div>

            <div class="inputBoxContainer">
                <div class="inputBox3">
                    <input type="passwords" name="sistema" id="sistema" class="inputUser" required>
                    <label for="sistema" class="labelInput">sistema</label>
                </div>
            </div>

                <div class="inputBoxContainer">

                <div class="inputBox3">
                    <input type="text" name="alimentacao" id="alimentacao" class="inputUser" required>
                    <label for="alimentacao" class="labelInput">alimentacao</label>
                </div>
            </div>

            </fieldset>
            <input class="button" type="submit" name="submit" id="submit">
        </form>
    </div>