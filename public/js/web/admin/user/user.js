$(function() {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    users.all();

    $('#btn-novo').click(users.create);
    $("tbody").on("click", ".edit", function(event) {
        event.preventDefault();
        users.edit($(this).data('id'));
    });
    $("tbody").on("click", ".delete", function(event) {
        event.preventDefault();
        users.delete($(this).data('id'));
    });
    $('button.save').click(users.saveForm);
});

let users = {
    all : () => {
        $.ajax({
            url : URL + '/api/users',
            dataType: 'json',
            type: 'GET'
        }).done((result) => {
            usersList.setTableList(result);
        });
    },
    create : () => {
        let $modal = $('.modal');
        $modal.on('show.bs.modal', function(e) {
            $('.error').html('');
            
            $(this).find('.modal-title').text('Cadastrar');
            $(this).find('.id').val('');
            $(this).find('.nome').val('');
            $(this).find('.email').val('');
            $(this).find('.login').val('');
            $(this).find('.ativo option[value=1]').attr('selected', 'selected');
        });
    },
    edit : (id) => {
        let $modal = $('.modal');
        $modal.on('show.bs.modal', function(e) {
            var modal = $(this);
            $('.error').html('');

            modal.find('.modal-title').text('Editar');

            $.ajax({
                url : URL + '/api/user/' + id + '/edit',
                dataType: 'json',
                type: 'GET'
            }).done((user) => {
                if(user) {
                    modal.find('.id').val(user.id);
                    modal.find('.nome').val(user.name);
                    modal.find('.email').val(user.email);
                    modal.find('.login').val(user.login);
                    modal.find('.ativo option[value=' + user.active + ']').attr('selected','selected');
                }
            });
        });
    },
    delete : (id) => {
        swal({
            title: "Você tem certeza?",
            text: "Uma vez excluído, você não poderá recuperar o usuário.",
            icon: "warning",
            buttons: true,
            dangerMode: true,
        })
        .then((deleteUser) => {
            if (deleteUser) {
                $.ajax({
                    url : URL + '/api/user/' + id + '/destroy',
                    type: 'POST',
                    dataType : 'json'
                }).done((user) => {
        
                    swal("Usuário excluído com sucesso.", {
                        icon: "success",
                    });

                    // Chama a lista de usuários após a gravação/edição
                    users.all();
        
                }).fail(function(jqXHR, textStatus, errorThrown) {
                    let divErrors = userError.showErrors(jqXHR.responseJSON);
                    $('.error').append(divErrors);
                });

              
            }
        });
    },
    saveForm : () => {
        let id = $('[name="id"]').val();
        let resourceUrl = URL + '/api/user/' + (!id ? 'create' : id + '/update');
        $('.error').html('');

        $.ajax({
            url : resourceUrl,
            data : $('form').serialize(),
            type: 'POST',
            dataType : 'json'
        }).done((user) => {

            $('.modal').attr('data-dismiss', 'modal').modal('hide');

            swal("", "Dados salvos com sucesso.", "success");

            // Chama a lista de usuários após a gravação/edição
            users.all();

        }).fail(function(jqXHR, textStatus, errorThrown) {
            let divErrors = userError.showErrors(jqXHR.responseJSON);
            $('.error').append(divErrors);
        });
    }
}