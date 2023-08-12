@extends('achievement.layout')
@section('title', 'XI - Achievement')

@section('content')
<div class="edit-body">
    <form action="/achievement/{{ $achievement->id }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-edit">
            <input type="text" name="nama" id="nama" class="form-control" placeholder="Nama" value="{{ $achievement->nama }}" required>
        </div>

        <div class="form-edit">
            <input type="text" name="tanggal" id="tanggal" class="form-control" placeholder="Tanggal" value="{{ $achievement->tanggal }}" required>
        </div>

        <div class="form-edit">
            <input type="text" name="kejuaraan" id="kejuaraan" class="form-control" placeholder="Kejuaraan" value="{{ $achievement->kejuaraan }}" required>
        </div>

        <div class="form-edit">
            <input type="text" name="urutan" id="urutan" class="form-control" placeholder="Urutan" value="{{ $achievement->urutan }}" required>
        </div>

        <div class="form-edit">
            <input type="file" name="file" id="file" accept="image/*" class="form-control">
        </div>

        <img src="{{ asset('storage/images/'.$achievement->image) }}" class="img-fluid img-thumbnail" width="150">

        <div class="form-button">
            <input type="submit" value="Update Achievement" class="form-button-edit">
        </div>
    </form>
  </div>
@endsection