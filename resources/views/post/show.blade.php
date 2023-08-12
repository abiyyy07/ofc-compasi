@extends('post.layout')
@section('title', 'XI - Post')

@section('content')
<div class="show">
    <div class="show-wrapper">
      <div class="show-body">
        <img src="{{ asset('storage/images/'.$post->image) }}" class="show-img">
        <div class="show-body-wrapper">
          <div class="show-items">
            <p class="show-category">{{ $post->category }}</p>
            <p class="show-date">{{ $post->date }}</p>
            <p class="show-time-upload">{{ \Carbon\Carbon::parse($post->created_at)->diffForHumans() }}</p>
          </div>

          <hr>

          <h3 class="show-title">{{ $post->title }}</h3>
          <p class="show-content">{{ $post->content }}</p>
        </div>
        @role('staff')
        <div class="show-tools-button">
          <a href="/post/{{$post->id}}/edit" class="show-edit-button">Edit</a>
          <form action="/post/{{$post->id}}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit" class="show-delete-button">Delete</button>
          </form>
        </div>
        @endrole
      </div>
    </div>
  </div>
@endsection