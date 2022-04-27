@extends('web.layouts.extends')
@section('title', '500')
@section('content')
<section class="error-part">
    <div class="container">
        <h1>500</h1>
        <h3>@lang('words.500_error_title')</h3>
        <p>@lang('words.500_error_content',['email'=>setting('mail')])</p>
        <a href="{{ route('web.index') }}">@lang('words.go_to_shopping')</a>
    </div>
</section>
@endsection