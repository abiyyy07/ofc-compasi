@extends('achievement.layout')
@section('title', 'XI - Achievement Add')

@role('staff')
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
<form action="{{ route('achievement.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
            <div class="form-create">
                <strong>Judul:</strong>
                <input type="text" name="nama" class="form-control" placeholder="Nama">
            </div>
            <div class="form-create">
                <strong>Tanggal:</strong>
                <textarea class="form-control" name="tanggal" placeholder="Tanggal"></textarea>
            </div>
            <div class="form-create">
                <strong>Nama Kejuaraan:</strong>
                <textarea class="form-control" name="kejuaraan" placeholder="Nama Kejuaraan"></textarea>
            </div>
            <div class="form-create">
                <strong>Urutan Juara:</strong>
                <textarea class="form-control" name="urutan" placeholder="Urutan ke berapa?"></textarea>
            </div>
            <div class="form-create">
                <strong>Image:</strong>
                <input type="file" name="image" class="form-control" placeholder="image">
            </div>
        <div class="form-button">
                <button type="submit" class="form-button-create">Submit</button>
        </div>
     
</form>
</div>

@endsection
@endrole