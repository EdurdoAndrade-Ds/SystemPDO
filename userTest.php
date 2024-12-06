<?php 

include './connection.php';

include './cadastro/user.php';

$conn = connection();

$mysqli = connectionUser();


// Chamando os usuarios da tabela do banco
$sql = "SELECT * FROM users";
$queryS = $conn->prepare($sql);
$queryS->execute();
$users = $queryS->fetchAll(PDO::FETCH_ASSOC);

$sql2 = "SELECT * FROM backup_users";
$queryS2 = $conn->prepare($sql2);
$queryS2->execute();
$users2 = $queryS2->fetchAll(PDO::FETCH_ASSOC);


?>

<link rel="stylesheet" href="./assets/css/styles.css">
<link rel="stylesheet" href="./assets/css/stylesMaster.css">


<div class="headerTable">
    <header>
        <a href="./table.php">Inicio</a>
    </header>
</div>

<?php $tool = $users + $users2; ?>

<h2>Sistema de Cadastro</h2>


<!-- <h3>Usuario cadastrados Backup_Users (
    <?php echo count($tool); ?> )
</h3> -->


<!-- <h3>Usuario cadastrados Users (
    <?php echo count($users); ?> )
</h3> -->
<h3>Usuario cadastrados Backup_Users (
    <?php echo count($users2); ?> )
</h3>


<div class="div-pesquisa">

    <form action="">
        <input type="busca" placeholder="Digite..." type="text">
        <button type="submit">Pesquisar</button>
    </form>
    <br>

    <table width="500px" border="1">
        <tr>
            <th>Id</th>
            <th>FirstName</th>
            <th>LastName</th>
            <th>CPF</th>
            <th>Password</th>
            <th>...</th>
        </tr>

        <?php 
            if(!isset($_GET['busca'])) {
                ?>
                <tr>
                    <td colspan="5">Digite algo para pesquisar</td>
                </tr>
                <?php

            } else {
                $pesquisa = $_GET['busca'];
// Combine as consultas SQL em uma
                $sql_code = "SELECT * FROM users WHERE firstName LIKE '%$pesquisa%' OR lastName LIKE '%$pesquisa%' OR id LIKE '%$pesquisa%'
                            UNION
                            SELECT * FROM backup_users WHERE fistName LIKE '%$pesquisa%' OR lastName LIKE '%$pesquisa%' OR id LIKE '%$pesquisa%'";
                            
                $sql_query = $mysql->query($sql_code) or die("Erro ao consultar ". $mysql->error);

                if($sql_query->num_rows == 0) {
                    ?>
                    <tr>
                        <td id="td-aviso" colspan="5">Nenhum registro encontrado</td>
                    </tr>
                    <?php
                } else {
                    while($dados = $sql_query->fetch_assoc()) {
                        $idUser = $dados['id'];

                        ?>
                        <tr>
                            <td>
                                <?php echo $dados['id']; ?>
                            </td>

                            <td>
                                <?php echo $dados['firstName']; ?>
                            </td>

                            <td>
                                <?php echo $dados['lastName']; ?>
                            </td>

                            <td>
                                <?php echo $dados['cpf']; ?>
                            </td>

                            <td>
                                <?php echo $dados['passwords']; ?>
                            </td>

                            <td>
                                <?php
                                    echo
                                    "<a class='button-user' href='./cadastro/modify.php?id={$idUser}'>Modify</a>";
                                ?>
                            </td>
                        </tr>

                        <?php
                    }
                }
            ?>
            <?php
            }


        ?>
    </table>
</div>

<div class="div-user">

    <!-- <?php $Usuarios = allFromItens(); ?> -->

        <?php $Usuarios = allUsers(); ?>
    <!-- <div id="center">

        <button class='button-user' onclick='info($idUser)'>Ver User</button>
    <button class='button-delete' onclick='apagar($idUser)'>Delete</button>
    </div> -->

</div>

<script src="../assets/js/log.js" type="text/javascript"></script>
<script src="../assets/js/usersJs.js" type="text/javascript"></script>
<script src="../assets/js/infor.js" type="text/javascript"></script>
<script src="../assets/js/block.js" type="text/javascript"></script>