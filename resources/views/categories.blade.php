@extends('layouts.main')
@section('container')
  <h1 class="mb-5">Categories</h1>

  <div class="row">
    @foreach ($categories as $category)
    <div class="col-md-4">
      <a href="/posts?category={{ $category->slug  }}">
        <div class=" card bg-dark text-white pt-3 pb-2">
          <h5 class="text-center fs-5">{{ $category->name }}</h5>
        </div>
      </a>
    </div>
    @endforeach
  </div>
@endsection