<link rel="stylesheet" href="../../../assets/css/styles.css">

<header>
    <a href="../../../home.php">Inicio</a>
    <a href="./file.php" class="block" id="meuLink">File</a>
</header>

<h2>Zip</h2>

<?php

$zip = new ZipArchive();

$dir = 'arquivos/';

$nomeFile = md5(time()) . '.zip';
$caminho = 'arquivo_zip/' . $nomeFile;

if($zip->open($caminho, \ZipArchive::CREATE)) {
    $files = scandir($dir);
    array_shift($files);
    array_shift($files);

    foreach($files as $file) {
    
        $zip->addFile($dir . $file, $file);
    }
    // $zip->close();

    echo '<p>Arquivo ZIP criado com sucesso!</p>';
}

if(file_exists($caminho)) {
    header("Content-Type: application/zip");
    header("Content-Disposition: attachment;filename=$nomeFile");

    readfile($caminho);
}