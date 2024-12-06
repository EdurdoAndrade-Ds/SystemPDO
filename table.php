<?php

include './connection.php';
include './cadastro/user.php';

$conn = connection();

$mysqli = connectionUser();


$sql = "SELECT * FROM backup_users";
$queryS = $conn->prepare($sql);
$queryS->execute();

$users = $queryS->fetchAll(PDO::FETCH_ASSOC);

$sql2 = "SELECT * FROM users";
$queryS2 = $conn->prepare($sql2);
$queryS2->execute();

$users2 = $queryS2->fetchAll(PDO::FETCH_ASSOC);
?>

<header>
    <a href="./home.php">Inicio</a>
    <a href="userTest.php">Users test</a>
</header>

<link rel="stylesheet" href="./assets/css/styles.css">

<h1>Table in Users</h1>
<h2>Usuario cadastrados(<?php echo count($users2); ?>)</h2>

<div class="div-pesquisa">

        <form action="">
            <input name="busca" placeholder="Digite..." type="text">
            <button type="submit">Pesquisar</button>
        </form>
        <br>
        <table width="500px" border="1">
            <tr>
                <th>Id</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Password</th>
            </tr>
            <?php

            if (!isset($_GET['busca'])) {
                ?>
                <tr>
                    <td colspan="4">Digite algo pra pesquisar</td>
                </tr>
                <?php
            } else {
                $pesquisa = $_GET['busca'];
                $sql_code = "SELECT * FROM backup_users WHERE firstName LIKE '%$pesquisa%' OR lastName LIKE '%$pesquisa%' OR id LIKE '%$pesquisa%'";
                $sql_query = $mysqli->query($sql_code) or die("Erro ao consultar " . $mysqli->error);

                if($sql_query->num_rows == 0) {
                    ?>
                    <tr>
                    <td id="td-aviso" colspan="4">Nenhum resultado encontrado</td>
                </tr>
                <?php
                } else {
                    while($dados = $sql_query->fetch_assoc()) {
                        ?>
                            <tr>
                                <td><?php echo $dados['id']; ?></td>
                                <td><?php echo $dados['firstName']; ?></td>
                                <td><?php echo $dados['lastName']; ?></td>
                                <td><?php echo $dados['passwords']; ?></td>
                                <td><button id="edit-table">edit</button></td>
                                
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

    <?php $Usuarios2 = allFromItens(); ?>

</div>


<script src="./assets/js/usersJs.js" type="text/javascript"></script>

