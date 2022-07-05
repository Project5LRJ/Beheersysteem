@extends('layouts.layout')
@section('title')
    <h1 class="text-center mt-5">{{__('exercises')}}</h1>
@endsection
@section('content')
<ul class="text-center mt-5">
<button href="{{ route('exercises.create') }}">{{ __('add') }}</button>
</ul>
@foreach($exercises as $exercise)
<ul class="w-25">
    @if ( Config::get('app.locale') == 'nl')
    <li>{{$exercise->title_NL}}</li>
    @else
    <li>{{$exercise->title_ENG}}</li>
    @endif
    <div class="d-flex">
        <form class="flex-fill" action="exercises/{{ $exercise->id }}">
            <button>{{__('details')}}</button>
        </form>
        <form class="flex-fill" action="exercises/{{ $exercise->id }}/edit">
            <button>{{__('edit')}}</button>
        </form>
        <form class="flex-fill" method="post" action="exercises/{{ $exercise->id }}">
            @csrf
            @method('delete')
            <button>{{__('delete')}}</button>
        </form>
    </div>


        </ul>
    @endforeach
@endsection
