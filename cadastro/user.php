<link rel="stylesheet" href="./assets/css/styles.css">

<?php
function allFromItens()
{
    $conexao = connection();

    try {
        $sql = "SELECT * FROM users";

        $query = $conexao->prepare($sql);
        $query->execute();

        $users = $query->fetchAll(PDO::FETCH_ASSOC);


        foreach ($users as $user) {
            $idUser = $user['id']; ?>

            <li>

                <?php echo "" .
                    $user['firstName'] . " " . $user['lastName'] . " |" .
                    // "Email: " . $user['email'] . " " .
                    // "Password: " . $user['passwords'] . " " .
                    "<a class='button-user' href='./cadastro/modify.php?id={$idUser}'>Modify</a>" . 
                    "<button class='button-user' onclick='edit($idUser)'>Ver User</button>" . 
                    "<button class='button-delete' onclick='apagar($idUser)'>Delete</button>" . "<br>";


                ?>

            </li>
        <?php
        }
    } catch (PDOException $e) {
        die("Not itens found: " . $e->getMessage());
    }
}

function allUsers()
{
    $conexao = connection();

    try {
        $sql = "SELECT * FROM backup_users";

        $query = $conexao->prepare($sql);
        $query->execute();

        $usuarios = $query->fetchAll(PDO::FETCH_ASSOC);


        foreach ($usuarios as $usuario) {
            $idUser = $usuario['id']; ?>

            <li>

                <?php echo "" .
                    $usuario['firstName'] . " " . $usuario['lastName'] . " |" .
                    // "Email: " . $user['email'] . " " .
                    // "Password: " . $user['passwords'] . " " .
                    
                    "<a class='button-user' href='./cadastro/modify.php?id={$idUser}'>Modify</a>" . 
                    "<button class='button-user' onclick='informa($idUser)'>Ver User</button>" . 
                    "<button class='button-delete' onclick='excluir($idUser)'>Delete</button>" . "<br>";

                ?>

            </li>
<?php
        }
    } catch (PDOException $e) {
        die("Not itens found: " . $e->getMessage());
    }
}
?>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="./assets/js/usersJs.js" type="text/javascript"></script>
<script src="./assets/js/log.js" type="text/javascript"></script>
<script src="./assets/js/infor.js" type="text/javascript"></script>