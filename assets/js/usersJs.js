function apagar(idUser) {

    $.ajax({
        type:'POST',
        url:'./delete.php',
        data:{'idUser':idUser}, 
        success: function(result) {
            console.log(result);
            if(result == 'true') {
                alert('secess delete');
            } else {
                alert('error de delete')
            }
            // window.location.reload();
        }
    })

}

function excluir(idUser) {

    $.ajax({
        type:'POST',
        url:'./deleteTable.php',
        data:{'idUser':idUser}, 
        success: function(result) {
            console.log(result);
            // if(result == 'true') {
            //     alert('secess delete');
            // } else {
            //     alert('error de delete')
            // }
            window.location.reload();
        }
    })

}

function deletar(idUser) {

    $.ajax({
        type:'POST',
        url:'./computer/deleteCom.php',
        data:{'idUser':idUser}, 
        success: function(result) {
            console.log(result);
            // if(result == 'true') {
            //     alert('secess delete');
            // } else {
            //     alert('error de delete')
            // }
            window.location.reload();
        }
    })

}