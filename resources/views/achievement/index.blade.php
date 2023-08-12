@extends('achievement.layout')
@section('title', 'XI - Achievement')

@section('content')
    
@if ($message = Session::get('success'))
<div class="alert-success">
    <p>{{ $message }}</p>
</div>
@endif

<div class="card">
    @foreach ($achievements as $achievement)
        <div class="card-achievement">
            <div class="card-achievement-body">
                <div class="card-achievement-image">
                    <img src="/images/{{ $achievement->image }}" >
                    <p class="achievement-nama">{{ $achievement->nama }}</p>
                    <p>{{ $achievement->tanggal }}</p>
                    <p>{{ $achievement->kejuaraan }}</p>
                    <p>{{ $achievement->urutan }}</p>
                </div>
            </div>
        </div>
    @endforeach
</div>


@endsection