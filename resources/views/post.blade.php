@extends('layouts.main')
@section('container')
  
  <article>
    <h2>{{ $post["title"] }}</h2>
    <h5>{{ $post["author"] }}</h5>
  </article>

  <a href="/blog">Back to Posts</a>
@endsection