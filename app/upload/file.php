<link rel="stylesheet" href="../../../assets/css/styles.css">

<header>
    <a href="./upload.php">Upload</a>
    <a href="./zip.php">Zip</a>

</header>

<?php

include "./connectionFile.php";

if(isset($_GET['deletar'])) {
    $id = intval($_GET['deletar']);
    $sql_query = $mysqli->query("SELECT * FROM arquivos WHERE id = '$id'") or die($mysqli->error);
    $arquivo = $sql_query->fetch_assoc();

    if(unlink($arquivo['path'])) {
        $deu_certo = $mysqli->query("DELETE FROM arquivos WHERE id = '$id'") or die($mysqli->error);
        if($deu_certo)
            echo "<p>Arquivo deletado com sucesso!</p>";
    }
}

if (isset($_FILES) && count($_FILES) > 0) {
    var_dump($_FILES);
    die();
}

function enviarArquivo($error, $size, $name, $tmp_name)
{

    include "./connectionFile.php";
    
    if ($error) {
        die("Falha ao enviar o arquivo");
    }

    if ($size > 2147483648) {
        die('Arquivo muito grande! Max: 2GB');
    }
    $pasta = "arquivos/";
    $nomeDoArquivo = $name;
    $novoNomeDoArquivo = uniqid();
    $extensao = strtolower(pathinfo($nomeDoArquivo, PATHINFO_EXTENSION));

    if ($extensao != "jpg"  && $extensao != "png" && $extensao != "zip") {
        die("Tipo de arquivo nao aceito");
    }
    $path = $pasta . $novoNomeDoArquivo . "." . $extensao;
    $deu_certo = move_uploaded_file($tmp_name, $path);

    if ($deu_certo) {
        $mysqli->query("INSERT INTO arquivos (nome, path) VALUES('$nomeDoArquivo', '$path')") or die("$conn->error");
        // echo "<p>Arquivo enviado com sucesso: <a target=\"_blank\" href=\"arquivos/$novoNomeDoArquivo.$extensao\">Foto</a></p>";
        return true;
    } else {
        // echo "falha ao enviar arquivo";
        return false;
    }
}

if (isset($_FILES['arquivos'])) {
    $arquivos = $_FILES['arquivos'];
    $tudo_certo = true;

    foreach ($arquivos['name'] as $index => $arq) {
        $deu_certo = enviarArquivo($arquivos['error'][$index], $arquivos['size'][$index], $arquivos['name'][$index], $arquivos['tmp_name'][$index]);
        if (!$deu_certo)
            $tudo_certo = false;
    }

    if ($tudo_certo) {
        echo "<p>Todos os arquivos enviados!</p>";
    } else {
        echo "<p>Houve um erro ao carregar as imagens</p>";
    }
}
$sql_query = $mysqli->query("SELECT * FROM arquivos") or die($mysqli->error);



?>

<h2>File Bando de Dados in Photos</h2>

<table border="1" cellpadding="10">
    <thead>
        <th>Preview</th>
        <th>Arquvio</th>
        <th>Data de Envio</th>
        <th>function</th>
    </thead>

    <tbody>
        <?php

        while ($arquivo = $sql_query->fetch_assoc()) {

        ?>
            <tr>
                <td><img height="50" src="<?php echo $arquivo['path']; ?>" alt=""></td>
                <td><a target="_blank" href="<?php echo $arquivo['path']; ?>"><?php echo $arquivo['nome']; ?></a></td>
                <td><?php echo date("d/m/y H:i", strtotime($arquivo['data_upload'])); ?></td>
                <td><a href="file.php?deletar=<?php echo $arquivo['id']; ?>">Deletar</a></td>
            </tr>
        <?php } ?>
    </tbody>
</table>