@extends('layouts.layout')
@section('title')
    <h1 class="text-center mt-5">Users</h1>
@endsection
@section('content')
    <form class="flex-fill" action="users/create">

        <button>Create User</button>
    </form>
    <table class="table">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Created at</th>
            <th>Updated at</th>
            <th>Edit</th>
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
                        <button>Edit</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
@endsection
