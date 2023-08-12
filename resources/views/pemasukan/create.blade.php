@extends('pemasukan.layout')
@section('title', 'XI - Pemasukan')

@role('staff')
@section('content')
<div class="create-body">
    <form action="/pemasukan" method="POST" enctype="multipart/form-data">
      @csrf
      <div class="form-create">
        <input type="text" name="tanggal" id="tanggal" class="form-control @error('tanggal') is-invalid @enderror" placeholder="Tanggal" value="{{ old('tanggal') }}">
        @error('tanggal')
          <div class="invalid-feedback">{{ $message }}</div>
        @enderror
      </div>

      <div class="form-create">
        <input type="text" name="note" id="note" class="form-control @error('note') is-invalid @enderror" placeholder="Keterangan" value="{{ old('note') }}">
        @error('note')
          <div class="invalid-feedback">{{ $message }}</div>
        @enderror
      </div>

      <div class="form-create">
        <input type="number" name="nominal" id="nominal" class="form-control @error('nominal') is-invalid @enderror" placeholder="Nominal" value="{{ old('nominal') }}">
        @error('nominal')
          <div class="invalid-feedback">{{ $message }}</div>
        @enderror
      </div>

      <div class="form-button">
        <input type="submit" value="Add Post" class="form-button-create">
      </div>
    </form>
</div>
@endsection
@endrole