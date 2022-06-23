@extends('layouts.layout')
@section('title')
    <h1 class="text-center mt-5">Exercises</h1>
@endsection
@section('content')
<ul class="text-center mt-5">
<button>Toevoegen</button>
</ul>
@foreach($exercises as $exercise)
<ul>
        <li>{{$exercise->title}}</li>
        <button>wijzigen</button>
        <button>verwijderen</button>
        </ul>
    @endforeach
@endsection
