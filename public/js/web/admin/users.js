$(function() {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    users.all();
});

let users = {
    all : () => {
        $.ajax({
            url : URL + '/api/users',
            dataType: 'json',
            type: 'GET'
        }).done((result) => {
            console.log(result);
        });
    },
    create : () => {

    },
    update : () => {

    },
    delete : () => {

    }
}