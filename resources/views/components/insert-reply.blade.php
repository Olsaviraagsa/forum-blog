<div class="col-md-12 my-3">
    <div class="card">
        <div class="card-body p-3 pb-0">
            <div class="row">
                <div class="col-md-12">
                    {{ Form::open(['url' => route('forum.add-reply', ['slug' => $forum->slug]), 'method' => 'post']) }}
                        <div class="form-row align-items-center">
                            <div class="col-sm-3 my-1">
                                {{ Form::label('reply', 'Your Reply') }}
                            </div>
                            <div class="col-sm-8 my-1">
                                {{ Form::text('reply', null, ['class' => 'form-control']) }}
                                @error('reply')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-auto">
                                {{ Form::submit('Send', ['class' => 'btn btn-primary']) }}
                            </div>
                        </div>
                    {{ Form::close() }}
                </div>
            </div>
        </div>
    </div>
</div>