@extends('layouts.main')

@push('css')
      @livewireStyles
@endpush
@push('js')
      @livewireScripts
      <script>
        Livewire.on('comment_store', commentId => {
          var helloScroll = document.getElementById('comment-'+ commentId);
          helloScroll.scrollIntoView({behavior: 'smooth'},true);
        })
      </script>
@endpush

@section('container')
  
  <div class="container">
    <div class="row justify-content-center mb-5" >
      <div class="col-md-8 text-white ">
        <h2 class="mb-3">{{ $post->title }}</h2>
        
        <p>By. <a href="/posts?author={{ $post->author->username }}" class="text-decoration-none">{{ $post->author->name }}</a> in <a href="/posts?category={{ $post->category->slug }}" class="text-decoration-none">{{ $post->category->name }}</a></p>

        @if ($post->image)
          <div>
            <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->category->name }}" class="img-fluid" >
          </div>
        @else
          <img src="https://source.unsplash.com/1200x1200?{{ $post->category->name }}" alt="{{ $post->category->name }}" class="img-fluid mt-3" >
        @endif

        <a href="/posts">
          <button type="button" class="btn btn-secondary mt-4">Back to Posts</button>
        </a>
      </div>
    </div>
    
    <!-- Comments Form-->
    <div>
      @livewire('posts.comment', ['id' => $post->id])
    </div>
  </div>

@endsection