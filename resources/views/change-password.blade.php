@extends('layouts.app')
@section('title', 'Change Password')

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
                {{ __('Change Password') }}</h2>
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
                                <a href="{{route ('profile')}}"> Profile </a>
                            </li>
                            <li class="breadcrumb-item">
                                <a href="{{route ('change-password')}}"> Change Password </a>
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section>
        
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card-body">
                @include ('layouts.alert')
                {{ Form::model($user, ['route' => 'change-password', 'method' => 'patch']) }}
                    <div class="form-group">
                        {{ Form::label('old_password', 'Old Password') }}
                        {{ Form::password('old_password', ['class' => 'form-control', 'autofocus']) }}
                        @error('old_password')
                            <span class="text-danger" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        {{ Form::label('new_password', 'New Password') }}
                        {{ Form::password('new_password', ['class' => 'form-control']) }}
                        @error('new_password')
                            <span class="text-danger" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        {{ Form::label('new_password_confirmation', 'Confirmation New Password') }}
                        {{ Form::password('new_password_confirmation', ['class' => 'form-control']) }}
                    </div>
                    {{ Form::submit('Change Password', ['class' => 'btn btn-primary']) }}
                {{ Form::close() }}
            </div>
        </div>
    </div>
</div>
@endsection