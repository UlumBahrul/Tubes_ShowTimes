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
  
  <article>
    <h2>{{ $post["title"] }}</h2>
    <h5>By. Bahrul ulum In <a href="#">{{ $post->category->name }}</a></h5>
    {{-- <h5>{{ $post["author"] }}</h5> --}}
  </article>

  <a href="/blog">Back to Posts</a>

  <!-- Comments Form-->
  <div>
    @livewire('posts.comment', ['id' => $post->id])
  </div>

@endsection