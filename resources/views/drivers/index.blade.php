@extends('layouts.app')
@section('title', 'Drivers')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
    <h1>Drivers</h1>
    <a href="{{ route('drivers.create') }}" class="btn btn-primary">+ New Driver</a>
</div>

<table class="table table-hover">
    <thead class="table-light">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Phone</th>
            <th>Status</th>
            <th>User</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach($drivers as $driver)
        <tr>
            <td>{{ $driver->id }}</td>
            <td>{{ $driver->name }}</td>
            <td>{{ $driver->phone_number }}</td>
            <td><span class="badge bg-{{ $driver->status == 'available' ? 'success' : 'warning' }}">{{ ucfirst($driver->status) }}</span></td>
            <td>{{ $driver->user?->name ?? '—' }}</td>
            <td>
                <a href="{{ route('drivers.show', $driver) }}" class="btn btn-sm btn-info">View</a>
                <a href="{{ route('drivers.edit', $driver) }}" class="btn btn-sm btn-warning">Edit</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
{{ $drivers->links() }}
@endsection