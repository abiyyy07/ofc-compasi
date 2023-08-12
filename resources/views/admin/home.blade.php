@extends('admin.layout')
@section('title', 'XI - Admin')

@section('content')
<div class="admin-welcome">
    <p>Selamat datang {{ Auth::user()->name }}</p>
</div>
@endsection