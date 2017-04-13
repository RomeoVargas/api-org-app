<div class="modal fade" id="addTodo{{$id}}" tabindex="-1" role="dialog" aria-labelledby="addTodo">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">{{ $id ? 'Edit' : 'Add' }} Todo Entry</h4>
            </div>
            <div class="modal-body">
                <form method="POST" action="{{ url('todo/save') }}" class="form-horizontal row">
                    <div class="col-md-offset-1 col-md-10">
                        <div class="form-group {{ $errors->has('text') ? 'has-error' : '' }}">
                            <label class="col-sm-12 text-left">Task</label>
                            <div class="col-sm-12">
                                <textarea class="form-control" rows="3" style="resize:none" name="text">{{ old('text') ?: $text }}</textarea>
                                {!! $errors->first('text', "<p class='help-block'>:message</p>") !!}
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-12 text-center">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <input type="hidden" name="id" value="{{ $id }}">
                                <button class="btn btn-sm btn-primary btn-block" type="submit">{{ $id ? 'Save Changes' : 'Add Entry' }}</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>