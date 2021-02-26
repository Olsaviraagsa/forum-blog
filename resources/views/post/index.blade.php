@extends('layouts.app')
@section('title', 'All Posts')

@section('content')
<section class="breadcrumb_area">
    <img loading="lazy" src="https://wordpress.creativegigs.net/docly/wp-content/themes/docly/assets/img/v.svg" class="p_absolute bl_left" alt="leaf"><img loading="lazy" src="https://wordpress.creativegigs.net/docly/wp-content/themes/docly/assets/img/home_one/b_leaf.svg" class="p_absolute bl_right" alt="leaf"><img src="https://wordpress.creativegigs.net/docly/wp-content/plugins/phastpress/phast.php/c2Vydm/ljZT1pbWFnZXMmc3JjPWh0dHBzJTNBJTJGJTJGd29yZHByZXNzLmNyZWF0aXZlZ2lncy5uZXQlMkZkb2NseSUyRndwLWNvbnRlbnQlMkZ0aGVtZXMlMkZkb2NseSUyRmFzc2V0cyUyRmltZyUyRmhvbWVfb25lJTJGYmFubmVyX2JnLnBuZyZjYWNoZU1hcmtlcj0xNjA5Njk4OTUxLTExNjI4JnRva2VuPTRiNjVmMDgwMGVjOGQ2Y2M.q.png" loading="lazy" class="p_absolute star" alt="leaf"><img src="https://wordpress.creativegigs.net/docly/wp-content/plugins/phastpress/phast.php/c2VydmljZT1pbWFnZXMmc3JjPWh0dHBzJTNBJTJGJTJGd29yZHByZXNzLmNyZWF0aXZlZ2lncy5uZXQlMkZkb2NseSUyRndwLWNvbnRlbnQlMkZ0aGVtZXMlMkZkb2NseSUyRmFzc2V0cyUyRmltZyUyRnNoYXBfMDEucG5nJmNhY2hlTWFya2VyPTE2MDk2OTg5NTEtMTc1MTA1JnRva2VuPTViMGNhYzM1NTUzN2Y1ZTM.q.png" loading="lazy" class="p_absolute wave_shap_one" alt="Docly banner shape 01"><img src="https://wordpress.creativegigs.net/docly/wp-content/plugins/phastpress/phast.php/c2VydmljZT1pbWFnZXMmc3JjPWh0dHBzJTNBJTJGJTJGd29yZHByZXNzLmNyZWF0aXZlZ2lncy5uZXQlMkZkb2NseSUyRndwLWNvbnRlbnQlMkZ0aGVtZXMlMkZkb2NseSUyRmFzc2V0cyUyRmltZyUyRnNoYXBfMDIucG5nJmNhY2hlTWFya2VyPTE2MDk2OTg5NTEtMTQ2MDAzJnRva2VuPWRkYmMzMTcxZDZjMDZiN2Y.q.png" loading="lazy" class="p_absolute wave_shap_two" alt="Docly banner shape 02"><img src="https://wordpress.creativegigs.net/docly/wp-content/plugins/phastpress/phast.php/c2Vyd/mljZT1pbWFnZXMmc3JjPWh0dHBzJTNBJTJGJTJGd29yZHByZXNzLmNyZWF0aXZlZ2lncy5uZXQlMkZkb2NseSUyRndwLWNvbnRlbnQlMkZ0aGVtZXMlMkZkb2NseSUyRmFzc2V0cyUyRmltZyUyRmhvbWVfb25lJTJGYl9tYW5fdHdvLnBuZyZjYWNoZU1hcmtlcj0xNjA5Njk4OTUxLTczOTkmdG9rZW49OGU1MmJjYTIzZTAyNmNlMQ.q.png" loading="lazy" class="p_absolute one wow fadeInRight" alt="Man illustration"><img src="https://wordpress.creativegigs.net/docly/wp-content/plugins/phastpress/phast.php/c/2VydmljZT1pbWFnZXMmc3JjPWh0dHBzJTNBJTJGJTJGd29yZHByZXNzLmNyZWF0aXZlZ2lncy5uZXQlMkZkb2NseSUyRndwLWNvbnRlbnQlMkZ0aGVtZXMlMkZkb2NseSUyRmFzc2V0cyUyRmltZyUyRmhvbWVfb25lJTJGZmxvd2VyLnBuZyZjYWNoZU1hcmtlcj0xNjA5Njk4OTUxLTEyMDMmdG9rZW49Nzc0YmZkMjAyY2JiYzdlMQ.q.png" loading="lazy" class="p_absolute two wow fadeInUp" alt="Flower illustration"> <div class="container custom_container">
        <div class="breadcrumb_text text-center">
            <h2 class="text-center">
                {{ __('All Posts') }}</h2>
            </div>
    </div>
    </section>
    
    <div class="container py-5">
        <div class="row">
        <div class="col-lg-12">
        <div class="answer-action">
        <div class="action-content">
        <div class="image-wrap">
        <img src="https://wordpress.creativegigs.net/docly/wp-content/plugins/phastpress/phast.php/c2VydmljZT1pbWFnZXMmc3JjPWh0dHBzJTNBJTJGJTJGd29yZHByZXNzLmNyZWF0aXZlZ2lncy5uZXQlMkZkb2NseSUyRndwLWNvbnRlbnQlMkZ0aGVtZXMlMkZkb2NseSUyRmFzc2V0cyUyRmltZyUyRmZvcnVtJTJGYW5zd2VyLnBuZyZjYWNoZU1hcmtlcj0xNjA5Njk4OTUxLTM1MjUmdG9rZW49MmIzYjA5YzgwYjNmOWUzNw.q.png" loading="lazy" alt="Can’t find an answer?">
        </div>
        <div class="content">
        <h2 class="ans-title"> Want to add a post? </h2>
        <p>Add qualified information for better education world</p>
        </div>
        </div>
        <div class="action-button-container">
            <a href="{{ route('posts.create') }}" class="action_btn btn-ans">
                Create Post </a>
            </div>
            </div>
        </div>
        </div>

        @include ('layouts.alert')

        <div class="col-lg-12 support-category-menus">
            <table id="table-posts" class="table-striped" style="width:100%">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Title</th>
                        <th>Views Count</th>
                        <th>Comments Count</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($posts as $post)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $post->title }}</td>
                            <td>{{ $post->views }} views</td>
                            <td>{{ count($post->comments) }} comments</td>
                            <td>
                                @if (is_null($post->deleted_at))
                                <span class="badge badge-success">Active</span>
                                @else
                                <span class="badge badge-danger">Deleted</span>
                                @endif
                            </td>
                            <td>
                                @if (is_null($post->deleted_at))
                                <a href="{{ route('view-post', ['slug' => $post->slug]) }}" class="btn btn-sm btn-success">View</a>
                                <a href="{{ route('posts.edit', ['slug' => $post->slug]) }}" class="btn btn-sm btn-primary">Edit</a>
                                <a href="{{ route('posts.delete', ['slug' => $post->slug]) }}" class="btn btn-sm btn-danger">Delete</a>
                                @else
                                <a href="{{ route('posts.restore', ['slug' => $post->slug]) }}" class="btn btn-sm btn-primary">Restore</a>
                                <a href="{{ route('posts.force-delete', ['slug' => $post->slug]) }}" class="btn btn-sm btn-danger">Force Delete</a>
                                @endif
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        
    {{-- <div class="container py-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-md-6">
                                <h4>Post</h4>
                            </div>
                            <div class="col-md-6">
                                <a href="{{ route('posts.create') }}" class="btn btn-primary float-right">Create Post</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        @include ('layouts.alert')
                        <table id="table-posts" class="table-striped" style="width:100%">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Title</th>
                                    <th>Views Count</th>
                                    <th>Comments Count</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($posts as $post)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $post->title }}</td>
                                        <td>{{ $post->views }} views</td>
                                        <td>{{ count($post->comments) }} comments</td>
                                        <td>
                                            @if (is_null($post->deleted_at))
                                            <span class="badge badge-success">Active</span>
                                            @else
                                            <span class="badge badge-danger">Deleted</span>
                                            @endif
                                        </td>
                                        <td>
                                            @if (is_null($post->deleted_at))
                                            <a href="{{ route('view-post', ['slug' => $post->slug]) }}" class="btn btn-sm btn-success">View</a>
                                            <a href="{{ route('posts.edit', ['slug' => $post->slug]) }}" class="btn btn-sm btn-primary">Edit</a>
                                            <a href="{{ route('posts.delete', ['slug' => $post->slug]) }}" class="btn btn-sm btn-danger">Delete</a>
                                            @else
                                            <a href="{{ route('posts.restore', ['slug' => $post->slug]) }}" class="btn btn-sm btn-primary">Restore</a>
                                            <a href="{{ route('posts.force-delete', ['slug' => $post->slug]) }}" class="btn btn-sm btn-danger">Force Delete</a>
                                            @endif
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
@endsection
@section('script')
    <script>
        $(document).ready(function () {
            $('#table-posts').DataTable();
        });
    </script>
@endsection