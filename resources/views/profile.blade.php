@extends('layouts.app')
@section('title', "{$user->name}")

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
                {{ __('Edit Profile') }}</h2>
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
                            <h2 class="ans-title"> Want to change your password? </h2>
                            <p>Make sure that you remember the old password when making changes to the password</p>
                        </div>
                    </div>
                    <div class="action-button-container">
                        <a href="{{ route('change-password') }}" class="action_btn btn-ans">
                        Change Password </a>
                        </div>
                    </div>
                    <div class="card m-5">
                        <div class="card-header">Profile</div>
                        
                        <div class="card-body">
                            @include ('layouts.alert')
        
                            {{ Form::model($user, ['route' => 'update-profile', 'enctype' => 'multipart/form-data', 'method' => 'patch']) }}
                                <img src="{{ asset('storage/images/' . $user->avatar) }}" class="p-3" style="width:150px;height:150px;" alt="">
                                <div class="form-group">
                                    {{ Form::label('avatar', 'Change Avatar') }}
                                    {{ Form::file('avatar', ['class' => 'form-control']) }}
                                    @error('avatar')
                                        <span class="text-danger" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    {{ Form::label('name', 'Name') }}
                                    {{ Form::text('name', null, ['class' => 'form-control', 'autofocus']) }}
                                    @error('name')
                                        <span class="text-danger" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    {{ Form::label('address', 'Address') }}
                                    {{ Form::text('address', null, ['class' => 'form-control']) }}
                                    @error('address')
                                        <span class="text-danger" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    {{ Form::label('email', 'Email') }}
                                    {{ Form::email('email', null, ['class' => 'form-control', 'readonly']) }}
                                </div>
                                {{ Form::submit('Save', ['class' => 'btn btn-primary']) }}
                            {{ Form::close() }}
                        </div>
                    </div>
                </div>
            </div>
    
{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card m-5">
                <div class="card-header">Profile</div>
                
                <div class="card-body">
                    @include ('layouts.alert')

                    {{ Form::model($user, ['route' => 'update-profile', 'enctype' => 'multipart/form-data', 'method' => 'patch']) }}
                        <img src="{{ asset('storage/images/' . $user->avatar) }}" class="p-3" style="width:150px;height:150px;" alt="">
                        <div class="form-group">
                            {{ Form::label('avatar', 'Change Avatar') }}
                            {{ Form::file('avatar', ['class' => 'form-control']) }}
                            @error('avatar')
                                <span class="text-danger" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            {{ Form::label('name', 'Name') }}
                            {{ Form::text('name', null, ['class' => 'form-control', 'autofocus']) }}
                            @error('name')
                                <span class="text-danger" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            {{ Form::label('address', 'Address') }}
                            {{ Form::text('address', null, ['class' => 'form-control']) }}
                            @error('address')
                                <span class="text-danger" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            {{ Form::label('email', 'Email') }}
                            {{ Form::email('email', null, ['class' => 'form-control', 'readonly']) }}
                        </div>
                        {{ Form::submit('Save', ['class' => 'btn btn-primary']) }}
                    {{ Form::close() }}
                </div>
            </div>
        </div>
    </div>
</div> --}}
@endsection