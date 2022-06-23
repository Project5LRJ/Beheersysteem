@extends('layouts.layout')
@section('title')
    <h1 class="text-center mt-5">{{  $exercise->title }} Edit</h1>
@endsection
@section('content')
    <form class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4" action="{{ route('exercises.update',[$exercise->id])}}" method="POST">
        @csrf
        @method('PUT')
        <table class="table">
            <thead>
            <tr>
                <th scope="col">id</th>
                <th scope="col">title</th>
                <th scope="col">description_NL</th>
                <th scope="col">description_ENG</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <th scope="row">{{ $exercise->id }}</th>
                <td><input type="text" name="title" value="{{ $exercise->title }}" placeholder="titel"></td>
                <td><textarea type="text" name="description_NL" placeholder="description_NL">{{ $exercise->description_NL }}</textarea></td>
                <td><textarea type="text" name="description_ENG" placeholder="description_NL">{{ $exercise->description_ENG }}</textarea></td>
            </tr>
            </tbody>
        </table>
        <button type="submit">Submit</button>
    </form>


@endsection


