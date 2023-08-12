@extends('staff.layout')
@section('title', 'XI - Staff')

@section('content')
<div class="home-staff-welcome">
    <p>Selamat Datang {{ Auth::user()->name }}</p>
</div>
@endsection