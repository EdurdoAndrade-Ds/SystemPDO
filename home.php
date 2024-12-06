<?php

include './login/protect.php';

include './connection.php';

include './cadastro/user.php';

$conn = connection();

$user = $_SESSION['firstName'] . " " . $_SESSION['lastName'];

$mysqli = connectionUser();

$sql = "SELECT * FROM users";
$queryS = $conn->prepare($sql);
$queryS->execute();
$users = $queryS->fetchAll(PDO::FETCH_ASSOC);


$sql2 = "SELECT * FROM backup_users";
$queryS2 = $conn->prepare($sql2);
$queryS2->execute();
$users2 = $queryS2->fetchAll(PDO::FETCH_ASSOC);

// var_dump(connectionUpload());


?>




<link rel="stylesheet" href="./assets/css/styles.css">
<link rel="stylesheet" href="./assets/css/stylesMaster.css">

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- jQuery e Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>


<!-- <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <a class="nav-item nav-link active" href="#">Home <span class="sr-only">(current)</span></a>
      <a class="nav-item nav-link" href="#">Features</a>
      <a class="nav-item nav-link" href="#">Pricing</a>
      <a class="nav-item nav-link disabled" href="#">Disabled</a>

      <a class="nav-item nav-link" href="./signup.php">Signup</a>

        <a class="nav-item nav-link" href="./table.php">Table User</a>
        <a class="nav-item nav-link" href="./app/models/users.php">List Users</a>
        <a class="nav-item nav-link" href="./app/models/tarefa.php">Tarefas</a>
        <a class="nav-item nav-link" href="./backup/backup.php">Backup Server</a>
        <a class="nav-item nav-link" href="./app/upload/upload.php">Upload</a>
        <a class="nav-item nav-link" href="./test/testConn.php">TestConn</a>
        <a class="nav-item nav-link" href="./computer/registerCom.php">RegisterComputer</a>
        <a class="nav-item nav-link" href="./computer/estudos.php">Estudos</a>
        <a class="nav-item nav-link" href="./app/models/teste/teste.php" class="block" id="meulink">Teste</a>

        <p id="welcome-user"> <?php echo $user; ?><a id="logout" href="./login/logout.php">Logout</a></p>
    </div>
</div>

</nav> -->



<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">System PDO</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="home.php">Home <span class="sr-only">(current)</span></a>
      </li>
      
      <!-- Dropdown para Funcionalidades -->
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="featuresDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Funcionalidades
        </a>
        <div class="dropdown-menu" aria-labelledby="featuresDropdown">
          <a class="dropdown-item" href="./signup.php">Signup</a>
          <a class="dropdown-item" href="./table.php">Table User</a>
          <a class="dropdown-item" href="./app/models/users.php">List Users</a>
          <a class="dropdown-item" href="./app/models/tarefa.php">Tarefas</a>
        </div>
      </li>
      
      <!-- Dropdown para Utilitários -->
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="utilitiesDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Utilitários
        </a>
        <div class="dropdown-menu" aria-labelledby="utilitiesDropdown">
          <a class="dropdown-item" href="./backup/backup.php">Backup Server</a>
          <a class="dropdown-item" href="./app/upload/upload.php">Upload</a>
          <a class="dropdown-item" href="./test/testConn.php">TestConn</a>
        </div>
      </li>
      
      <!-- Dropdown para Computador -->
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="computerDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Computador
        </a>
        <div class="dropdown-menu" aria-labelledby="computerDropdown">
          <a class="dropdown-item" href="./computer/registerCom.php">Register Computer</a>
          <a class="dropdown-item" href="./computer/estudos.php">Estudos</a>
          <a class="dropdown-item" href="./app/models/teste/teste.php" class="block" id="meulink">Teste</a>
        </div>
      </li>
      
      <!-- Logout e Usuário -->

      <p id="welcome-user"> <?php echo $user; ?><a id="logout" href="./login/logout.php">Logout</a></p>
    </ul>
  </div>
</nav>


<!-- <div id="welcome-user">
    <?php echo $user; ?><a id="logout" href="./login/logout.php">Logout</a>
</div> -->

  

<div class="headerHome">

    <div class="headerImg">
        <h2 id="title-master">Home</h2>
        <h1>P D O</h1>

    </div>
 
</div>


    

<script src="../assets/js/log.js" type="text/javascript"></script>
<script src="../assets/js/usersJs.js" type="text/javascript"></script>
<script src="../assets/js/infor.js" type="text/javascript"></script>
<script src="../assets/js/block.js" type="text/javascript"></script>