
$(document).ready(function () {
//    $('[data-toggle="modal"]').click(function (e) {
    $('body').on('click', '[data-toggle="modal"]', function (e) {
        e.preventDefault();
        var url = $(this).attr('href');
        var dataID = $(this).attr('data-id');
        var name = $(this).attr('name');
        var id = $(this).attr('id');
//        alert('oi');
        data: url;

        if (url.indexOf('#') == 0) {

            $(url).modal('open');
        } else {

            $.get(url, function (data) {
                var divModal = $('<div class="modal fade" id="' + dataID + '" data-backdrop="static"  >' +
                        '<div class="modal-dialog modal-lg" >' +
                        '<div class="modal-content">' +
                        '<div class="modal-header ">' +
                        '<button type="button" class="close" data-dismiss="modal">&times;</button>' +
                        '<h3 class="modal-title"><span id="icon" class="icone(data_target)"></span> </h3>' +
                        '</div>' +
                        '<div class="modal-body">' +
                        data +
                        '</div></div></div></div>');

                $('body').append(divModal);


                action(id, name);

                $('#' + dataID).modal();

            }).success(function () {
            });
        }
    });
});


function action(id, name) {

    var base_url = window.location.origin;

    var end = base_url + '/gerenciador-de-senhas/public/' + name + "/envia";

    switch (id) {

        case 'edit':
            
            $('#footer_action_button').text(" Atualizar");
            $('#footer_action_button').addClass('fa fa-floppy-o ');
            $('#footer_action_button').removeClass('glyphicon-trash');
            $('.actionBtn').addClass('btn-success');
            $('.actionBtn').removeClass('btn-danger');
            $('.actionBtn').addClass('edit');
            $('.form-horizontal').show();
            $('.deleteContent').hide();
            $('.modal-title').text('Edição');
            $('.modal-header').addClass('modal-header-primary');


            $(document).ready(function () {

                $('.modal-footer').on('click', '.edit', function () {
//                    e.preventDefault();
                                        

                    $.ajax({
                        dataType: 'json',
                        type: 'post',
                        url: end,
                        data: $("form").serialize(),
                        success: function (response) {
                            

                            console.log(response);
//                            alert(response);
                            toastr.info('Registro atualizado', '', {
                                showDuration: 1000,
                                timeOut: 5000

                            });
//                            setTimeout('window.location.reload(true)', 2000);
                            $("#" + response.idGrid).DataTable().ajax.reload();
                        }
                    });
                });

            });

            break;

        case 'del':
            $('#footer_action_button').text(" Confirmar");
            $('#footer_action_button').removeClass('glyphicon-check');
            $('#footer_action_button').addClass('fa fa-trash');
            $('.actionBtn').removeClass('btn-success');
            $('.actionBtn').addClass('btn-danger');
            $('.actionBtn').addClass('del');
            $('.modal-title').text('Deletar');
            $('.deleteContent').show();
            $('.form-horizontal').hide();
            $('#modal-dialog').modal('show');
            $('.modal-header').addClass('modal-header-danger');


            $('.modal-footer').on('click', '.del', function () {

                $.ajax({
                    dataType: 'json',
                    type: 'get',
                    url: base_url + '/gerenciador-de-senhas/public/' + name + "/del",
                    data: $("form").serialize(),
                    success: function (response) {
                        console.log(response);



                        if (response.idGrid == 'Erro') {
                            toastr.error('Motivos: Podem haver informações que utilizem este item.', 'Houve um erro ao deletar este item',  {
                                showDuration: 1000,
                                timeOut: 5000

                            });
                            $("#" + response.idGrid).DataTable().ajax.reload();
                        } else {
                            toastr.success('Registro removido', '', {
                                showDuration: 1000,
                                timeOut: 5000
                            });
                            $("#" + response.idGrid).DataTable().ajax.reload();


                        }
                    }
                });
            });
            break;

        default:
            $('#footer_action_button').text(" Adicionar");
            $('#footer_action_button').removeClass('glyphicon-check');
            $('#footer_action_button').addClass('fa fa-plus');
            $('.actionBtn').removeClass('btn-success');
            $('#icon').addClass('fa fa-plus');
            $('.actionBtn').addClass('btn-success');
            $('.actionBtn').removeClass('btn-danger');
            $('.actionBtn').addClass('add');
            $('.form-horizontal').show();
            $('.modal-title').text('Cadastro');
            $('.modal-header').addClass('modal-header-success');


            $('.modal-footer').on('click', '.add', function () {
                $.ajax({
                    type: 'post',
                    url: end,
                    data: $("form").serialize(),
                    success: function (response) {
                        console.log(response);

                        toastr.success('Registro Cadastrado', '', {
                            showDuration: 1000,
                            timeOut: 5000

                        });

                        $("#" + response.idGrid).DataTable().ajax.reload();

                    }
                });
            });
            break;

    }


}

$('body').on('hidden.bs.modal', '.modal', function () {
    $(this).remove();
});
