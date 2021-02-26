@extends('layouts.app')
@section('title', 'Login')

@section('content')
<div class="breadcrumb_area_three">
    <img src="https://wordpress.creativegigs.net/docly/wp-content/plugins/phastpress/phast.php/c2VydmljZT1pbWFnZXMmc3JjPWh0dHBzJTNBJTJGJTJGd29yZHByZXNzLmNyZWF0aXZlZ2lncy5uZXQlMkZkb2NseSUyRndwLWNvbnRlbnQlMkZ0aGVtZXMlMkZkb2NseSUyRmFzc2V0cyUyRmltZyUyRmxlYWZfbGVmdC5wbmcmY2FjaGVNYXJrZXI9MTYwOTY5ODk1MS0xMzU4MiZ0b2tlbj0wZWIzYTQxZTI1OTc5NWRj.q.png" loading="lazy" class="p_absolute one" alt="leaf left"><img src="https://wordpress.creativegigs.net/docly/wp-content/plugins/phastpress/phast.php/c2VydmljZT1pbWFnZXMmc3JjPWh0dHBzJTNBJTJGJTJGd29yZHByZXNzLmNyZWF0aXZlZ2lncy5uZXQlMkZkb2NseSUyRndwLWNvbnRlbnQlMkZ0aGVtZXMlMkZkb2NseSUyRmFzc2V0cyUyRmltZyUyRmxlYWZfcmlnaHQucG5nJmNhY2hlTWFya2VyPTE2MDk2OTg5NTEtMTEwNzEmdG9rZW49Mjc3NTZlZDZhNzBkMDU4OQ.q.png" loading="lazy" class="p_absolute four" alt="leaf right"> <div class="container">
        <div class="breadcrumb_text text-center">
    <h2 class="text-center">
        {{ __('Login to Continue') }}</h2>
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
                <a> Login </a>
            </li>
        </ol>
    </nav>
</div>
</div>
</section>
        
{{-- Content --}}
    <div class="sec_pad page_wrapper">
        <div class="container">
    <div id="bbpress-forums" class="bbpress-wrapper">
        <form method="POST" action="{{ route('login') }}" class="bbp-login-form">
        @csrf
        <fieldset class="bbp-form">
            {{-- <legend>Log In</legend> --}}
            <div class="bbp-username">
                <label for="email">{{ __('E-Mail Address') }}</label>
                    <input id="email" type="text" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus >
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                <div class="bbp-password">
                    <label for="password">{{ __('Password') }}</label>
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                </div>
                <div class="bbp-remember-me">
                    <input class="checkbox-tik" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                    <label class="form-check-label" for="remember">
                                        {{ __('Keep me signed in') }}
                                    </label>
                                    <div class="bbp-submit-wrapper">
                                        <button type="submit" name="user-submit" id="user-submit" class="button submit user-submit">{{ __('Login') }}</button>
                                        <input type="hidden" name="user-cookie" value="1" />
                                        <input type="hidden" id="bbp_redirect_to" name="redirect_to" value="https://wordpress.creativegigs.net/docly/ask-question/" />
                                        <input type="hidden" id="_wpnonce" name="_wpnonce" value="552303dbc4" />
                                        <input type="hidden" name="_wp_http_referer" value="/docly/ask-question/" />
                                        @if (Route::has('password.request'))
                                                        <a class="btn btn-link" href="{{ route('password.request') }}">
                                                            {{ __('Forgot Your Password?') }}
                                                        </a>
                                                        @endif
                                                    </div>
                                            </fieldset>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endsection