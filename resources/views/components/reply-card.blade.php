<div class="col-md-12 my-3">
    <div class="card">
        <div class="card-body p-3 pb-0">
            <div class="row">
                <div class="col-sm-1 text-center">
                    <img src="{{ asset('storage/images/' . $reply->user->avatar) }}" alt="." style="width:30px;height:30px;">
                </div>
                <div class="col-sm-11">
                    <div class="row">
                        <div class="col-sm-10">
                            <h6>{{ $reply->user->name }}</h6>
                            <div>{{ $reply->content }}</div>
                        </div>
                        @if (\Auth::check() && $reply->user->id == auth()->user()->id)
                        <div class="col-auto">
                            <a href="{{ route('forum.delete-reply', ['reply_id' => $reply->id]) }}" class="btn btn-sm btn-danger">Delete</a>
                        </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>