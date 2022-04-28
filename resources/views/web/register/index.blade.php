@extends('web.layouts.extends')
@section('title', __('words.register'))
@section('description', setting('description'))
@section('keywords', setting('keywords'))
@include('web.register.script.script')
@section('content')
<section class="ec-page-content section-space-p">
    <div class="container">
        <div class="row">
            <div class="ec-login-wrapper">
                <div class="ec-login-container">
                    <div class="col-md-12 text-center">
                        <div class="section-title">
                            <h2 class="ec-bg-title custom-color-primary">@lang('words.join_now')</h2>
                            <p class="sub-title mb-3">@lang('words.join_now_text')</p>
                        </div>
                    </div>
                    <div class="ec-login-form">
                        <form>
                            <span class="ec-login-wrap">
                                <input type="text"  placeholder="@lang('words.name')" id="name" required/>
                            </span>
                            <span class="ec-login-wrap">
                                <input type="text"  placeholder="@lang('words.surname')" id="surname" required/>
                            </span>
                            <span class="ec-login-wrap">
                                <input type="email"  placeholder="@lang('words.email_adress')" id="email" required/>
                            </span>
                            <span class="ec-login-wrap">
                                <input type="password" placeholder="@lang('words.password')" id="password" required />
                            </span>
                            <span class="ec-login-wrap">
                                <input type="password" placeholder="@lang('words.repeat_password')" id="repeat" required />
                            </span>
                            <span class="ec-login-wrap mt-4">
                                <div class="form-check mb-3 d-flex ec-login-wrap-new">
                                    <input type="checkbox" id="check" class="mr-2">
                                    <label class="form-check-label text-center" for="check">
                                        @lang('words.accept_all_contracts')
                                    </label>
                                </div>
                            </span>
                            <span class="ec-login-wrap ec-login-btn">
                                <a id="add-to-register" class="btn btn-secondary">@lang('words.register')</a>
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