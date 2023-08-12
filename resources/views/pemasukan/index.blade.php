@extends('pemasukan.layout')
@section('title', 'XI - Pemasukan')

@section('content')

<div class="allert-succes">
    @if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
    @endif
</div>

<div class="back-to-last-page">
    <a href="/staff/keuangan">Kembali Ke Halaman Sebelumnya</a>
</div>

@endsection