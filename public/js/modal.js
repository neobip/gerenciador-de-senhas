
$(document).ready(function () {
//    $('[data-toggle="modal"]').click(function (e) {
    $('body').on('click', '[data-toggle="modal"]', function (e) {

        e.preventDefault();
        var url = $(this).attr('href');
        var dataID = $(this).attr('data-id');
        var data_target = $(this).attr('data-target');
        var name = $(this).attr('name');
        var dataName = $(this).attr('data-name');
//alert(dataID);
        data: url;

        if (url.indexOf('#') == 0) {

            $(url).modal('open');
        } else {

            $.get(url, function (data) {
                var divModal = $('<div class="modal fade in" id="' + dataID + '" data-backdrop="static"  >' +
                        '<div class="modal-dialog" >' +
                        '<div class="modal-content">' +
                        '<div class="modal-header">' +
                        '<button type="button" class="close" data-dismiss="modal">&times;</button>' +
                        '<h4 class="modal-title"></h4>' +
                        '</div>' +
                        '<div class="modal-body">' +
                        data +
                        '</div></div></div></div>');

                $('body').append(divModal);


                action(dataName, name, dataID, data_target);

                $('#' + dataID).modal();

            }).success(function () {
            });
        }
    });
});


function action(datan, name, id0t, target) {


    var end = "http://127.0.0.1/gerenciador_senhas/public/" + target + "/envia";
    var caller = $(this);
    switch (datan) {

        case 'edit-modal':
            $('#footer_action_button').text("Atualizar");
            $('#footer_action_button').addClass('fa fa-pencil-square-o');
            $('#footer_action_button').removeClass('glyphicon-trash');
            $('.actionBtn').addClass('btn-success');
            $('.actionBtn').removeClass('btn-danger');
            $('.actionBtn').addClass('edit');
            $('.form-horizontal').show();
            $('.deleteContent').hide();
            $('.modal-title').text('Editar ' + name);

//            $(document).ready(function () {

                $('.modal-footer').on('click', '.edit', function () {
//                    e.preventDefault();
//                    alert(caller);
                    $.ajax({
                        dataType: 'json',
                        type: 'post',
                        url: end,
                        data: $("form").serialize(),
                        success: function (response) {
                            console.log(response);
//                            alert(response);
                            toastr.info('Atualizado ' + name, 'Atualizado', {
                                showDuration: 1000,
                                timeOut: 5000

                            });
//                            setTimeout('window.location.reload(true)', 2000);
                            $("#"+response.idGrid).DataTable().ajax.reload();
//                            table.url.reload();
                        }
                    });
                });

//            });

            break;

        case 'delete-modal':
            $('#footer_action_button').text(" Confirmar");
            $('#footer_action_button').removeClass('glyphicon-check');
            $('#footer_action_button').addClass('fa fa-trash');
            $('.actionBtn').removeClass('btn-success');
            $('.actionBtn').addClass('btn-danger');
            $('.actionBtn').addClass('delete');
            $('.modal-title').text('Deseja deletar ' + name + '?');
            $('.deleteContent').show();
            $('.form-horizontal').hide();
            $('#modal-dialog').modal('show');

            $('.modal-footer').on('click', '.delete', function () {

                $.ajax({
                    type: 'post',
                    url: end,
                    data: $("form").serialize(),
                    success: function (data) {
                        toastr.success('Registro ' + name + ' removido.', 'Deletado', {timeOut: 5000});
//                        $('.item' + $('.did').text()).remove();
                    }
                });
            });
            break;

        default:
            $('#footer_action_button').text(" Adicionar");
            $('#footer_action_button').removeClass('glyphicon-check');
            $('#footer_action_button').addClass('fa fa-plus');
            $('.actionBtn').removeClass('btn-success');
            $('.actionBtn').addClass('btn-success');
            $('.actionBtn').removeClass('btn-danger');
            $('.actionBtn').addClass('edit');
            $('.form-horizontal').show();
            $('.modal-title').text('Adicionar');

            $('.modal-footer').on('click', '.delete', function () {

                $.ajax({
                    type: 'post',
                    url: end,
                    data: $("form").serialize(),
                    success: function (data) {
                        toastr.info('Sucesso', 'Registro Adicionado', {
                            showDuration: 1000,
                            timeOut: 5000

                        });
                        setTimeout('window.location.reload(true)', 2000);

                    }
                });
            });
            break;

    }


}

$('body').on('hidden.bs.modal', '.modal', function () {
    $(this).remove();
});

