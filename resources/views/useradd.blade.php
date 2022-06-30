@extends('layouts.layout')
@section('title')
    <h1 class="text-center mt-5">Add User</h1>
@endsection
@section('content')
    <form class="w-50 mx-auto" action="{{ route('users.store')  }}" method="POST">
        @csrf
        <div class="form-group mb-3">
            <label for="name">Name:</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="name">
        </div>
        <div class="form-group mb-3">
            <label for="email">Email Address:</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="email">
        </div>
        <div class="form-group mb-3">
            <label for="password">Password:</label>
            <input type="password" class="form-control" id="password" name="password" placeholder="password">
        </div>
        <div class="form-group mb-3">
            <label for="password">Password confirmation:</label>
            <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" placeholder="Confirm new password.">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
