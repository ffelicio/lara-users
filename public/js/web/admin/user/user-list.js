let usersList = {
    setTableList : (users) => {
        let tbody = $('#users-list');

        tbody.empty();

        if(!users.length) {
            var line = $("<tr>").append($("<td>").attr("colspan", 6).addClass('text-center').text('Não existem usuários cadastrados.'));

            tbody.append(line);
            return;
        }

        $.each(users, (key, user) => {
            var line = $("<tr>");
            var name = $("<td>").text(user.name);
            var email = $("<td>").text(user.email);
            var login = $("<td>").text(user.login);
            var status = $("<td>").addClass('text-center');
            var date = $("<td>").text(user.created_at).addClass('text-center');
            var actions = $("<td>").addClass('text-center');

            var lblStatus = $("<span>").addClass('badge');

            if(parseInt(user.active) === 1) {
                status.append(lblStatus.addClass('badge-success').text('Ativo'));
            } else {
                status.append(lblStatus.addClass('badge-danger').text('Inativo'));
            }

            var linkEditIcon = $("<a>").attr({"href" : "#", "data-id" : user.id, "data-toggle" : "modal", "data-target" : ".modal"}).addClass('edit');
            var linkDeleteIcon = $("<a>").attr({"href" : "#", "data-id" : user.id}).addClass('delete');

            actions.append(linkEditIcon.append($("<span>").addClass('oi').addClass('oi-pencil')));
            actions.append("&nbsp;&nbsp;");
            actions.append(linkDeleteIcon.append($("<span>").addClass('oi').addClass('oi-trash')));

            line.append(name);
            line.append(email);
            line.append(login);
            line.append(status);
            line.append(date);
            line.append(actions);

            tbody.append(line);
        });
    }
}