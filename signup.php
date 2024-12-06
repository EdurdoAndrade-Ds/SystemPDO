<header>
    <a class="link "href="home.php">Voltar</a>
</header>

<?php echo '<h2>Signup</h2>'; ?>

<link rel="stylesheet" href="./assets/css/stylesSignup.css">

<section class="area-signup">
    <div class="SignupDiv">
        <div>
            <img src="./assets/img/signupImg.png">
        </div>
          
        <form method="post" class="form-signup" action="./cadastro/add.php">

            <input type="text" name="nome" id="nome" class="form-control" placeholder="Nome" required><br>
            <input type="text" name="sobrenome" id="sobrenome" placeholder="Sobrenome" required><br>
            <input type="email" name="email" id="email" placeholder="Email" required><br>
            <input type="password" name="senha" id="senha" placeholder="Senha" required><br><br>
            <input type="text" name="cpf" id="cpf" placeholder="Cpf" required><br><br>

            <label class="label" for="table">Selecionar Tabela:</label>

        <select id="table" name="table">
            <option value="Backup_users">TableUsers</option>
            <option value="users">Users</option>
            <!-- Adicione mais opções conforme necessário -->
        </select>

            <button type="submit" name="button" class="btn btn-primary">Cadastrar</button>

        </form>
    </div>
</section>