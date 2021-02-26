<div class="col-md-4 my-3">
    <div class="text-center blog_grid_post wow fadeInUp ">
        <div class="card-body">
            <img class="img-fluid" style="max-height:200px" src="{{ asset('storage/images/' . $data->photo) }}" alt="">
        </div>
        <div class="post_tag">
            <a href="#">{{strftime("%a %d %b %Y", strtotime($data->created_at))}}</a>
            <a class="c_blue" href="">
                {{ $data->category->name }} </a>
            </div>
            <p class="mx-3">
                <a href="{{ url('/post/' . $data->slug) }}">
                    <h4>{{ \Str::limit($data->title, 20) }}</h4>
                </a>
                {{ \Str::limit($data->content, 120) }}
            </p>
        </div>
    </div>