@extends('layout.app')
@section('title', 'XI - List Gallery')
<link rel="stylesheet" href="/assets/css/list-gallery.css">

@section('content')

<div class="gallery-create">
    <p>Buat/Tambahkan Gambar Disini</p>
    <div class="gallery-create-body">
        <a href="{{route('photo.create')}}">Tambahkan Gambar</a>
    </div>
</div>

@foreach ($photos as $photo)
<div class="table-container">
    <table class="table">
        <thead>
            <tr>
                <th>GAMBAR</th>
                <th>TANGGAL</th>
                <th>EDIT/DELETE</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><img class="modal-target" src="/images/{{ $photo->image }}" width="100px"></td>
                <td>{{ $photo->date }}</td>
                <td>
                    <form action="{{ route('photo.destroy',$photo->id) }}" method="POST">
          
                        <a class="list-gallery-edit-btn" href="{{ route('photo.edit',$photo->id) }}">Edit</a>
         
                        @csrf
                        @method('DELETE')
            
                        <button type="submit" class="list-gallery-delete-btn">Delete</button>
                    </form>
                </td>
            </tr>
        </tbody>
    </table>
</div>
@endforeach

@endsection