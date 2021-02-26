@extends('layouts.app')
@section('title', 'Register')

@section('content')
<div class="breadcrumb_area_three">
    <img src="https://wordpress.creativegigs.net/docly/wp-content/plugins/phastpress/phast.php/c2VydmljZT1pbWFnZXMmc3JjPWh0dHBzJTNBJTJGJTJGd29yZHByZXNzLmNyZWF0aXZlZ2lncy5uZXQlMkZkb2NseSUyRndwLWNvbnRlbnQlMkZ0aGVtZXMlMkZkb2NseSUyRmFzc2V0cyUyRmltZyUyRmxlYWZfbGVmdC5wbmcmY2FjaGVNYXJrZXI9MTYwOTY5ODk1MS0xMzU4MiZ0b2tlbj0wZWIzYTQxZTI1OTc5NWRj.q.png" loading="lazy" class="p_absolute one" alt="leaf left"><img src="https://wordpress.creativegigs.net/docly/wp-content/plugins/phastpress/phast.php/c2VydmljZT1pbWFnZXMmc3JjPWh0dHBzJTNBJTJGJTJGd29yZHByZXNzLmNyZWF0aXZlZ2lncy5uZXQlMkZkb2NseSUyRndwLWNvbnRlbnQlMkZ0aGVtZXMlMkZkb2NseSUyRmFzc2V0cyUyRmltZyUyRmxlYWZfcmlnaHQucG5nJmNhY2hlTWFya2VyPTE2MDk2OTg5NTEtMTEwNzEmdG9rZW49Mjc3NTZlZDZhNzBkMDU4OQ.q.png" loading="lazy" class="p_absolute four" alt="leaf right"> <div class="container">
        <div class="breadcrumb_text text-center">
    <h2 class="text-center">
        {{ __('Create your Account') }}</h2>
    </div>
    </div>
</div>

<section class="page_breadcrumb">
        <div class="container">
            <div class="row">
                <div class="col-sm-8 col-md-9">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                <a href="{{route ('homepage')}}"> Landing Page </a>
            </li>
            <li class="breadcrumb-item">
                <a> Register </a>
            </li>
        </ol>
    </nav>
        </div>
    </div>
        </section>

        {{-- FORM REGISTER --}}
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    {{-- <div class="card"> --}}
                        {{-- <div class="card-header">{{ __('Register') }}</div> --}}
                        
                        <div class="card-body">
                            {{ Form::open(['method' => 'post', 'route' => 'register']) }}
                            <div class="form-group row">
                                    {{ Form::label('name', 'Name', ['class' => 'col-md-4 col-form-label text-md-right']) }}
                                    <div class="col-md-6">
                                        {{ Form::text('name', null, ['class' => 'form-control', 'autofocus']) }}
                                        @error('name')
                                            <span class="text-danger" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                </div>
                                <div class="form-group row">
                                    {{ Form::label('email', 'E-Mail Address', ['class' => 'col-md-4 col-form-label text-md-right']) }}
                                    <div class="col-md-6">
                                        {{ Form::email('email', null, ['class' => 'form-control']) }}
                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    {{ Form::label('address', 'Address', ['class' => 'col-md-4 col-form-label text-md-right']) }}
                                    <div class="col-md-6">
                                        {{ Form::text('address', null, ['class' => 'form-control']) }}
                                        @error('address')
                                        <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    {{ Form::label('password', 'Password', ['class' => 'col-md-4 col-form-label text-md-right']) }}
                                    <div class="col-md-6">
                                        {{ Form::password('password', ['class' => 'form-control']) }}
                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    {{ Form::label('password_confirmation', 'Confirm Password', ['class' => 'col-md-4 col-form-label text-md-right']) }}
                                    <div class="col-md-6">
                                        {{ Form::password('password_confirmation', ['class' => 'form-control']) }}
                                    </div>
                                </div>
                                <div class="form-group row mb-0">
                                    <div class="col-md-6 offset-md-4">
                                        {{ Form::submit('Create an Account', ['class' => 'btn btn-primary']) }}
                                    </div>
                                </div>
                                {{ Form::close() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endsection
