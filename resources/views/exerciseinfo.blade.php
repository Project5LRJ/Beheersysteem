@extends('layouts.layout')
@section('title')
    <h1 class="text-center mt-5">{{  $exercise->title }}</h1>
@endsection
@section('content')
    <div class="d-flex">
        <div class="card-body flex-fill text-center">
            <h3 class="text-center">Description ENG</h3>
            <p class="text-center">{{ $exercise->description_ENG  }}</p>

            <p>ENG QR Code</p>
            {!! QrCode::size(300)->generate( $exercise->description_ENG ) !!}
        </div>
        <div class="card-body flex-fill text-center">
            <h3 class="text-center">Description NL</h3>
            <p class="text-center">{{ $exercise->description_NL  }}</p>

            <p>NL QR Code</p>
            {!! QrCode::size(300)->generate( $exercise->description_NL ) !!}
        </div>
    </div>
    <form action="exercises/{{ $exercise->id }}/edit">
        <button>Edit</button>
    </form>

@endsection


