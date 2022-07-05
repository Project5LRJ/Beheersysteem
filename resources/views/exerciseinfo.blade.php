@extends('layouts.layout')
@section('title')
    @if ( Config::get('app.locale') == 'nl')
        <h1 class="text-center mt-5">{{  $exercise->title_NL }}</h1>
    @else
        <h1 class="text-center mt-5">{{  $exercise->title_ENG }}</h1>
    @endif
        @endsection
@section('content')
    <div class="d-flex">
        <div class="card-body flex-fill text-center">
            <h3 class="text-center">{{__('description')}} ENG</h3>
            <p class="text-center">{{ $exercise->description_ENG  }}</p>

            <p>ENG QR Code</p>
            {!! QrCode::size(300)->generate( $exercise->description_ENG ) !!}
        </div>
        <div class="card-body flex-fill text-center">
            <h3 class="text-center">{{__('description')}} NL</h3>
            <p class="text-center">{{ $exercise->description_NL  }}</p>

            <p>NL QR Code</p>
            {!! QrCode::size(300)->generate( $exercise->description_NL ) !!}
        </div>
    </div>
    <form action="{{ $exercise->id }}/edit">
        <button>{{__('edit')}}</button>
    </form>

@endsection


