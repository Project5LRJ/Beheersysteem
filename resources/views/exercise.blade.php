@extends('layouts.layout')
@section('title')
    <h1 class="text-center mt-5">Exercises</h1>
@endsection
@section('content')
<ul class="text-center mt-5">
<button href="{{ route('exercises.create') }}">Toevoegen</button>
</ul>
@foreach($exercises as $exercise)
<ul class="w-25">
        <li>{{$exercise->title}}</li>
    <div class="d-flex">
        <form class="flex-fill" action="exercises/{{ $exercise->id }}">
            <button>More info</button>
        </form>
        <form class="flex-fill" action="exercises/{{ $exercise->id }}/edit">
            <button>Edit</button>
        </form>
        <form class="flex-fill" method="post" action="exercises/{{ $exercise->id }}">
            @csrf
            @method('delete')
            <button>Delete</button>
        </form>
    </div>


        </ul>
    @endforeach
@endsection
