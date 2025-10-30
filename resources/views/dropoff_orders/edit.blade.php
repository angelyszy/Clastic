@extends('layouts.app')
@section('title', 'Edit Dropoff Order')

@section('content')
<h1>Edit Dropoff Order #{{ $dropoffOrder->id }}</h1>

<form action="{{ route('dropoff-orders.update', $dropoffOrder) }}" method="POST">
    @csrf @method('PUT')
    <div class="mb-3">
        <label class="form-label">Status</label>
        <select name="status" class="form-select @error('status') is-invalid @enderror" required>
            <option value="scheduled" {{ old('status', $dropoffOrder->status) == 'scheduled' ? 'selected' : '' }}>Scheduled</option>
            <option value="completed" {{ old('status', $dropoffOrder->status) == 'completed' ? 'selected' : '' }}>Completed</option>
            <option value="cancelled" {{ old('status', $dropoffOrder->status) == 'cancelled' ? 'selected' : '' }}>Cancelled</option>
        </select>
        @error('status') <div class="invalid-feedback">{{ $message }}</div> @enderror
    </div>

    <div class="mb-3">
        <label class="form-label">Scheduled Time</label>
        <input type="datetime-local" name="scheduled_time" class="form-control @error('scheduled_time') is-invalid @enderror" value="{{ old('scheduled_time', $dropoffOrder->scheduled_time?->format('Y-m-d\TH:i')) }}" required>
        @error('scheduled_time') <div class="invalid-feedback">{{ $message }}</div> @enderror
    </div>

    <div class="mb-3">
        <label class="form-label">Transaction Details</label>
        <input type="text" name="transaction_details" class="form-control @error('transaction_details') is-invalid @enderror" value="{{ old('transaction_details', $dropoffOrder->transaction_details) }}">
        @error('transaction_details') <div class="invalid-feedback">{{ $message }}</div> @enderror
    </div>

    <div class="mb-3">
        <label class="form-label">Plastic Type</label>
        <select name="plastic_type" class="form-select @error('plastic_type') is-invalid @enderror" required>
            <option value="PET" {{ old('plastic_type', $dropoffOrder->plastic_type) == 'PET' ? 'selected' : '' }}>PET</option>
            <option value="HDPE" {{ old('plastic_type', $dropoffOrder->plastic_type) == 'HDPE' ? 'selected' : '' }}>HDPE</option>
            <option value="PP" {{ old('plastic_type', $dropoffOrder->plastic_type) == 'PP' ? 'selected' : '' }}>PP</option>
            <option value="Mixed" {{ old('plastic_type', $dropoffOrder->plastic_type) == 'Mixed' ? 'selected' : '' }}>Mixed</option>
        </select>
        @error('plastic_type') <div class="invalid-feedback">{{ $message }}</div> @enderror
    </div>

    <div class="mb-3">
        <label class="form-label">Dropoff Address</label>
        <textarea name="dropoff_address" class="form-control @error('dropoff_address') is-invalid @enderror" rows="3" required>{{ old('dropoff_address', $dropoffOrder->dropoff_address) }}</textarea>
        @error('dropoff_address') <div class="invalid-feedback">{{ $message }}</div> @enderror
    </div>

    <div class="mb-3">
        <label class="form-label">Order Details</label>
        <textarea name="order_details" class="form-control @error('order_details') is-invalid @enderror" rows="3">{{ old('order_details', $dropoffOrder->order_details) }}</textarea>
        @error('order_details') <div class="invalid-feedback">{{ $message }}</div> @enderror
    </div>

    <div class="mb-3">
        <label class="form-label">Points</label>
        <input type="number" name="points" class="form-control @error('points') is-invalid @enderror" value="{{ old('points', $dropoffOrder->points) }}" min="0">
        @error('points') <div class="invalid-feedback">{{ $message }}</div> @enderror
    </div>

    <button type="submit" class="btn btn-success">Update Order</button>
    <a href="{{ route('dropoff-orders.index') }}" class="btn btn-secondary">Cancel</a>
</form>
@endsection