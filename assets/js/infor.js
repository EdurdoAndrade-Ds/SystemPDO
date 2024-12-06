function edit(idUser)
{
    $.ajax({
        type: 'POST',
        url: './cadastro/edit.php',
        data:{'idUser': idUser},
        success: function(result) {
            console.log(result);
            // alert('success');
            window.location.href = './cadastro/edit.php';
        }
    })
}

function informa(idUser)
{
//     $.ajax({
//         type: 'POST',
//         url: './cadastro/edit.php',
//         data:{'idUser': idUser},
//         success: function(result) {
//             console.log(result);
//             // alert(idUser);
//             window.location.href = './cadastro/edit.php';
//         }
//     })
    window.location.href = './cadastro/edit.php';
}

function modify(idUser)
{
    $.ajax({
        type: 'POST',
        url: './cadastro/modify.php',
        data:{'idUser': idUser},
        success: function(result) {
            console.log(result);
            // alert('success');
            window.location.href = './cadastro/edit.php';
        }
    })
}