@extends('post.layout')
@section('title', 'XI - Post')

@section('content')
@if(session('message'))
<div class="alert alert-{{ session('status') }} alert-dismissible fade show" role="alert">
  <strong>{{ session('message') }}</strong>
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif
<div class="card">
  @forelse($posts as $key => $post)
  <div class="card-post">

      <div class="card-post-wrapper">
        <a href="post/{{ $post->id }}">
          <img src="{{ asset('storage/images/'.$post->image) }}" class="card-post-img">
        </a>
        <div class="card-body">
          <p class="post-category">{{ $post->category }}</p>
          <p class="post-date">{{ $post->date }}</p>
          <div class="post-title">{{ $post->title }}</div>
          <p class="post-content">{{ Str::limit($post->content, 17) }}</p>
        </div>
      </div>

  </div>
  @empty
    <h2 class="text-center text-secondary p-4">No post found in the database!</h2>
  @endforelse
  <div class="d-flex justify-content-center my-5">
    {{ $posts->onEachSide(1)->links() }}
  </div>

</div>
@endsection