@extends('layouts.main')
@section('container')

<div class="header_section mb-5">
    <div class="header_left">
        <div class="banner_main">
            <h1 class="banner_taital">IT'S SHOW TIME</h1>
            <p class="banner_text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever </p>
            <div class="btn_main">
                <div class="more_bt"><a href="#">Read More </a></div>
                <div class="contact_bt"><a href="#">Contact Us</a></div>
            </div>
        </div>
    </div>
    <div class="header_right">
        <img src="/img/logo.png" class="banner_img">
    </div>
</div>

<div class="body ">
        @foreach ($posts as $post)
        <article>
            <h2>{{ $post->title }}</h2>
        </article>
    @endforeach
</div>
@endsection