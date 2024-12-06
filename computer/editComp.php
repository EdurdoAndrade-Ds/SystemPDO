<?php

if (!empty($_GET['id'])) {

    include "../config.php";

    $id = $_GET['id'];

    $sqlSelect = "SELECT * FROM registro WHERE id = '$id'";

    $result = $conexao->query($sqlSelect);
    // print_r($result);

    if ($result->num_rows > 0) {
        while ($user_data = mysqli_fetch_assoc($result)) 
        {
            $tipo = $user_data['tipo'];
            $marca = $user_data['marca'];
            $user = $user_data['user'];
            $nome = $user_data['nome'];
            $email = $user_data['email'];
            $password = $user_data['passwords'];
            $teamviewer = $user_data['teamviewer'];
            $mac = $user_data['mac'];
            $ip = $user_data['ip'];
            $rede = $user_data['rede'];
            $sever = $user_data['sever'];
            $proces = $user_data['proces'];
            $placaM = $user_data['placaM'];
            $memoriaR = $user_data['memoriaR'];
            $placaV = $user_data['placaV'];
            $armazenamento = $user_data['armazenamento'];
            $sistema = $user_data['sistema'];
            $alimentacao = $user_data['alimentacao'];
        }
    } else {
        header("Location: homeComputer.php");
    }
}



?>


<header>
    <a href="homeComputer.php">Voltar</a>
</header>

<link rel="stylesheet" href="../assets/css/styles.css">
<link rel="stylesheet" href="../assets/css/styleCom.css">


<h1>Edit Computer</h1>
<div class="div-editCom">
    <form action="" method="post">
        <fieldset>
            <br>

            <div class="inputBoxContainer">
                <div class="inputBox1">
                    <input type="text" name="tipo" id="tipo" class="inputUser" value="<?php echo $tipo ?>" required>
                    <label for="tipo" class="labelInput">Tipo</label>
                </div>
            </div>


            <div class="inputBoxContainer">
                <div class="inputBox1">
                    <input type="text" name="marca" id="marca" class="inputUser" value="<?php echo $marca ?>" required>
                    <label for="marca" class="labelInput">marca</label>
                </div>
            </div>

            <div class="inputBoxContainer">
                <div class="inputBox1">
                    <input type="text" name="user" id="user" class="inputUser" value="<?php echo $user ?>" required>
                    <label for="user" class="labelInput">User</label>
                </div>
            </div>

            <div class="inputBoxContainer">
                <div class="inputBox1">
                    <input type="text" name="nome" id="nome" class="inputUser" value="<?php echo $nome ?>" required>
                    <label for="nome" class="labelInput">Nome</label>
                </div>
            </div>

            <div class="inputBoxContainer">
                <div class="inputBox1">
                    <input type="text" name="email" id="email" class="inputUser" value="<?php echo $email ?>" required>
                    <label for="email" class="labelInput">Email</label>
                </div>
            </div>

            <div class="inputBoxContainer">
                <div class="inputBox1">
                    <input type="passwords" name="passwords" id="passwords" class="inputUser" value="<?php echo $password ?>" required>
                    <label for="passwords" class="labelInput">Senha</label>
                </div>
            </div>

            <div class="inputBoxContainer">
                <div class="inputBox2">
                    <input type="text" name="teamviewer" id="teamviewer" class="inputUser" value="<?php echo $teamviewer ?>" required>
                    <label for="teamviewer" class="labelInput">Teamviewer</label>
                </div>
            </div>

            <div class="inputBoxContainer">
                <div class="inputBox2">
                    <input type="text" name="mac" id="mac" class="inputUser" value="<?php echo $mac ?>" required>
                    <label for="mac" class="labelInput">Mac</label>
                </div>
            </div>

            <div class="inputBoxContainer">
                <div class="inputBox2">
                    <input type="text" name="ip" id="ip" class="inputUser" value="<?php echo $ip ?>" required>
                    <label for="ip" class="labelInput">IP</label>
                </div>
            </div>

            <div class="inputBoxContainer">
                <div class="inputBox2">
                    <input type="text" name="rede" id="rede" class="inputUser" value="<?php echo $rede ?>" required>
                    <label for="rede" class="labelInput">Rede Wifi</label>
                </div>
            </div>

            <div class="inputBoxContainer">
                <div class="inputBox2">
                    <input type="text" name="sever" id="sever" class="inputUser" value="<?php echo $sever ?>" required>
                    <label for="sever" class="labelInput">Sever</label>
                </div>
            </div>

            <div class="inputBoxContainer">
                <div class="inputBox2">
                    <input type="text" name="proces" id="proces" class="inputUser" value="<?php echo $proces ?>" required>
                    <label for="proces" class="labelInput">Processador</label>
                </div>
            </div>

            <div class="inputBoxContainer">
                <div class="inputBox3">
                    <input type="text" name="placaM" id="placaM" class="inputUser" value="<?php echo $placaM ?>" required>
                    <label for="placaM" class="labelInput">Placa Mãe</label>
                </div>
            </div>

            <div class="inputBoxContainer">
                <div class="inputBox3">
                    <input type="text" name="memoriaR" id="memoriaR" class="inputUser" value="<?php echo $memoriaR ?>" required>
                    <label for="memoriaR" class="labelInput">Memoria Ram</label>
                </div>
            </div>

            <div class="inputBoxContainer">
                <div class="inputBox3">
                    <input type="text" name="placaV" id="placaV" class="inputUser" value="<?php echo $placaV ?>" required>
                    <label for="placaV" class="labelInput">Placa de Video</label>
                </div>
            </div>

            <div class="inputBoxContainer">
                <div class="inputBox3">
                    <input type="text" name="armazenamento" id="armazenamento" class="inputUser" value="<?php echo $armazenamento ?>" required>
                    <label for="armazenamento" class="labelInput">Armazenamento</label>
                </div>
            </div>

            <div class="inputBoxContainer">
                <div class="inputBox3">
                    <input type="passwords" name="sistema" id="sistema" class="inputUser" value="<?php echo $sistema ?>" required>
                    <label for="sistema" class="labelInput">Sistema</label>
                </div>
            </div>

            <div class="inputBoxContainer">

                <div class="inputBox3">
                    <input type="text" name="alimentacao" id="alimentacao" class="inputUser" value="<?php echo $alimentacao ?>" required>
                    <label for="alimentacao" class="labelInput">Alimentacao</label>
                </div>
            </div>

        </fieldset>
        <button class="button" type="submit" name="updateCom" id="updateCom" class="btn btn-primary" >Editar</button>
        <button class="button" onclick="deletar($id)" type="submit" name="acao" class="btn btn-primary">Delete</button>
    </form>
</div>

<script src="../assets/js/usersJs.js" type="text/javascript"></script>
<script src="../assets/js/edit.js" type="text/javascript"></script>