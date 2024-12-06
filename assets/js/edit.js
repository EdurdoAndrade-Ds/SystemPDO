function save(idUser) {

    $.ajax({
        type:'POST',
        url:'../computer/saveEditComp.php',
        data:{'idUser':idUser}, 
        success: function(result) {
            console.log(result);
            if(result == 'true') {
                alert('secess delete');
            } else {
                alert('error de delete')
            }
            window.location.reload();
        }
    })

}