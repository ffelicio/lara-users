let userError = {
    showErrors : (listErrors) => {
        var divAlertError = '';

        divAlertError  = '<div class="alert alert-danger alert-dismissible fade show" role="alert">';
            divAlertError += '<button type="button" class="close" data-dismiss="alert" aria-label="Close">';
                divAlertError += '<span aria-hidden="true">&times;</span>';
            divAlertError += '</button>';

            divAlertError += '<ul>';

            $.each(listErrors.errors ,function(key, error) {
                divAlertError += '<li>' + error[0] + '</li>';
            });

            divAlertError += '</ul>';
        divAlertError += '</div>';

        return divAlertError;
    }
}