<!DOCTYPE html>
<html>
<head>
    <title>Exemplo de AJAX</title>
    <link rel="stylesheet" href="./assets/css/styles.css">
    <link rel="stylesheet" href="./assets/css/stylesLogin.css">
   
</head>
<body>
    
    <!-- <h1 id="title-log">Site De Cadastro</h1> -->

    <section class="area-Login">
    <div class="LoginDiv">
        <div>
            <img src="./assets/img/logo.png">
        </div>

        <form action="./login/logarTeste.php" method="post"> 

            <input type="text" name="login" placeholder="Seu Usuário." autofocus><br>
            <input type="password" name="senha" placeholder="Sua Senha."><br>
            <button onclick="logar()" type="submit" name="acao" class="btn btn-primary">Logar</button>

        </form>
        <p>Ainda nâo tem uma conta?<a href="./cadastro/register.php">Criar Conta</a></p>
    </div>
</section>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js" type="text/javascript"></script>









<!-- Refresh Js Code Fabio -->
    <!-- <div id="resultado">Aqui será exibido o resultado do processo</div>
    <script>
        function executarProcesso() {
            $.ajax({
                url: 'teste.php', // Substitua 'seu_script.php' pelo caminho do seu script no servidor
                method: 'GET', // Você pode usar 'POST' se preferir
                success: function (data) {
                    // Atualize o conteúdo da div 'resultado' com o resultado do processo
                    $('#resultado').html(data);
                },
                complete: function () {
                    // Chame a função novamente após 5 segundos
                    setTimeout(executarProcesso, 5000);
                }
            });
        }
        // Start...
        executarProcesso();
    </script>
</body>
</html> -->

<script src="../assets/js/log.js" type="text/javascript"></script>
<script src="./assets/js/scriptLog.js" type="text/javascript"></script>

