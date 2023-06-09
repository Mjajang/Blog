@extends('dashboard.layouts.main')
@section('container')
<div class="container">
  <div class="row my-3">
    <div class="col-lg-8">
      <a href="/dashboard/posts" class="btn btn-success"><span data-feather="arrow-left"></span> Back to all my posts</a>
      <a href="/dashboard/posts/{{ $post->slug }}/edit" class="btn btn-warning"><span data-feather="edit"></span> Edit</a>
      <form class="d-inline" action="/dashboard/posts/{{ $post->slug }}" method="post">
        @method('delete')  
        @csrf
        <button type="submit" class="btn btn-danger border-0" onclick="return confirm('Are you sure?')">
          <span data-feather="x-circle"></span>Delete</button>
      </form>
      {{-- <a href="" class="btn btn-danger"><span data-feather="x-circle"></span> Delete</a> --}}
      @if ($post->image)
      <div style="max-height:350px; overflow:hidden; ">
        <img src="{{ asset('storage/'. $post->image) }}" class="img-fluid mt-3" alt="{{ $post->category->name }}">
      </div>
      @else
      <img src="https://source.unsplash.com/WLUHO9A_xik/1200x400" class="img-fluid mt-3" alt="{{ $post->category->name }}">
      @endif
      <article class="my-3 fs-5">
        {!! $post->body !!}
      </article>
    </div>
  </div>
</div>

@endsection