@extends('layouts.app')
@section('title', 'Verify Your Email Address')

@section('content')
<div class="breadcrumb_area_three">
    <img src="https://wordpress.creativegigs.net/docly/wp-content/plugins/phastpress/phast.php/c2VydmljZT1pbWFnZXMmc3JjPWh0dHBzJTNBJTJGJTJGd29yZHByZXNzLmNyZWF0aXZlZ2lncy5uZXQlMkZkb2NseSUyRndwLWNvbnRlbnQlMkZ0aGVtZXMlMkZkb2NseSUyRmFzc2V0cyUyRmltZyUyRmxlYWZfbGVmdC5wbmcmY2FjaGVNYXJrZXI9MTYwOTY5ODk1MS0xMzU4MiZ0b2tlbj0wZWIzYTQxZTI1OTc5NWRj.q.png" loading="lazy" class="p_absolute one" alt="leaf left"><img src="https://wordpress.creativegigs.net/docly/wp-content/plugins/phastpress/phast.php/c2VydmljZT1pbWFnZXMmc3JjPWh0dHBzJTNBJTJGJTJGd29yZHByZXNzLmNyZWF0aXZlZ2lncy5uZXQlMkZkb2NseSUyRndwLWNvbnRlbnQlMkZ0aGVtZXMlMkZkb2NseSUyRmFzc2V0cyUyRmltZyUyRmxlYWZfcmlnaHQucG5nJmNhY2hlTWFya2VyPTE2MDk2OTg5NTEtMTEwNzEmdG9rZW49Mjc3NTZlZDZhNzBkMDU4OQ.q.png" loading="lazy" class="p_absolute four" alt="leaf right"> <div class="container">
    <div class="breadcrumb_text text-center">
    <h2 class="text-center">
        {{ __('Verify Your Email Address') }}</h2>
    </div>
    </div>
    </div>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            {{-- <div class="card">
                <div class="card-header">{{ __('Verify Your Email Address') }}</div> --}}

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('A fresh verification link has been sent to your email address.') }}
                        </div>
                    @endif

                    {{ __('Before proceeding, please check your email for a verification link.') }}
                    {{ __('If you did not receive the email') }}, <a href="{{ route('verification.resend') }}">{{ __('click here to request another') }}</a>.
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
