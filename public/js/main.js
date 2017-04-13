$(document).ready(function () {
    var numChecked = 0;

    $('#checkall').on('click', function(e) {
        e.preventDefault();
        var todoItems = $('.todo-item');
        var isChecked = $(this).attr('checked');
        var newText = 'Uncheck All';
        numChecked = todoItems.length / 2;
        if (isChecked) {
            newText = 'Check All';
            numChecked = 0;
        }
        $(this).text(newText);
        $(this).attr('checked', !isChecked);
        todoItems.prop('checked', !isChecked);
    });

    $('.todo-item').on('click', function(e) {
        var isChecked = $(this).prop('checked');
        if (isChecked) {
            numChecked++;
        } else {
            numChecked--;
        }

        var numTodoItems = $('.todo-item').length / 2;
        if (numChecked >= numTodoItems) {
            $('#checkall').text('Uncheck All');
            $('#checkall').attr('checked', true);
        }
    });
});