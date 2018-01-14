let usersList = {
    setTableList : (users) => {
        let tbody = $('#users-list');

        tbody.empty();

        $.each(users, (key, user) => {
            var line = $("<tr>");
            var name = $("<td>").text(user.name);
            var email = $("<td>").text(user.email);
            var login = $("<td>").text(user.login);
            var status = $("<td>").text(user.active).addClass('text-center');
            var date = $("<td>").text(user.created_at).addClass('text-center');
            var actions = $("<td>").addClass('text-center');

            var linkEditIcon = $("<a>").attr('href', '#');
            var linkDeleteIcon = $("<a>").attr('href', '#');

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