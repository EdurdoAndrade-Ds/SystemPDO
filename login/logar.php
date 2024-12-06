<?php

include "../connection.php";

$conn = connection();

$username = $_POST['login'];
$passwords = $_POST['senha'];

$query = "SELECT * FROM users WHERE firstName = :username AND passwords = :passwords";
$stmt = $conn->prepare($query);
$stmt->bindParam(':username', $username);
$stmt->bindParam(':passwords', $passwords);
$stmt->execute();

if ($stmt->rowCount() > 0) {
    echo "<script>alert('Login feito com sucesso!');</script>";
    session_start();

    ?>
    <script>
        window.location.href = ('../home.php')
    </script>

<?php

} else {
    echo "<script>alert('Nome ou senha invalidos');</script>";
    ?>
        <script>
            window.location.href = ('../login.php');
        </script>
    <?php
    
}