@extends('layouts.layout')
@section('title')
    @if ( Config::get('app.locale') == 'nl')
        <h1 class="text-center mt-5">{{  $exercise->title_NL }} bewerken</h1>
    @else
        <h1 class="text-center mt-5">{{  $exercise->title_ENG }} edit</h1>
    @endif
@endsection
@section('content')
    <form class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4" action="{{ route('exercises.update',[$exercise->id])}}" method="POST">
        @csrf
        @method('PUT')
        <table class="table">
            <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">{{ __('title') }} NL</th>
                <th scope="col">{{ __('title') }} ENG</th>
                <th scope="col">{{ __('description') }} NL</th>
                <th scope="col">{{ __('description') }} ENG</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <th scope="row">{{ $exercise->id }}</th>
                <td><input type="text" name="title_NL" value="{{ $exercise->title_NL }}" placeholder="{{ __('title') }} NL"></td>
                <td><input type="text" name="title_ENG" value="{{ $exercise->title_ENG }}" placeholder="{{ __('title') }} ENG"></td>
                <td><textarea type="text" name="description_NL" placeholder="{{ __('description') }} NL">{{ $exercise->description_NL }}</textarea></td>
                <td><textarea type="text" name="description_ENG" placeholder="{{ __('description') }} ENG">{{ $exercise->description_ENG }}</textarea></td>
            </tr>
            </tbody>
        </table>
        <button type="submit">{{__('submit')}}</button>
    </form>


@endsection


