@extends('layouts.app')
@section('title', $post->title)
@section('content')
<section class="breadcrumb_area">
    <img loading="lazy" src="https://wordpress.creativegigs.net/docly/wp-content/themes/docly/assets/img/v.svg" class="p_absolute bl_left" alt="leaf">
    <img loading="lazy" src="https://wordpress.creativegigs.net/docly/wp-content/themes/docly/assets/img/home_one/b_leaf.svg" class="p_absolute bl_right" alt="leaf">
    <img src="https://wordpress.creativegigs.net/docly/wp-content/plugins/phastpress/phast.php/c2Vydm/ljZT1pbWFnZXMmc3JjPWh0dHBzJTNBJTJGJTJGd29yZHByZXNzLmNyZWF0aXZlZ2lncy5uZXQlMkZkb2NseSUyRndwLWNvbnRlbnQlMkZ0aGVtZXMlMkZkb2NseSUyRmFzc2V0cyUyRmltZyUyRmhvbWVfb25lJTJGYmFubmVyX2JnLnBuZyZjYWNoZU1hcmtlcj0xNjA5Njk4OTUxLTExNjI4JnRva2VuPTRiNjVmMDgwMGVjOGQ2Y2M.q.png" loading="lazy" class="p_absolute star" alt="leaf">
    <img src="https://wordpress.creativegigs.net/docly/wp-content/plugins/phastpress/phast.php/c2Vyd/mljZT1pbWFnZXMmc3JjPWh0dHBzJTNBJTJGJTJGd29yZHByZXNzLmNyZWF0aXZlZ2lncy5uZXQlMkZkb2NseSUyRndwLWNvbnRlbnQlMkZ0aGVtZXMlMkZkb2NseSUyRmFzc2V0cyUyRmltZyUyRmhvbWVfb25lJTJGYl9tYW5fdHdvLnBuZyZjYWNoZU1hcmtlcj0xNjA5Njk4OTUxLTczOTkmdG9rZW49OGU1MmJjYTIzZTAyNmNlMQ.q.png" loading="lazy" class="p_absolute one wow fadeInRight" alt="Man illustration">
    <img src="https://wordpress.creativegigs.net/docly/wp-content/plugins/phastpress/phast.php/c/2VydmljZT1pbWFnZXMmc3JjPWh0dHBzJTNBJTJGJTJGd29yZHByZXNzLmNyZWF0aXZlZ2lncy5uZXQlMkZkb2NseSUyRndwLWNvbnRlbnQlMkZ0aGVtZXMlMkZkb2NseSUyRmFzc2V0cyUyRmltZyUyRmhvbWVfb25lJTJGZmxvd2VyLnBuZyZjYWNoZU1hcmtlcj0xNjA5Njk4OTUxLTEyMDMmdG9rZW49Nzc0YmZkMjAyY2JiYzdlMQ.q.png" loading="lazy" class="p_absolute two wow fadeInUp" alt="Flower illustration">
    <div class="container custom_container">
        <div class="breadcrumb_text text-center">
            <h2 class="text-center">
                {{ $post->title }}</h2>
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
                <a href=""> {{ $post->category->name }} </a>
            </li>
            <li class="breadcrumb-item">
                <a href=""> {{ $post->title }} </a>
            </li>
        </ol>
    </nav>
        </div>
        <div class="col-sm-4 col-md-3">
        <span class="date">
            <i class="fa fa-clock-o" aria-hidden="true"></i>
            Uploaded on {{ strftime("%a, %d %b %Y", strtotime($post -> created_at)) }}
         </span>
        </div>
    </div>
        </div>
        </section>
        
        
    <div class="container py-3">
        <div class="row">
            {{-- <div class="col-md-12">
                <h1 class="text-center my-4">{{ $post->title }}</h1>
            </div> --}}
            <div class="col-md-12">
                @include ('layouts.alert')
                <div class="card">
                    <div class="card-body">
                        <img class="d-block mx-auto my-5" src="{{ asset('storage/images/' . $post->photo) }}" alt="{{ $post->title }}" style="width: 30em">
                        <p>{{ $post->content }}</p>
                    </div>
                </div>
                <div class="card my-3">
                    <div class="card-body">
                        <h4>Author: {{ $post->user->name }}</h4>
                        <h6>Category: {{ $post->category->name }}</h6>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        @include('layouts.alert')
                        @include('components.insert-comment')
                        @each('components.comment-card', $post->comments, 'data', 'components.comment-empty')
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection