<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="../assets/css/styles.css">
    <link rel="stylesheet" href="../assets/css/stylesPage.css">

</head>

<header>
    <!-- <a href="../../../login.php">Inicio</a> -->
</header>

<body>
    <div class="background">
        <div class="shape"></div>
        <div class="shape"></div>
    </div>


    <form method="post" action="addRegister.php">
        <h3>Register</h3>

        <label for="username">Username</label>
        <input type="text" placeholder="FirstName" id="nome" name="nome">

        <label for="username">LastName</label>
        <input type="text" placeholder="LastName" id="sobrenome" name="sobrenome">

        <label for="username">Email</label>
        <input type="text" placeholder="Email or Phone" id="email" name="email">

        <label for="password">Password</label>
        <input type="text" placeholder="Password" id="senha" name="senha">

        <!-- <label for="password">CPF</label>
        <input type="text" placeholder="Cpf" id="cpf" name="cpf"> -->

        <button type="submit" name="button" class="btn btn-primary">Log In</button>

        <div class="social">
            <!-- <div class="go"><i class="fab fa-google">Google</i></div>
            <div class="fb"><i class="fab fa-facebook">Facebook</i></div> -->
        </div>

    </form>
    
</body>
</html>