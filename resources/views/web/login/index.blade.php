@extends('web.layouts.extends')
@section('title', __('words.login'))
@section('description', setting('description'))
@section('keywords', setting('keywords'))
@include('web.login.script.script')
@section('content')
<section class="ec-page-content section-space-p">
    <div class="container">
        <div class="row">
            <div class="ec-login-wrapper">
                <div class="ec-login-container">
                    <div class="col-md-12 text-center">
                        <div class="section-title">
                            <h2 class="ec-bg-title custom-color-primary">@lang('words.welcome')</h2>
                            <p class="sub-title mb-3">@lang('words.welcome_text')</p>
                        </div>
                    </div>
                    <div class="ec-login-form">
                        <form>
                            <span class="ec-login-wrap">
                                <input type="text"  placeholder="@lang('words.email_adress')" id="email" required/>
                            </span>
                            <span class="ec-login-wrap">
                                <input type="password" name="password" placeholder="@lang('words.password')" id="password" required />
                            </span>
                            <span class="ec-login-wrap ec-login-btn">
                                <a class="btn btn-primary" id="add-to-login">@lang('words.login')</a>
                                <a href="{{ route('web.user.register.index') }}" class="btn btn-secondary">@lang('words.register')</a>
                            </span>
                            <span class="ec-login-wrap ec-login-fp mt-4 text-center">
                                <label><a href="{{ route('web.forgot.password.index') }}">@lang('words.forgot_your_password')</a></label>
                            </span>
                        </form>
                    </div>
                </div>
                @if (setting('oauth'))
                    <div class="ec-login-container mt-3">
                        <div class="ec-login-form">
                                <span class="ec-login-wrap ec-login-btn mb-3">
                                    <a class="btn btn-primary" href="{{ route('web.user.oauth.facebook.index') }}">@lang('words.login_with_facebook')</a>
                                    <a href="{{ route('web.user.oauth.google.index') }}" class="btn btn-secondary">@lang('words.login_with_google')</a>
                                </span>
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </div>
</section>
@endsection