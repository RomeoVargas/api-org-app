@extends('index')
@section('content')
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
        @foreach($todo as $entry)
            <tr>
                <td class="col-md-12">
                    <div class="col-md-offset-1 col-md-10 checkbox">
                        <h4>
                            <label>
                                <input class="todo-item" type="checkbox" {{ $entry->is_done ? 'checked' : null }}>
                                <a href="#" data-toggle="modal" data-target="#addTodo{{$entry->id}}">
                                    {{ $entry->text }}
                                </a>
                            </label>
                        </h4>
                    </div>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection

@section('modal')
    @php
        $id = null;
        $task = null;
    @endphp
    @include('modal.addTodo')
    @foreach($todo as $entry)
        @php
            $id = $entry->id;
            $task = $entry->text;
        @endphp
        @include('modal.addTodo')
    @endforeach
@endsection