@extends('index')
@section('content')
    <table class="table table-fixed">
        <thead>
        <th class="col-md-12">
            <div class="pull-right">
                <a class="btn btn-success" data-toggle="modal" data-target="#addNote" href="#">Add an Entry <i class="glyphicon glyphicon-plus-sign"></i></a>
            </div>
        </th>
        </thead>
        <tbody>
        @php
            $titles = array();
        @endphp
        @for($i = 1; $i <= 10; $i++)
            <tr>
                <td class="col-md-12">
                    <h4>
                        @php($titles[$i] = 'Subheading ' . str_random() . rand(0, 99999999) . ' ' . $i)
                        <a href="#" data-toggle="modal" data-target="#addNote{{$i}}" href="#">{{ $titles[$i] }}</a>
                        <a data-href="{{ url('api/notes/move', ['id' => $i]) }}"
                           data-toggle="modal" data-item-type="note" data-item-name="{{ $titles[$i] }}"
                           data-target="#confirm-action" data-action="move to todo" class="btn btn-sm btn-info">
                            <i class="glyphicon glyphicon-new-window"></i> Move to Todo
                        </a>
                        <a data-href="{{ url('api/notes/delete', ['id' => $i]) }}"
                           data-toggle="modal" data-item-type="note" data-item-name="{{ $titles[$i] }}"
                           data-target="#confirm-action" data-action="delete" class="btn btn-sm btn-danger">
                            <i class="glyphicon glyphicon-remove"></i> Delete
                        </a>
                    </h4>
                    <p>Donec id elit non mi porta gravida at eget metus. Maecenas faucibus mollis interdum.</p>
                </td>
            </tr>
        @endfor
        </tbody>
    </table>
@endsection

@section('modal')
    @php
        $id = null;
        $title = null;
        $content = null;
    @endphp
    @include('modal.addNote')
    @for($id = 1; $id <= 10; $id++)
        @php
            $title = $titles[$id];
            $content = 'Donec id elit non mi porta gravida at eget metus. Maecenas faucibus mollis interdum.';
        @endphp
        @include('modal.addNote')
    @endfor
@endsection