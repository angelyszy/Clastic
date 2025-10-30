@extends('layouts.app')
@section('title', 'Dropoff Order #' . $dropoffOrder->id)

@section('content')
<div class="row">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">
                <h3>Dropoff Order #{{ $dropoffOrder->id }}</h3>
            </div>
            <div class="card-body">
                <p><strong>User:</strong> {{ $dropoffOrder->user->name }}</p>
                <p><strong>Status:</strong> <span class="badge bg-{{ $dropoffOrder->status == 'completed' ? 'success' : 'info' }}">{{ ucfirst($dropoffOrder->status) }}</span></p>
                <p><strong>Plastic Type:</strong> {{ $dropoffOrder->plastic_type }}</p>
                <p><strong>Scheduled:</strong> {{ $dropoffOrder->scheduled_time?->format('d M Y H:i') }}</p>
                <p><strong>Address:</strong> {{ $dropoffOrder->dropoff_address }}</p>
                <p><strong>Order Details:</strong> {{ $dropoffOrder->order_details }}</p>
                <p><strong>Points:</strong> {{ $dropoffOrder->points }}</p>
                <p><strong>Transaction:</strong> {{ $dropoffOrder->transaction_details }}</p>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card">
            <div class="card-header">Actions</div>
            <div class="card-body">
                <a href="{{ route('dropoff-orders.edit', $dropoffOrder) }}" class="btn btn-warning w-100 mb-2">Edit</a>
                <a href="{{ route('dropoff-orders.index') }}" class="btn btn-secondary w-100">Back</a>
            </div>
        </div>
    </div>
</div>
@endsection