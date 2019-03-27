$(document).ready(function () {
    $.ajax({
        url: "php/tasks_request.php", dataType:"json",
        success: function (result) {      
            $.each(result, function (i, data) {
            /*    console.log(i);
                console.log(data.content);  */
                $('.tasks-table').append(" <tr><td> " + data.id + " </td> <td> " + data.date + " </td> <td> " + data.content + " </td> <td><button class='btn-delete' id='task-btn-delete' type='button' value=" + data.id + ">Supprimer</button></td> <td><button class='btn-edit' id='task-btn-edit' type='button' value=" + data.id + ">Edit</button></td> </tr> ");
            });   
        }
    });

});
