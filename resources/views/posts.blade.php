@extends('layouts.main')
@section('container')

<h1 class="mb-3 text-center">{{ $title }}</h1>

{{-- form pencarian --}}
<div class="row justify-content-center mb-3">
  <div class="col-md-6">
    <form action="/posts" >
      @if (request('category'))
        <input type="hidden" name="category" value="{{ request('category') }}">
      @endif
      @if (request('author'))
        <input type="hidden" name="author" value="{{ request('author') }}">
      @endif
      <div class="input-group mb-3">
        <input type="text" class="form-control" placeholder="Search..." name="search" value="{{ request('search') }}">
        <button class="btn btn-secondary" type="submit">Search</button>
      </div>
    </form>
  </div>
</div>

  {{-- hero posts --}}
  @if ($posts->count())
    <div class="card mb-3">
      <a href="/posts?author={{ $posts[0]->author->username }}" class=" text-white text-decoration-none">
        <small>
          <div class="position-absolute px-2 py-1" style="background-color: rgba(0,0,0,0.5)"> By. {{ $posts[0]->author->name }}</div>
        </small>
      </a>
      @if ($posts[0]->image)
      <a href="/posts/{{ $posts[0]->slug }}" class="text-decoration-none text-dark">
        <div style="max-height: 400px; overflow: hidden;">
          <img src="{{ asset('storage/' . $posts[0]->image) }}" alt="{{ $posts[0]->category->name }}" class="img-fluid" >
        </div>
      </a>
      @else
      <a href="/posts/{{ $posts[0]->slug }}" class="text-decoration-none text-dark">
        <img src="https://source.unsplash.com/1200x400?{{ $posts[0]->category->name }} " class="card-img-top" alt="{{ $posts[0]->category->name }}">
      </a>
      @endif
    </div>

  {{-- body posts --}}
  <div class="container">
    <div class="row">
      @foreach ($posts->skip(1) as $post)
      <div class="col-md-4 mb-3">
        <div class="card" >
          <a href="/posts?author={{ $post->author->username }}" class=" text-white text-decoration-none">
            <small>
              <div class="position-absolute px-2 py-1" style="background-color: rgba(0,0,0,0.5)"> By. {{ $post->author->name }}</div>
            </small>
            </a>
          @if ($post->image)
          <a href="/posts/{{ $post->slug }}">
            <div style="max-height: 325px; overflow:hidden;">
              <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->category->name }}" class="img-fluid" >  
            </div>
          </a>
          @else
          <a href="/posts/{{ $post->slug }}">
            <img src="https://source.unsplash.com/500x400?{{ $post->category->name }}" class="card-img-top" alt="{{ $post->category->name }}">
          </a>
          @endif
        </div>
      </div>
      @endforeach
    </div>
  </div>

  @else
    <p class="text-center fs-4 text-white" >No post found</p>
  @endif  

  <div  class="d-flex justify-content-center">
    {{ $posts->links() }}
  </div>

@endsection