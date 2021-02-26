@extends('layouts.app')
@section('title', "Search result for: {$keyword}")

@section('content')
<section class="breadcrumb_area">
    <img loading="lazy" src="https://wordpress.creativegigs.net/docly/wp-content/themes/docly/assets/img/v.svg" class="p_absolute bl_left" alt="leaf"><img loading="lazy" src="https://wordpress.creativegigs.net/docly/wp-content/themes/docly/assets/img/home_one/b_leaf.svg" class="p_absolute bl_right" alt="leaf"><img src="https://wordpress.creativegigs.net/docly/wp-content/plugins/phastpress/phast.php/c2Vydm/ljZT1pbWFnZXMmc3JjPWh0dHBzJTNBJTJGJTJGd29yZHByZXNzLmNyZWF0aXZlZ2lncy5uZXQlMkZkb2NseSUyRndwLWNvbnRlbnQlMkZ0aGVtZXMlMkZkb2NseSUyRmFzc2V0cyUyRmltZyUyRmhvbWVfb25lJTJGYmFubmVyX2JnLnBuZyZjYWNoZU1hcmtlcj0xNjA5Njk4OTUxLTExNjI4JnRva2VuPTRiNjVmMDgwMGVjOGQ2Y2M.q.png" loading="lazy" class="p_absolute star" alt="leaf"><img src="https://wordpress.creativegigs.net/docly/wp-content/plugins/phastpress/phast.php/c2Vyd/mljZT1pbWFnZXMmc3JjPWh0dHBzJTNBJTJGJTJGd29yZHByZXNzLmNyZWF0aXZlZ2lncy5uZXQlMkZkb2NseSUyRndwLWNvbnRlbnQlMkZ0aGVtZXMlMkZkb2NseSUyRmFzc2V0cyUyRmltZyUyRmhvbWVfb25lJTJGYl9tYW5fdHdvLnBuZyZjYWNoZU1hcmtlcj0xNjA5Njk4OTUxLTczOTkmdG9rZW49OGU1MmJjYTIzZTAyNmNlMQ.q.png" loading="lazy" class="p_absolute one wow fadeInRight" alt="Man illustration"><img src="https://wordpress.creativegigs.net/docly/wp-content/plugins/phastpress/phast.php/c/2VydmljZT1pbWFnZXMmc3JjPWh0dHBzJTNBJTJGJTJGd29yZHByZXNzLmNyZWF0aXZlZ2lncy5uZXQlMkZkb2NseSUyRndwLWNvbnRlbnQlMkZ0aGVtZXMlMkZkb2NseSUyRmFzc2V0cyUyRmltZyUyRmhvbWVfb25lJTJGZmxvd2VyLnBuZyZjYWNoZU1hcmtlcj0xNjA5Njk4OTUxLTEyMDMmdG9rZW49Nzc0YmZkMjAyY2JiYzdlMQ.q.png" loading="lazy" class="p_absolute two wow fadeInUp" alt="Flower illustration"> <div class="container custom_container">
        <form action="{{ route('search') }}" role="search" method="get" class="banner_search_form banner_search_form_two focused-form">
        <div class="input-group">
        <input type="search" id="searchInput" class="form-control" name="keyword" onkeyup="fetchResults()" placeholder="Type keyword here ..." autocomplete="off" value="{{ $keyword }}">
        <div class="input-group-append">
            {{-- <select name="category" id="category" class="form-control">
            <option value="" disabled selected>Choose a category</option>
            @foreach ($categories as $item)
                <option value="{{ $item->slug }}">{{ $item->name }}</option>
            @endforeach
        </select> --}}
    </div>
    <button type="submit">Search</button>
    </div>
    <div id="docly-search-result"></div>
    </form>
    </div>
    </section>

    <section class="page_breadcrumb">
        <div class="container">
            <div class="row">
                <div class="col-sm-8 col-md-9">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="{{route ('home')}}"> Home </a>
                            </li>
                            <li class="breadcrumb-item">
                                <a href="#"> {{ $keyword }} </a>
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section>

{{-- <div class="breadcrumb_area_three">
    <img src="https://wordpress.creativegigs.net/docly/wp-content/plugins/phastpress/phast.php/c2VydmljZT1pbWFnZXMmc3JjPWh0dHBzJTNBJTJGJTJGd29yZHByZXNzLmNyZWF0aXZlZ2lncy5uZXQlMkZkb2NseSUyRndwLWNvbnRlbnQlMkZ0aGVtZXMlMkZkb2NseSUyRmFzc2V0cyUyRmltZyUyRmxlYWZfbGVmdC5wbmcmY2FjaGVNYXJrZXI9MTYwOTY5ODk1MS0xMzU4MiZ0b2tlbj0wZWIzYTQxZTI1OTc5NWRj.q.png" loading="lazy" class="p_absolute one" alt="leaf left"><img src="https://wordpress.creativegigs.net/docly/wp-content/plugins/phastpress/phast.php/c2VydmljZT1pbWFnZXMmc3JjPWh0dHBzJTNBJTJGJTJGd29yZHByZXNzLmNyZWF0aXZlZ2lncy5uZXQlMkZkb2NseSUyRndwLWNvbnRlbnQlMkZ0aGVtZXMlMkZkb2NseSUyRmFzc2V0cyUyRmltZyUyRmxlYWZfcmlnaHQucG5nJmNhY2hlTWFya2VyPTE2MDk2OTg5NTEtMTEwNzEmdG9rZW49Mjc3NTZlZDZhNzBkMDU4OQ.q.png" loading="lazy" class="p_absolute four" alt="leaf right"> <div class="container">
    <div class="breadcrumb_text text-center">
    <h2 class="text-center">
    Search result for: “{{ $keyword }}” </h2>

    <form action="{{ route('search') }}" role="search" method="get" class="banner_search_form">
        <div class="input-group">
            <input type="text" class="form-control" name="keyword" id="searchInput" placeholder="Type keyword here...." value="{{$keyword}}">
            <div class="input-group-append">
                <button type="submit" class="search_btn"> Search </button>
            </div>
        </div>
    </form>

    </div>
    </div>
    </div> --}}

    <div class="container py-5">
        {{-- <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('search') }}" method="get">
                            <label for="keyword">Search for: </label>
                            <div class="btn-group" role="group" aria-label="Search">
                                <input name="keyword" type="text" class="form-control" value="{{ $keyword }}" placeholder="Type a keyword...">
                                <button type="submit" class="btn btn-primary">Search</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div> --}}
        <h3 class="text-center">
            Search result for: “{{ $keyword }}” </h3>
        <div class="row justify-content-center">
            @each('components.blog-card', $posts, 'data', 'components.blog-empty')
        </div>
        <div class="row">
            <div class="col-md-12">
                {!! $posts->links() !!}
            </div>
        </div>
    </div>
@endsection
