@extends('layouts.layout')
@section('title')
    @if ( Config::get('app.locale') == 'nl')
        <h1 class="text-center mt-5">Gebruiker toevoegen</h1>
    @else
        <h1 class="text-center mt-5">Add user</h1>
    @endif
        @endsection
@section('content')
    <form class="w-50 mx-auto" action="{{ route('users.store')  }}" method="POST">
        @csrf
        <div class="form-group mb-3">
            <label for="name">{{__('name')}}:</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="{{__('name')}}">
        </div>
        <div class="form-group mb-3">
            <label for="email">{{__('email')}}:</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="{{__('email')}}">
        </div>
        <div class="form-group mb-3">
            <label for="password">{{__('password')}}:</label>
            <input type="password" class="form-control" id="password" name="password" placeholder="{{__('password')}}">
        </div>
        <div class="form-group mb-3">
            <label for="password">{{__('password_confirm')}}:</label>
            <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" placeholder="{{__('password')}}">
        </div>
        <button type="submit" class="btn btn-primary">{{__('submit')}}</button>
    </form>
@endsection
