@extends('layouts.app')
@section('title', 'Pickup Assignments')

@section('content')
<h1 class="mb-4 d-flex justify-content-between">
    Pickup Assignments
    <a href="{{ route('pickup-assignments.create') }}" class="btn btn-primary">+ Assign</a>
</h1>

<table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>Order</th>
            <th>Driver</th>
            <th>Status</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach($pickupAssignments as $assignment)
        <tr>
            <td>{{ $assignment->id }}</td>
            <td>#{{ $assignment->pickup_order_id }}</td>
            <td>{{ $assignment->driver?->name ?? '—' }}</td>
            <td><span class="badge bg-{{ $assignment->status == 'completed' ? 'success' : 'warning' }}">{{ ucfirst($assignment->status) }}</span></td>
            <td>
                <a href="{{ route('pickup-assignments.show', $assignment) }}" class="btn btn-sm btn-info">View</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection