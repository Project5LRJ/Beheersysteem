@extends('layouts.layout')
@section('title')
    @if ( Config::get('app.locale') == 'nl')
        <h1 class="text-center mt-5">Gebruiker bewerken</h1>
    @else
        <h1 class="text-center mt-5">Edit user</h1>
    @endif
@endsection
@section('content')
    <form class="w-50 mx-auto" action="{{ route('users.update',[$user->id])}}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group mb-3">
            <label for="name">{{__('name')}}:</label>
            <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name', $user->name) }}">
            @foreach ($errors->get('name') as $error)
                <div class="invalid-feedback d-block">
                {{ $error }}
                </div>
            @endforeach
        </div>
        <div class="form-group mb-3">
            <label for="email">{{__('email')}}:</label>
            <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email', $user->email) }}">
            @foreach ($errors->get('email') as $error)
                <div class="invalid-feedback d-block">
                    {{ $error }}
                </div>
            @endforeach
        </div>
        <div class="form-group mb-3">
            <label for="password">{{__('password')}}:</label>
            <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password" placeholder="{{__('password')}}">
            @foreach ($errors->get('password') as $error)
                <div class="invalid-feedback d-block">
                    {{ $error }}
                </div>
            @endforeach
        </div>
        <div class="form-group mb-3">
            <label for="password">{{__('password_confirm')}}:</label>
            <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" placeholder="{{__('password')}}">
        </div>
        <button type="submit" class="btn btn-primary">{{__('submit')}}</button>
    </form>
@endsection
