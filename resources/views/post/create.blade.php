@extends('post.layout')
@section('title', 'XI - Post')
<link rel="stylesheet" href="/assets/css/post.css">

@role('staff')
@section('content')
<div class="create-body">
    <form action="/post" method="POST" enctype="multipart/form-data">
      @csrf
      <div class="form-create">
        <input type="text" name="title" id="title" class="form-control @error('title') is-invalid @enderror" placeholder="Judul" value="{{ old('title') }}">
        @error('title')
          <div class="invalid-feedback">{{ $message }}</div>
        @enderror
      </div>

      <div class="form-create">
        <input type="text" name="category" id="category" class="form-control @error('category') is-invalid @enderror" placeholder="Category/Hastag" value="{{ old('category') }}">
        @error('category')
          <div class="invalid-feedback">{{ $message }}</div>
        @enderror
      </div>

      <div class="form-create">
        <input type="text" name="date" id="date" class="form-control @error('date') is-invalid @enderror" placeholder="Tanggal" value="{{ old('date') }}">
        @error('date')
          <div class="invalid-feedback">{{ $message }}</div>
        @enderror
      </div>

      <div class="form-create">
        <input type="file" name="file" id="file" accept="image/*" class="form-control @error('file') is-invalid @enderror">
        @error('file')
          <div class="invalid-feedback">{{ $message }}</div>
        @enderror
      </div>

      <div class="form-create">
        <textarea name="content" id="content" rows="6" class="form-control @error('content') is-invalid @enderror" placeholder="Deskripsi">{{ old('content') }}</textarea>
        @error('content')
          <div class="invalid-feedback">{{ $message }}</div>
        @enderror
      </div>

      <div class="form-button">
        <input type="submit" value="Add Post" class="form-button-create">
      </div>
    </form>
</div>
@endsection
@endrole