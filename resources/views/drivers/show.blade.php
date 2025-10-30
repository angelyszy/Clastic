@extends('layouts.app')
@section('title', $driver->name)

@section('content')
<div class="row">
    <div class="col-md-8">
        <div class="card">
            <div class="card-body">
                <h2>{{ $driver->name }}</h2>
                <p><strong>Phone:</strong> {{ $driver->phone_number }}</p>
                <p><strong>Status:</strong> <span class="badge bg-{{ $driver->status == 'available' ? 'success' : 'warning' }}">{{ ucfirst($driver->status) }}</span></p>
                <p><strong>User:</strong> {{ $driver->user?->name ?? 'Not linked' }}</p>
                <p><strong>Assignments:</strong> {{ $driver->assignments->count() }}</p>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card">
            <div class="card-body">
                <a href="{{ route('drivers.edit', $driver) }}" class="btn btn-warning w-100 mb-2">Edit</a>
                <a href="{{ route('drivers.index') }}" class="btn btn-secondary w-100">Back</a>
            </div>
        </div>
    </div>
</div>
@endsection