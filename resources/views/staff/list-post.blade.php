@extends('layout.app')
@section('title', 'XI - List Post')
<link rel="stylesheet" href="/assets/css/list-post.css">

@section('content')

<div class="post-create">
    <p>Buat/Tambahkan Postingan Disini</p>
    <div class="post-create-body">
        <a href="{{route('post.create')}}">Tambahkan Postingan</a>
    </div>
</div>

<div class="table-container">
    <table class="table">
        <thead>
            <tr>
                <th>GAMBAR</th>
                <th>TANGGAL</th>
                <th>JUDUL</th>
                <th>EDIT/DELETE</th>
            </tr>
        </thead>
        @foreach ($posts as $key => $post)
        <tbody>
            <tr>
                <td><img src="{{ asset('storage/images/'.$post->image) }}" class="card-post-img"></td>
                <td>{{ $post->date }}</td>
                <td>{{ $post->title }}</td>
                <td>
                    <a href="/post/{{$post->id}}/edit" class="list-gallery-edit-btn">Edit</a>
                    <form action="/post/{{$post->id}}" method="POST">
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