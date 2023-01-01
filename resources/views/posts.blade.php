@extends('layouts.main')
@section('container')

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
        <button class="btn btn-dark" type="submit">Search</button>
      </div>
    </form>
  </div>
</div>

  {{-- hero posts --}}
  @if ($posts->count())
    <div class="card mb-3">
      @if ($posts[0]->image)
      <a href="/posts/{{ $posts[0]->slug }}" class="text-decoration-none text-dark">
        <div style="max-height: 400px; overflow: hidden;">
          <img src="{{ asset('storage/' . $posts[0]->image) }}" alt="{{ $posts[0]->category->name }}" class="img-fluid" >
        </div>
      </a>
      @else
        <img src="https://source.unsplash.com/1200x400?{{ $posts[0]->category->name }} " class="card-img-top" alt="{{ $posts[0]->category->name }}">
      @endif
      
      {{-- <div class="card-body text-center"> --}}

        {{-- <p>
          <small class="text-muted">
            By. <a href="/posts?author={{ $posts[0]->author->username }}" class="text-decoration-none">{{ $posts[0]->author->name }}</a> in <a href="/posts?category={{ $posts[0]->category->slug }}" class="text-decoration-none">{{ $posts[0]->category->name }}</a> {{ $posts[0]->created_at->diffForHumans() }}
          </small>
        </p> --}}
        
      {{-- </div> --}}
    </div>

  {{-- body posts --}}
  <div class="container">
    <div class="row">
      @foreach ($posts->skip(1) as $post)
      <div class="col-md-4 mb-3">
        <div class="card" >
          <div class="position-absolute px-3 py-2" style="background-color: rgba(0,0,0,0.7)"><a href="/posts?category={{ $post->category->slug }}" class="text-white text-decoration-none">{{ $post->category->name }}</a> </div>
          @if ($post->image)
          <a href="/posts/{{ $post->slug }}">
            <div style="max-height: 400px; overflow: hidden;">
              <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->category->name }}" class="img-fluid" >  
            </div>
          </a>
          @else
            <img src="https://source.unsplash.com/500x400?{{ $post->category->name }}" class="card-img-top" alt="{{ $post->category->name }}">
          @endif
          {{-- <div class="card-body"> --}}

            {{-- <p>
              <small class="text-muted">
                By. <a href="/posts?author={{ $post->author->username }}" class="text-decoration-none">{{ $post->author->name }}</a>  {{ $post->created_at->diffForHumans() }}
              </small>
            </p> --}}

          {{-- </div> --}}
        </div>
      </div>
      @endforeach
    </div>
  </div>

  @else
    <p class="text-center fs-4" >No post found</p>
  @endif  

@endsection