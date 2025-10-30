@extends('layouts.app')
@section('title', 'User Missions')

@section('content')
<h1>User Missions</h1>
<table class="table">
    <thead>
        <tr>
            <th>User</th>
            <th>Status</th>
            <th>Points Earned</th>
            <th>Progress</th>
        </tr>
    </thead>
    <tbody>
        @foreach($userMissions as $m)
        <tr>
            <td>{{ $m->user->name }}</td>
            <td>{{ ucfirst($m->status) }}</td>
            <td>{{ $m->points_earned }}</td>
            <td>{{ $m->current_progress }}</td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection