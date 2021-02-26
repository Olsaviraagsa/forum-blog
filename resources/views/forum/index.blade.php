@extends('layouts.app')
@section('title', 'Forum')

@section('content')
<section class="breadcrumb_area">
    <img loading="lazy" src="https://wordpress.creativegigs.net/docly/wp-content/themes/docly/assets/img/v.svg" class="p_absolute bl_left" alt="leaf"><img loading="lazy" src="https://wordpress.creativegigs.net/docly/wp-content/themes/docly/assets/img/home_one/b_leaf.svg" class="p_absolute bl_right" alt="leaf"><img src="https://wordpress.creativegigs.net/docly/wp-content/plugins/phastpress/phast.php/c2Vydm/ljZT1pbWFnZXMmc3JjPWh0dHBzJTNBJTJGJTJGd29yZHByZXNzLmNyZWF0aXZlZ2lncy5uZXQlMkZkb2NseSUyRndwLWNvbnRlbnQlMkZ0aGVtZXMlMkZkb2NseSUyRmFzc2V0cyUyRmltZyUyRmhvbWVfb25lJTJGYmFubmVyX2JnLnBuZyZjYWNoZU1hcmtlcj0xNjA5Njk4OTUxLTExNjI4JnRva2VuPTRiNjVmMDgwMGVjOGQ2Y2M.q.png" loading="lazy" class="p_absolute star" alt="leaf"><img src="https://wordpress.creativegigs.net/docly/wp-content/plugins/phastpress/phast.php/c2Vyd/mljZT1pbWFnZXMmc3JjPWh0dHBzJTNBJTJGJTJGd29yZHByZXNzLmNyZWF0aXZlZ2lncy5uZXQlMkZkb2NseSUyRndwLWNvbnRlbnQlMkZ0aGVtZXMlMkZkb2NseSUyRmFzc2V0cyUyRmltZyUyRmhvbWVfb25lJTJGYl9tYW5fdHdvLnBuZyZjYWNoZU1hcmtlcj0xNjA5Njk4OTUxLTczOTkmdG9rZW49OGU1MmJjYTIzZTAyNmNlMQ.q.png" loading="lazy" class="p_absolute one wow fadeInRight" alt="Man illustration"><img src="https://wordpress.creativegigs.net/docly/wp-content/plugins/phastpress/phast.php/c/2VydmljZT1pbWFnZXMmc3JjPWh0dHBzJTNBJTJGJTJGd29yZHByZXNzLmNyZWF0aXZlZ2lncy5uZXQlMkZkb2NseSUyRndwLWNvbnRlbnQlMkZ0aGVtZXMlMkZkb2NseSUyRmFzc2V0cyUyRmltZyUyRmhvbWVfb25lJTJGZmxvd2VyLnBuZyZjYWNoZU1hcmtlcj0xNjA5Njk4OTUxLTEyMDMmdG9rZW49Nzc0YmZkMjAyY2JiYzdlMQ.q.png" loading="lazy" class="p_absolute two wow fadeInUp" alt="Flower illustration">
    <div class="container custom_container">
        <div class="breadcrumb_text text-center">
            <h2 h2 class="text-center">
                @yield('title')</h2>
            </div>
    </div>
    </section>
    
    <div class="sec_pad page_wrapper forum-page-content">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">

                    @include ('layouts.alert')
                    
                    <div class="post-header forums-header">
                        <div class="col-md-6 col-sm-6 support-info">
                            <span> Question </span>
                        </div>
            
                        <div class="col-md-6 col-sm-6 support-category-menus">
                            <ul class="forum-titles">
            <li class="forum-topic-count"> Replies </li>
            <li class="forum-freshness"> Author </li>
        </ul>
    </div>
    
</div>
<div class="community-posts-wrapper bb-radius">
    @foreach ($forum as $item)
    <div id="bbp-forum-4974" class="community-post style-two forum-item loop-item-0 bbp-forum-status-open bbp-forum-visibility-publish odd  post-4974 forum type-forum status-publish has-post-thumbnail hentry">
        <div class="col-md-6 post-content">
        <div class="entry-content">
            <h3 class="post-title">
                <a href="{{ url('/forum/' . $item->slug) }}">
                    {{ $item -> question }}
                </a>
            </h3>
            <p> {{ \Str::limit($item->content, 25) }} </p>
        </div>
    </div>
    <div class="col-md-6 post-meta-wrapper">
        <ul class="forum-titles">
            <li class="forum-topic-count"> {{ $item->replies_count }} </li>
            <li class="forum-freshness">
                <div class="freshness-box">
                    <div class="freshness-top">
                    <div class="freshness-link">
                        <a>
                            {{ strftime("%a, %d %b %Y", strtotime($item -> created_at)) }}
                        </a>
                    </div>
                    </div>
                    <div class="freshness-btm">
                    <div class="freshness-link">
                        <a class="freshness-name">
                            {{ $item->user->name }}
                        </a>
                    </div>
                    </div>
</div>
</li>
</ul>
</div>
</div>
@endforeach
</div>
</div>

{{-- SIDEBAR CATEGORIES --}}
<div class="col-lg-4">
    <div class="forum_sidebar">
        <div id="doclycore\wpwidgets\forums_widget-2" class="widget sidebar_widget ticket_widget"><h3 class="c_head">Article Categories</h3>
            <ul class="list-unstyled ticket_categories">
                @foreach ($categories as $item)
                <li >
                    <a href="{{ route('search', ['category_id' => $item->id ]) }}" class="bbp-forum-title">
                    {{ $item -> name }} </a>
                    {{-- <span class="count">1</span> --}}
                </li>
                @endforeach
            </div>
        </ul>
    </div>
</div>
</div>
</div>
</div>

{{-- BANNER BAWAH - QUESTION --}}
<div class="call-to-action">
    <div style="background-image: url(https://wordpress.creativegigs.net/docly/wp-content/plugins/phastpress/phast.php/c2Vyd/mljZT1pbWFnZXMmc3JjPWh0dHBzJTNBJTJGJTJGd29yZHByZXNzLmNyZWF0aXZlZ2lncy5uZXQlMkZkb2NseSUyRndwLWNvbnRlbnQlMkZ0aGVtZXMlMkZkb2NseSUyRmFzc2V0cyUyRmltZyUyRmZvcnVtJTJGb3ZlcmxheV9iZy5wbmcmY2FjaGVNYXJrZXI9MTYwOTY5ODk1MS0zODQ5MjImdG9rZW49NzdiNzNkYmVmNjk2YjhmOA.q.png);" class="overlay-bg"></div>
    <div class="container">
        <div class="action-content-wrapper">
                <div class="action-title-wrap title-img">
                    <img src="https://wordpress.creativegigs.net/docly/wp-content/plugins/phastpress/phast.php/c2V/ydmljZT1pbWFnZXMmc3JjPWh0dHBzJTNBJTJGJTJGd29yZHByZXNzLmNyZWF0aXZlZ2lncy5uZXQlMkZkb2NseSUyRndwLWNvbnRlbnQlMkZ0aGVtZXMlMkZkb2NseSUyRmFzc2V0cyUyRmltZyUyRmZvcnVtJTJGY2hhdC1zbWlsZS5wbmcmY2FjaGVNYXJrZXI9MTYwOTY5ODk1MS0zMTY4OSZ0b2tlbj0yMmNlZWNkZDIyN2VhYWFh.q.png" loading="lazy" alt="New to Communities?">
                    <h2 class="action-title">Any New Question?</h2>
                </div>
                <a href="{{ Route('forum.create') }}" class="action_btn">
                    Ask Now <i class="fa fa-arrow-right" aria-hidden="true"></i></i>
                </a>
            </div>
            
        </div>
        
    </div>
    @endsection   