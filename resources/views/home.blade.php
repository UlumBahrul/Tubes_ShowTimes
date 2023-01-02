@extends('layouts.main')
@section('container')

<div class="header_section mb-5">
  <div class="header_left">
      <div class="banner_main">
          <h1 class="banner_taital " >IT'S SHOW TIME</h1>
          <p class="banner_text">Hi, Welcome to gallery
            This gallery is a place that serves to present and exhibit works of art to be communicated to the wider community. </p>
          <div class="btn_main">
              <div class="more_bt"><a href="/blog" class="btn btn-white text-light">See More </a></div>
          </div>
      </div>
  </div>
  <div class="header_right">
      <img src="/img/logo.png" class="banner_img ">
  </div>
</div>

{{-- body post --}}
{{-- <div class="body ">
  @foreach ($posts as $post)
  <article>
    <h2>{{ $post->title }}</h2>
  </article>
  @endforeach
</div> --}}

@endsection