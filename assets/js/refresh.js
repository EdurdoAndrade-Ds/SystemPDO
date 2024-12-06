// Função para realizar a requisição AJAX a cada 5 segundos
function executarProcesso() {
    $.ajax({
        url: "teste.php", // Substitua 'seu_script.php' pelo caminho do seu script no servidor
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

// Inicie o processo pela primeira vez
executarProcesso();