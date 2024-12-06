<link rel="stylesheet" href="../../../assets/css/styles.css">
<link rel="stylesheet" href="../../../assets/css/styleTaskbar.css">

<?php
 
echo 'Aviso importate!!!.';
echo '</br>';
    
sleep(2);

$dataHoraAtual = date('Y-m-d H:i:s');

echo "Resultado do processo em $dataHoraAtual";

?>

<header>
    <a href="../../../home.php">Inicio</a>
</header>

<h3>Loading...</h3>
<div class="barra">
    <div></div>
</div>

Porcentagem: <input type="number" onkeyup="alterarProgresso()">




<script>
    const progresso = document.querySelector(".barra div")
    const input = document.querySelector("input")

    const alterarProgresso = () => {
        progresso.setAttribute("style", "width: " + input.value + "%")
    }
</script>

<script>
    // Função para realizar a requisição AJAX a cada 5 segundos
    function executarProcesso() {
        $.ajax({
            url: "teste.php", // Substitua 'seu_script.php' pelo caminho do seu script no servidor
            method: 'GET', // Você pode usar 'POST' se preferir
            success: function(data) {
                // Atualize o conteúdo da div 'resultado' com o resultado do processo
                $('#resultado').html(data);
            },
            complete: function() {
                // Chame a função novamente após 5 segundos
                setTimeout(executarProcesso, 5000);
            }
        });
    }

    executarProcesso();
</script>