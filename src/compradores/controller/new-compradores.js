$(document).ready(function() {
    $('.btn-new').click(function(e) {
        e.preventDefault()

        $('.modal-title').empty()


        $('.modal-title').append('Adicionar novo comprador')

        $('.modal-body').load('src/compradores/view/form-compradores.html')

        $('.btn-save').show()

        $('.btn-save').attr('data-operation', 'insert')

        $('#modal-compradores').modal('show')
    })

    $('.close, #close').click(function(e) {
        e.preventDefault()
        $('#modal-compradores').modal('hide')
    })
})