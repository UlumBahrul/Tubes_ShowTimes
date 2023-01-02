@extends('layouts.main')
@section('container')
  <h1 class="mb-5">Post Categories</h1>

  <div class="row">
  @foreach ($categories as $category)
  <div class="col">
    <a href="/posts?category={{ $category->slug  }}">
    
        <div class=" card text-bg-dark p-3 mb-2">
            <h5>{{ $category->name }}</h5>
        </div>
    
    </a>
  </div>
  @endforeach
</div>
{{-- body posts --}}
{{-- <div class="container">
  <div class="row">
    @foreach ($posts->skip(1) as $post)
    <div class="col-md-4 mb-3">
      <div class="card" >
        <div class="position-absolute px-3 py-2" style="background-color: rgba(0,0,0,0.7)"><a href="/posts?category={{ $post->category->slug }}" class="text-white text-decoration-none">{{ $post->category->name }}</a> </div>
        @if ($post->image)
          <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->category->name }}" class="img-fluid" >
        @else
          <img src="https://source.unsplash.com/500x400?{{ $post->category->name }}" class="card-img-top" alt="{{ $post->category->name }}">
        @endif
        <div class="card-body">
          <h5 class="card-title">{{ $post->title }}</h5>

          <p>
            <small class="text-muted">
              By. <a href="/posts?author={{ $post->author->username }}" class="text-decoration-none">{{ $post->author->name }}</a>  {{ $post->created_at->diffForHumans() }}
            </small>
          </p>
          
          <p class="card-text">{{ $post->excerpt }}</p>
          
          <a href="/posts/{{ $post->slug }}" class="btn btn-primary">Read more</a>
        </div>
      </div>
    </div>
    @endforeach
  </div>
</div> --}}
@endsection