@extends('layouts.layout')
@section('title')
    <h1 class="text-center mt-5">{{__('settings')}}</h1>
    <div class="w-25 mx-auto mt-5">
        <p>{{__('language_choice')}}:</p>
        <select id="language" class="form-select" aria-label="Default select example">
            <option value="en" @if ( Config::get('app.locale') == 'en') selected @endif>{{__('english')}}</option>
            <option value="nl" @if ( Config::get('app.locale') == 'nl') selected @endif>{{__('dutch')}}</option>
        </select>
        <button class="mt-3" onclick="changeLanguage()">{{__('save')}}</button>
    </div>
    <script>
        const changeLanguage = () => {
            const lang = document.getElementById('language').value;
            document.cookie = `lang=${lang}`;
            location.reload();
        }
    </script>
@endsection
@section('content')
@endsection
