<?php

$conn = new PDO("mysql:host=localhost;dbname=users", "root", "");
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

if (isset($_POST['tarefa'])) {
    $tarefa = filter_input(INPUT_POST, 'tarefa', FILTER_SANITIZE_STRING);
    $query = "INSERT INTO tarefas (descricao,concluida) VALUES (:descricao, 0)";
    $stm = $conn->prepare($query);
    $stm->bindParam('descricao', $tarefa);
    $stm->execute();

    header("location: ./tarefa.php");
}

$query = "SELECT * FROM tarefas";
$lista = $conn->query($query)->fetchAll();

if (isset($_GET['delete'])) {
    $id = filter_input(INPUT_GET, 'delete', FILTER_SANITIZE_NUMBER_INT);
    $query = "DELETE FROM tarefas where id=:id";
    $conn->prepare($query);
    $stm = $conn->prepare($query);
    $stm->bindParam('id', $id);
    $stm->execute();

    header("location: ./tarefa.php");
}

if (isset($_GET['concluir'])) {
    $id = filter_input(INPUT_GET, 'concluir', FILTER_SANITIZE_NUMBER_INT);
    $query = "UPDATE tarefas SET concluida=1 WHERE id=:id";
    $stm = $conn->prepare($query);
    $stm->bindParam('id', $id);
    $stm->execute();

    header("location: ./tarefa.php");
}

if (isset($_GET['reabrir'])) {
    $id = filter_input(INPUT_GET, 'reabrir', FILTER_SANITIZE_NUMBER_INT);
    $query = "UPDATE tarefas SET concluida=0 WHERE id=:id";
    $stm = $conn->prepare($query);
    $stm->bindParam('id', $id);
    $stm->execute();

    header("location: ./tarefa.php");
}

?>


<link rel="stylesheet" href="../../assets/css/styles.css">

<header>
    <a href="../../home.php">Inicio</a>
</header>

<link rel="stylesheet" href="../../assets/css/styles.css">

<h1>Tarefas</h1>

<div class="master-tarefa">


<div class="div-tarefa">
    <form class="form-tarefa"method="post">
        Nova Tarefa: <input type="text" name="tarefa" autofocus>
        <input type="submit" value="incluir">
    </form>
</div>

<div class="div-lista">
    <ul>
        <?php foreach ($lista as $item) : ?>

            <li <?= $item['concluida'] ? 'class="concluida"' : '' ?> >
                <?= $item['descricao'] ?>
                <?php if (!$item['concluida']) : ?>
                    <a href="?concluir=<?= $item['id'] ?>">Concluir</a>
                <?php else: ?>
                    <a href="?reabrir=<?= $item['id'] ?>">Reabrir</a>
                <?php endif ?>
                    <a class="deleteT" href="?delete=<?= $item['id'] ?>">Delete</a>
            </li>
        <?php endforeach ?>
    </ul>
</div>

</div>
<?php

// var_dump($lista);
