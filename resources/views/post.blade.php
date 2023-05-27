@extends('layouts.main')
@section('container')

<div class="container">
  <div class="row mb-5 justify-content-center">
    <div class="col-md-8">
      <h1 class="mb-3">{{ $post->title }}</h1>      
      <p>By. <a href="/authors/{{ $post->author->username }}" class="text-decoration-none">{{ $post->author->name }}</a> in
        <a href="/categories/{{ $post->category->slug }}" class="text-decoration-none">{{ $post->category->name }}</a>
      </p>
      <img src="https://source.unsplash.com/WLUHO9A_xik/1200x400" class="img-fluid" alt="{{ $post->category->name }}">
      <article class="my-3 fs-5">
        {!! $post->body !!}
      </article>

      <a href="/posts" class="d-block mt-3">Back to posts</a>
    </div>
  </div>
</div>

  

@endsection