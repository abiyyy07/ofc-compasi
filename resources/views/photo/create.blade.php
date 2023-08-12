@extends('photo.layout')
@section('title', 'XI - Photo Add')

@section('content')

@if ($errors->any())
<div class="alert alert-danger">
    <strong>Whoops!</strong> There were some problems with your input.<br><br>
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

@csrf

<div class="create-body">
<form action="{{ route('photo.store') }}" method="POST" enctype="multipart/form-data">
    @csrf

    <div class="form-create">
        <div class="form-group">
            <p>Judul:</p>
            <input type="text" name="title" class="form-control" placeholder="Judul">
        </div>
    </div>
    <div class="form-create">
        <div class="form-group">
            <p>Tanggal:</p>
            <input type="text" name="date" class="form-control" placeholder="Tanggal">
        </div>
    </div>
    <div class="form-create">
        <div class="form-group">
            <p>Image:</p>
            <input type="file" name="image" class="form-control" placeholder="image">
        </div>
    </div>
    <div class="form-button">
            <button type="submit" class="form-button-create">Submit</button>
    </div>
</div>
     
</form>
@endsection