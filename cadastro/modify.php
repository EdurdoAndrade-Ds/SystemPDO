<?php

include "../connection.php";
$conn = connectionUser();

if(!empty($_GET['id'])) 
{    
    $id = $_GET['id'];
    
    $sqlSelect = "SELECT * FROM backup_users WHERE id=$id";
    $querySelect = $conn->query($sqlSelect) or die("Erro ao consultar ". $conn->error);

    $result = $conn->query($sqlSelect);
    // print_r($result);
    
    if($result->num_rows > 0 )
    {
        while($user_data = mysqli_fetch_assoc($result))
        {
            $id = $user_data['id'];
            $nome = $user_data['firstName'];
            $sobrenome = $user_data['lastName'];
            $email = $user_data['email'];
            $senha = $user_data['passwords'];
            $cpf = $user_data['cpf'];
        }


    } else {
        header("Location: ../teste.php");
    }

}



if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $idUser = isset($_POST['idUser']) ? $_POST['idUser'] : null;

    if ($idUser !== null) {
        echo "ID do Usuário Recebido: $idUser";
    } else {
        echo 'ID do Usuário não fornecido';
    }
} else {
    // echo 'Requisição inválida';
}


?>
<link rel="stylesheet" href="../assets/css/styles.css">
<link rel="stylesheet" href="../assets/css/stylesSignup.css">

<header>
    <a class="link" href="../home.php">Voltar</a>
</header>

<div class="div-edit">
    <form action="saveEdit.php" method="POST">

        <h2 id="title-edit">Edit for User Register</h2>

        <p id="nomeP">FirstName: </p><input type="text" name="nome" id="nome" value="<?php echo $nome; ?>" placeholder="FirstName">
        <p id="sobrenomeP">LastName: </p><input type="text" name="sobrenome" id="sobrenome" value="<?php echo $sobrenome; ?>" placeholder="LastName">
        <p id="emailP">Email: </p><input type="email" name="email" id="emailP" value="<?php echo $email; ?>" placeholder="Email">
        <p id="senhaP">Password: </p><input type="text" name="senha" id="senha" value="<?php echo $senha; ?>" placeholder="Senha">
        <p id="cpfP">CPF: </p><input type="text" name="cpf" id="cpf" value="<?php echo $cpf; ?>" placeholder="Cpf">
    <br>
        <input type="hidden" name="id" value="<?php echo $id; ?>">
        <button type="submit" name="update" id="update" class="btn btn-primary" >Edit</button>
        <button class='button-delete' id="delete" onclick='apagar($idUser)'>Delete1</button>
        <a href="../home.php" id="back" class="btn btn-primary" >Back</a>
    </form>
</div>

<script src="../assets/js/usersJs.js" type="text/javascript"></script>
