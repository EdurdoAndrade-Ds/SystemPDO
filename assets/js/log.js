function logar() {
    var login = document.getElementsByName('login')[0].value;
    var senha = document.getElementsByName('senha')[0].value;

    $.ajax({
        type: 'POST',
        url: '../login/logar.php',
        data: {'login': login, 'senha': senha},
        success: function(result) {
            console.log(result);
            alert('Sucesso');
        },
        // error: function(result) {
        //     console.log(result);
        //     alert('Error in login');
        //     window.location.reload();
        // }
    });
}
