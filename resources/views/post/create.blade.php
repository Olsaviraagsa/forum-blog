@extends('layouts.app')
@section('title', 'Create New Post')

@section('content')
<section class="breadcrumb_area">
    <img loading="lazy" src="https://wordpress.creativegigs.net/docly/wp-content/themes/docly/assets/img/v.svg" class="p_absolute bl_left" alt="leaf"><img loading="lazy" src="https://wordpress.creativegigs.net/docly/wp-content/themes/docly/assets/img/home_one/b_leaf.svg" class="p_absolute bl_right" alt="leaf"><img src="https://wordpress.creativegigs.net/docly/wp-content/plugins/phastpress/phast.php/c2Vydm/ljZT1pbWFnZXMmc3JjPWh0dHBzJTNBJTJGJTJGd29yZHByZXNzLmNyZWF0aXZlZ2lncy5uZXQlMkZkb2NseSUyRndwLWNvbnRlbnQlMkZ0aGVtZXMlMkZkb2NseSUyRmFzc2V0cyUyRmltZyUyRmhvbWVfb25lJTJGYmFubmVyX2JnLnBuZyZjYWNoZU1hcmtlcj0xNjA5Njk4OTUxLTExNjI4JnRva2VuPTRiNjVmMDgwMGVjOGQ2Y2M.q.png" loading="lazy" class="p_absolute star" alt="leaf"><img src="https://wordpress.creativegigs.net/docly/wp-content/plugins/phastpress/phast.php/c2VydmljZT1pbWFnZXMmc3JjPWh0dHBzJTNBJTJGJTJGd29yZHByZXNzLmNyZWF0aXZlZ2lncy5uZXQlMkZkb2NseSUyRndwLWNvbnRlbnQlMkZ0aGVtZXMlMkZkb2NseSUyRmFzc2V0cyUyRmltZyUyRnNoYXBfMDEucG5nJmNhY2hlTWFya2VyPTE2MDk2OTg5NTEtMTc1MTA1JnRva2VuPTViMGNhYzM1NTUzN2Y1ZTM.q.png" loading="lazy" class="p_absolute wave_shap_one" alt="Docly banner shape 01"><img src="https://wordpress.creativegigs.net/docly/wp-content/plugins/phastpress/phast.php/c2VydmljZT1pbWFnZXMmc3JjPWh0dHBzJTNBJTJGJTJGd29yZHByZXNzLmNyZWF0aXZlZ2lncy5uZXQlMkZkb2NseSUyRndwLWNvbnRlbnQlMkZ0aGVtZXMlMkZkb2NseSUyRmFzc2V0cyUyRmltZyUyRnNoYXBfMDIucG5nJmNhY2hlTWFya2VyPTE2MDk2OTg5NTEtMTQ2MDAzJnRva2VuPWRkYmMzMTcxZDZjMDZiN2Y.q.png" loading="lazy" class="p_absolute wave_shap_two" alt="Docly banner shape 02"><img src="https://wordpress.creativegigs.net/docly/wp-content/plugins/phastpress/phast.php/c2Vyd/mljZT1pbWFnZXMmc3JjPWh0dHBzJTNBJTJGJTJGd29yZHByZXNzLmNyZWF0aXZlZ2lncy5uZXQlMkZkb2NseSUyRndwLWNvbnRlbnQlMkZ0aGVtZXMlMkZkb2NseSUyRmFzc2V0cyUyRmltZyUyRmhvbWVfb25lJTJGYl9tYW5fdHdvLnBuZyZjYWNoZU1hcmtlcj0xNjA5Njk4OTUxLTczOTkmdG9rZW49OGU1MmJjYTIzZTAyNmNlMQ.q.png" loading="lazy" class="p_absolute one wow fadeInRight" alt="Man illustration"><img src="https://wordpress.creativegigs.net/docly/wp-content/plugins/phastpress/phast.php/c/2VydmljZT1pbWFnZXMmc3JjPWh0dHBzJTNBJTJGJTJGd29yZHByZXNzLmNyZWF0aXZlZ2lncy5uZXQlMkZkb2NseSUyRndwLWNvbnRlbnQlMkZ0aGVtZXMlMkZkb2NseSUyRmFzc2V0cyUyRmltZyUyRmhvbWVfb25lJTJGZmxvd2VyLnBuZyZjYWNoZU1hcmtlcj0xNjA5Njk4OTUxLTEyMDMmdG9rZW49Nzc0YmZkMjAyY2JiYzdlMQ.q.png" loading="lazy" class="p_absolute two wow fadeInUp" alt="Flower illustration"> <div class="container custom_container">
        <div class="breadcrumb_text text-center">
            <h2 class="text-center">
                {{ __('Create Post') }}</h2>
            </div>
    </div>
    </section>
    
    <section class="page_breadcrumb">
        <div class="container">
            <div class="row">
                <div class="col-sm-8 col-md-9">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="{{route ('posts.index')}}"> Posts </a>
                            </li>
                            <li class="breadcrumb-item">
                                <a href="{{route ('posts.create')}}"> Create Post </a>
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section>

    <div class="container py-3">
        <div class="row">
            <div class="col-md-12">
                    <div class="card-body">
                        @include ('layouts.alert')
                        <div class="row">
                            <div class="col-md-12">
                                {{ Form::open(['url' => route('posts.store'), 'method' => 'post', 'enctype' => 'multipart/form-data']) }}
                                    <div class="form-group row">
                                        {{ Form::label('title', 'Title', ['class' => 'col-md-3']) }}
                                        <div class="col-md-9">
                                            {{ Form::text('title', null, ['class' => 'form-control']) }}
                                            @error('title')
                                                <span class="text-danger" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                    </div>
                                    <div class="form-group row">
                                        {{ Form::label('category_id', 'Category', ['class' => 'col-md-3']) }}
                                        <div class="col-md-9">
                                            {{ Form::select('category_id', $categories, null, ['class' => 'form-control']) }}
                                            @error('category_id')
                                            <span class="text-danger" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        {{ Form::label('content', 'Content', ['class' => 'col-md-3']) }}
                                        <div class="col-md-9">
                                            {{ Form::textarea('content', null, ['class' => 'form-control']) }}
                                            @error('content')
                                                <span class="text-danger" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        {{ Form::label('photo', 'Photo', ['class' => 'col-md-3']) }}
                                        <div class="col-md-9">
                                            {{ Form::file('photo', ['class' => 'form-control']) }}
                                            @error('photo')
                                                <span class="text-danger" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    {{ Form::submit('Save', ['class' => 'btn btn-primary float-right']) }}
                                    {{ Form::close() }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
@endsection