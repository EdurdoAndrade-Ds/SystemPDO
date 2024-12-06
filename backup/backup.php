<?php

session_start();

?>

<link rel="stylesheet" href="./css/styleForm.css">
<!-- <link rel="stylesheet" href="../assets/css/styles.css"> -->
<header>
    <a href="../home.php">inicio</a>
</header>

<?php

    if(isset($_SESSION['msg'])){
        echo "<p>".$_SESSION['msg']."</p>";
        unset($_SESSION['msg']);
    }


    if(isset($_SESSION['msg1'])) {
        echo "<p>".$_SESSION['msg1']."</p>";
        unset($_SESSION['msg1']);
    }

?>

<h1>Backup server</h1>

<!-- <div class="div-backup">

    <form class="form-back" method="POST" action="processo.php" enctype="multipart/form-data">
    <h2>Exportar</h2>
        <input type="text" name="servidor" placeholder="Nome do Servidor" value="localhost">

        <input type="text" name="usuario" placeholder="Nome de Usuario" value="root">

        <input type="password" name="senha" placeholder="Senha da base de dados">

        <input type="text" name="dbname" placeholder="Nome da base de dados">

        <input id="button" type="submit" value="Exportar">
    </form>
</div>

<div class="div-backup-import">
    <form class="form-back-import" method="POST" action="processoImport.php" enctype="multipart/form-data">
    <h2>Importar</h2>
        <input type="text" name="servidor" placeholder="Nome do Servidor">

        <input type="text" name="usuario" placeholder="Nome de Usuario">

        <input type="password" name="senha" placeholder="Senha da base de dados">
        
        <input type="text" name="dbname" placeholder="Nome da base de dados">
        
        <p>Backup<input type="file" name="backup"></p>

        <input id="button" type="submit" value="Importar">
    </form>
</div> -->

<div class="div-backup-container">
  <!-- Formulário de Exportar -->
  <div class="div-backup">
    <form class="form-back" method="POST" action="processo.php" enctype="multipart/form-data">
      <h2>Exportar</h2>
      <input type="text" name="servidor" placeholder="Nome do Servidor" value="localhost">
      <input type="text" name="usuario" placeholder="Nome de Usuário" value="root">
      <input type="password" name="senha" placeholder="Senha da base de dados">
      <input type="text" name="dbname" placeholder="Nome da base de dados">
      <input id="button" type="submit" value="Exportar">
    </form>
  </div>

  <!-- Formulário de Importar -->
  <div class="div-back-import">
    <form class="form-back-import" method="POST" action="processoImport.php" enctype="multipart/form-data">
      <h2>Importar</h2>
      <input type="text" name="servidor" placeholder="Nome do Servidor">
      <input type="text" name="usuario" placeholder="Nome de Usuário">
      <input type="password" name="senha" placeholder="Senha da base de dados">
      <input type="text" name="dbname" placeholder="Nome da base de dados">
      <label for="backup">Backup</label>
      <input type="file" name="backup">
      <input type="submit" value="Importar">
    </form>
  </div>
</div>
