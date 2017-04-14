$(document).ready(function () {
    var numChecked = 0;

    $('#checkall').on('click', function(e) {
        e.preventDefault();
        console.log(numChecked);
        var todoItems = $('.todo-item');
        var isChecked = $(this).attr('checked');
        var newText = 'Uncheck All';
        numChecked = todoItems.length;
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
        console.log(numChecked);

        var numTodoItems = $('.todo-item').length;
        if (numChecked >= numTodoItems) {
            $('#checkall').text('Uncheck All');
            $('#checkall').attr('checked', true);
        } else if (numChecked == 0) {
            $('#checkall').text('Check All');
            $('#checkall').attr('checked', false);
        }
    });

    $('#confirm-action').on('show.bs.modal', function(e) {
        var action = $(e.relatedTarget).data('action') ? $(e.relatedTarget).data('action') : 'delete';

        $(this).find('.item-action').text(action);
        $(this).find('#item-type').text($(e.relatedTarget).data('item-type'));
        $(this).find('#item-name').text('• ' + $(e.relatedTarget).data('item-name'));
        $(this).find('.btn-ok').attr('href', $(e.relatedTarget).data('href'));
    });
});