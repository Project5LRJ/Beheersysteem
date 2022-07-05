@extends('layouts.layout')
@section('title')
    <h1 class="text-center mt-5">{{__('users')}}</h1>
@endsection
@section('content')
    <form class="flex-fill" action="users/create">

        <button>{{__('add')}}</button>
    </form>
    <table class="table">
        <tr>
            <th>ID</th>
            <th>{{__('name')}}</th>
            <th>{{__('email')}}</th>
            <th>{{__('created_at')}}</th>
            <th>{{__('updated_at')}}</th>
            <th></th>
        </tr>
        @foreach($users as $user)
            <tr>
                <td>{{ $user->id }}</td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->created_at }}</td>
                <td>{{ $user->updated_at }}</td>
                <td>
                    <form class="flex-fill" action="users/{{ $user->id }}/edit">
                        <button>{{__('edit')}}</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
@endsection
