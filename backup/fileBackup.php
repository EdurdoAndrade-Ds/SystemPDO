<?php

$resultTable = "SHOW TABLES";
$resultadoTable = mysqli_query($conn, $resultTable);

while($rowTabela = mysqli_fetch_row($resultadoTable)) {
    $tables[] = $rowTabela[0];
}

// var_dump($tables);

$result = "";
foreach($tables as $table) {
    $result_colunas = "SELECT * FROM " . $table;
    $resultado_colunas = mysqli_query($conn, $result_colunas);
    $num_colunas = mysqli_num_fields($resultado_colunas);
    // var_dump("Quantidade de colunas na tabela " . $table. "-" . $num_colunas);

    $result .= "DROP TABLE IF EXISTS".$table.";";

    $result_cr_col = "SHOW CREATE TABLE " . $table;
    $resultado_cr_col = mysqli_query($conn, $result_cr_col);
    $row_cr_col = mysqli_fetch_row($resultado_cr_col);
    // var_dump($row_cr_col);
    $result .= "\n\n" . $row_cr_col[1] . ";\n\n";
    // var_dump($result);

    for($i = 0; $i < $num_colunas; $i++){
        while($row_tp_col = mysqli_fetch_row($resultado_colunas)){
            $result .= "INSERT INTO " . $table . "VALUE (";

            for($j = 0; $j < $num_colunas; $j++){
                $row_tp_col[$j] = addslashes($row_tp_col[$j]);
                $row_tp_col[$j] .= str_replace("\n", "\\n", $row_tp_col[$j]);

                if (isset($row_tp_col[$j])) {
                    $result .= '"' . $row_tp_col[$j].'"';
                } else {
                    
                    $result .= '""';
                }

                if($j < ($num_colunas - 1)) {
                    $result .=' , ';
                }
            }
            $result .= ");\n";
        }
    }
    $result .= "\n\n";
    var_dump($result);
}

$diretorio = 'backupBD/';
if(!is_dir($diretorio)) {
    mkdir($diretorio, 0777, true);
    chmod($diretorio, 0777);
}

$data = date('Y-m-d-h-i-s');
$nome_arquivo = $diretorio . "db_backup_".$data;
var_dump($nome_arquivo);

$handle = fopen($nome_arquivo . '.sql', 'w+');
fwrite($handle, $result);
fclose($handle);

$dowload = $nome_arquivo . ".sql";

if(file_exists($dowload)) {
    header("Pragma: public");
    header("Expires: 0");
    header("Cache-Control: must-revalidate, post-check=0");
    header("Cache-Control: private", false);
    header("Content-Disposition: attachment; filename=\"" . basename($dowload) . "\";");
    header("Content-Transfer-Encoding: binary");
    header("Content-Length: " . filesize($dowload));
    readfile($dowload);

    $_SESSION['msg'] = "<span style='color: rgb(110, 197, 52);'>Exportado BD com sucesso</span>";
} else {
    $_SESSION['msg'] = "<span style='color: red;'>Erro ao exportado BD</span>";
}