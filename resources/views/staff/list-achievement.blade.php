@extends('layout.app')
@section('title', 'XI - List Achievement')
<link rel="stylesheet" href="/assets/css/list-achievement.css">

@section('content')

    <div class="achievement-create">
        <p>Buat/Tambahkan Achievement Disini</p>
        <div class="achievement-create-body">
            <a href="{{route('achievement.create')}}">Tambahkan Achievement</a>
        </div>
    </div>

    @foreach ($achievements as $achievement)
    <div class="table-container">
        <table class="table">
            <thead>
                <tr>
                    <th>GAMBAR</th>
                    <th>NAMA</th>
                    <th>TANGGAL</th>
                    <th>KEJUARAAN</th>
                    <th>URUTAN</th>
                    <th>EDIT/DELETE</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><img class="modal-target" src="/images/{{ $achievement->image }}" width="100px"></td>
                    <td>{{ $achievement->nama }}</td>
                    <td>{{ $achievement->tanggal }}</td>
                    <td>{{ $achievement->kejuaraan }}</td>
                    <td>{{ $achievement->urutan }}</td>
                    <td>
                        <form action="{{ route('achievement.destroy',$achievement->id) }}" method="POST">
              
                            <a class="list-achievement-edit-btn" href="{{ route('achievement.edit',$achievement->id) }}">Edit</a>
             
                            @csrf
                            @method('DELETE')
                
                            <button type="submit" class="list-achievement-delete-btn">Delete</button>
                        </form>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    @endforeach
@endsection