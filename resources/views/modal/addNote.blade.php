<div class="modal fade" id="addNote{{$id}}" tabindex="-1" role="dialog" aria-labelledby="addNote">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">{{ $id ? $title : 'Add Note Entry' }}</h4>
            </div>
            <div class="modal-body">
                <form method="POST" action="{{ url('notes/save') }}" class="form-horizontal row">
                    <div class="col-md-offset-1 col-md-10">
                        <div class="form-group {{ $errors->has('title') ? 'has-error' : '' }}">
                            <label class="col-sm-12 text-left">Title</label>
                            <div class="col-sm-12">
                                <input type="text" class="form-control" name="title" placeholder="Note Title" value="{{ old('title') ?: $title }}">
                                {!! $errors->first('title', "<p class='help-block'>:message</p>") !!}
                            </div>
                        </div>
                        <div class="form-group {{ $errors->has('content') ? 'has-error' : '' }}">
                            <label class="col-sm-12 text-left">Note</label>
                            <div class="col-sm-12">
                                <textarea class="form-control" rows="3" style="resize:none" name="content">{{ old('content') ?: $content }}</textarea>
                                {!! $errors->first('content', "<p class='help-block'>:message</p>") !!}
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