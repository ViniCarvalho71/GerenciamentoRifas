$(document).ready(function() {

    $('.close, #close').click(function(e) {
        e.preventDefault()
        $('#modal-compradores').modal('hide')
    })

    $('.btn-save').click(function(e) {
        e.preventDefault()

        let dados = $('#form-compradores').serialize()

        dados += `&operacao=${$('.btn-save').attr('data-operation')}`

        $.ajax({
            type: 'POST',
            dataType: 'json',
            assync: true,
            data: dados,
            url: 'src/compradores/model/save-compradores.php',
            success: function(dados) {
                Swal.fire({
                    title: 'Sistema de rifas',
                    text: dados.mensagem,
                    icon: dados.tipo,
                    confirmButtonText: 'OK'
                })

                $('#modal-compradores').modal('hide')
                $('#table-compradores').DataTable().ajax.reload()
            }
        })
    })

})