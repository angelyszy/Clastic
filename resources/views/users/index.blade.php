@extends('layouts.app')
@section('title', 'Users')

@section('content')
<h1 class="mb-4">Users</h1>
<table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Driver?</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach($users as $user)
        <tr>
            <td>{{ $user->id }}</td>
            <td>{{ $user->name }}</td>
            <td>{{ $user->email }}</td>
            <td>{{ $user->driver ? 'Yes' : 'No' }}</td>
            <td>
                <a href="{{ route('users.show', $user) }}" class="btn btn-sm btn-info">View</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection