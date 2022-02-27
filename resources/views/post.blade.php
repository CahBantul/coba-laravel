@extends('layouts.main')

@section('container')

  <div class="container">
    <div class="row justify-content-center mb-5">
      <div class="col-md-8">
          <h1 class="mb-3">  {{ $post->title }}</h1>

          <p>By <a href="/author/{{ $post->author->username }}" class="text-decoration-none"> {{ $post->author->name }} </a> in <a href="/category/{{ $post->category->slug }}"> {{ $post->category->name }} </a></p>

          <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}" class="img-fluid" alt="{{ $post->category->name }}">

          <article class="my-5 fs-5">
          {!! $post->body !!}
          <a href="/blog" class="d-block mt-4">kembali ke blog</a>
        </article>
      </div>
    </div>
  </div>
 
     
@endsection