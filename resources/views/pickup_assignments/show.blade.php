@extends('layouts.app')
@section('title', 'Assignment #' . $pickupAssignment->id)

@section('content')
<div class="row">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">
                <h3>Pickup Assignment #{{ $pickupAssignment->id }}</h3>
            </div>
            <div class="card-body">
                <p><strong>Order:</strong> #{{ $pickupAssignment->pickup_order_id }}</p>
                <p><strong>Driver:</strong> {{ $pickupAssignment->driver?->name ?? '—' }}</p>
                <p><strong>Status:</strong> <span class="badge bg-{{ $pickupAssignment->status == 'completed' ? 'success' : 'warning' }}">{{ ucfirst($pickupAssignment->status) }}</span></p>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card">
            <div class="card-body">
                <a href="{{ route('pickup-assignments.edit', $pickupAssignment) }}" class="btn btn-warning w-100 mb-2">Edit</a>
                <a href="{{ route('pickup-assignments.index') }}" class="btn btn-secondary w-100">Back</a>
            </div>
        </div>
    </div>
</div>
@endsection