@extends('web.layouts.extends')
@section('title')
    @lang('words.forgot_your_password')
@endsection
@section('content')
<section class="ec-page-content section-space-p">
    <div class="container">
        <div class="row">
            <div class="ec-login-wrapper">
                <div class="ec-login-container">
                    <div class="col-md-12 text-center">
                        <div class="section-title">
                            <h2 class="ec-bg-title custom-color-primary">@lang('words.forgot_your_password')</h2>
                            <p class="sub-title mb-3">@lang('words.forgot_password_p')</p>
                        </div>
                    </div>
                    <div class="ec-login-form">
                        <form method="POST" action="{{ route('web.forgot.password.store') }}">
                            @csrf
                            <span class="ec-login-wrap">
                                <input type="email"  placeholder="@lang('words.email_adress')" name="email" required/>
                            </span>
                            <span class="ec-login-wrap ec-login-fp mt-4 text-center">
                                <button type="submit" class="btn btn-secondary">@lang('words.send')</button>
                            </span>
                            <span class="ec-login-wrap ec-login-fp mt-4 text-center">
                                <label><a href="{{ route('web.user.login.index') }}">@lang('words.already_have_an_account')</a></label>
                            </span>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection