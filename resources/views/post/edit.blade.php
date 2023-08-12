@extends('post.layout')
@section('title', 'XI - Edit')

@role('staff')
@section('content')
<div class="edit-body">
    <form action="/post/{{ $post->id }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-edit">
            <input type="text" name="title" id="title" class="form-control" placeholder="Title" value="{{ $post->title }}" required>
        </div>

        <div class="form-edit">
            <input type="text" name="category" id="category" class="form-control" placeholder="Category" value="{{ $post->category }}" required>
        </div>

        <div class="form-edit">
            <input type="text" name="date" id="date" class="form-control" placeholder="Tanggal" value="{{ $post->date }}" required>
        </div>

        <div class="form-edit">
            <input type="file" name="file" id="file" accept="image/*" class="form-control">
        </div>

        <img src="{{ asset('storage/images/'.$post->image) }}" class="img-fluid img-thumbnail" width="150">

        <div class="form-edit">
            <textarea name="content" id="content" rows="6" class="form-control" placeholder="Post Content" required>{{ $post->content }}</textarea>
        </div>

        <div class="form-button">
            <input type="submit" value="Update Post" class="form-button-edit">
        </div>
    </form>
  </div>
@endsection
@endrole