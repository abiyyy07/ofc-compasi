@extends('photo.layout')
@section('title', 'XI - Gallery')

@section('content')

@if ($message = Session::get('success'))
<div class="alert alert-success">
    <p>{{ $message }}</p>
</div>
@endif

<div class="card">
    @foreach ($photos as $photo)
    <div class="card-photo">
        <div class="card-photo-body">
            <div class="card-photo-image">
                <img class="modal-target" src="/images/{{ $photo->image }}" width="100px">
            </div>
        </div>
    </div>

    <div id="modal" class="modal">
        <span id="modal-close" class="modal-close">&times;</span>
        <img id="modal-content" class="modal-content">
        <div id="modal-caption" class="modal-caption"><p></p></div>
      </div>
    @endforeach
</div>

{!! $photos->links() !!}

<script src="/assets/js/modal.js"></script>

@endsection