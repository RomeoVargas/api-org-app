<div class="row">
    <div class="col-md-offset-1 col-md-10">
        <table class="table table-fixed">
            <thead>
                <th class="col-md-12">
                    <div class="pull-left">
                        <a class="btn btn-default" id="checkall" href="#">Check All</a>
                        <div class="btn-group">
                            <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Action <span class="caret"></span>
                            </button>
                            <ul class="dropdown-menu">
                                <li><a href="#">Mark as Done</a></li>
                                <li><a href="#">Move to Notes</a></li>
                                <li><a href="#">Delete</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="pull-right">
                        <a class="btn btn-success" data-toggle="modal" data-target="#addTodo" href="#">Add an Entry <i class="glyphicon glyphicon-plus-sign"></i></a>
                    </div>
                </th>
            </thead>
            <tbody>
            @for($i = 1; $i <= 10; $i++)
                <tr>
                    <td class="col-md-12">
                        <div class="col-md-offset-1 col-md-10 checkbox">
                            <h4>
                                <label>
                                    <input class="todo-item" type="checkbox" value="">
                                    <a href="#" data-toggle="modal" data-target="#addTodo{{$i}}">
                                        My chores My chores My chores My chores My chores My chores My chores number {{ $i }}
                                    </a>
                                </label>
                            </h4>
                        </div>
                    </td>
                </tr>
            @endfor
            </tbody>
        </table>
    </div>
</div>

@section('modal')
    @php
        $id = null;
        $text = null;
    @endphp
    @include('modal.addTodo')
    @for($id = 1; $id <= 10; $id++)
        @php($text = 'My chores My chores My chores My chores My chores My chores My chores number '.$id)
        @include('modal.addTodo')
    @endfor
@endsection