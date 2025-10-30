@extends('layouts.app')
@section('title', 'Create Dropoff Order')

@section('content')
<h1>Create Dropoff Order</h1>

<form action="{{ route('dropoff-orders.store') }}" method="POST">
    @csrf
    <div class="mb-3">
        <label class="form-label">Status</label>
        <select name="status" class="form-select @error('status') is-invalid @enderror" required>
            <option value="scheduled" {{ old('status') == 'scheduled' ? 'selected' : '' }}>Scheduled</option>
            <option value="completed" {{ old('status') == 'completed' ? 'selected' : '' }}>Completed</option>
            <option value="cancelled" {{ old('status') == 'cancelled' ? 'selected' : '' }}>Cancelled</option>
        </select>
        @error('status') <div class="invalid-feedback">{{ $message }}</div> @enderror
    </div>

    <div class="mb-3">
        <label class="form-label">Scheduled Time</label>
        <input type="datetime-local" name="scheduled_time" class="form-control @error('scheduled_time') is-invalid @enderror" value="{{ old('scheduled_time') }}" required>
        @error('scheduled_time') <div class="invalid-feedback">{{ $message }}</div> @enderror
    </div>

    <div class="mb-3">
        <label class="form-label">Transaction Details</label>
        <input type="text" name="transaction_details" class="form-control @error('transaction_details') is-invalid @enderror" value="{{ old('transaction_details') }}">
        @error('transaction_details') <div class="invalid-feedback">{{ $message }}</div> @enderror
    </div>

    <div class="mb-3">
        <label class="form-label">Plastic Type</label>
        <select name="plastic_type" class="form-select @error('plastic_type') is-invalid @enderror" required>
            <option value="PET" {{ old('plastic_type') == 'PET' ? 'selected' : '' }}>PET</option>
            <option value="HDPE" {{ old('plastic_type') == 'HDPE' ? 'selected' : '' }}>HDPE</option>
            <option value="PP" {{ old('plastic_type') == 'PP' ? 'selected' : '' }}>PP</option>
            <option value="Mixed" {{ old('plastic_type') == 'Mixed' ? 'selected' : '' }}>Mixed</option>
        </select>
        @error('plastic_type') <div class="invalid-feedback">{{ $message }}</div> @enderror
    </div>

    <div class="mb-3">
        <label class="form-label">Dropoff Address</label>
        <textarea name="dropoff_address" class="form-control @error('dropoff_address') is-invalid @enderror" rows="3" required>{{ old('dropoff_address') }}</textarea>
        @error('dropoff_address') <div class="invalid-feedback">{{ $message }}</div> @enderror
    </div>

    <div class="mb-3">
        <label class="form-label">Order Details</label>
        <textarea name="order_details" class="form-control @error('order_details') is-invalid @enderror" rows="3">{{ old('order_details') }}</textarea>
        @error('order_details') <div class="invalid-feedback">{{ $message }}</div> @enderror
    </div>

    <div class="mb-3">
        <label class="form-label">Points</label>
        <input type="number" name="points" class="form-control @error('points') is-invalid @enderror" value="{{ old('points') }}" min="0">
        @error('points') <div class="invalid-feedback">{{ $message }}</div> @enderror
    </div>

    <button type="submit" class="btn btn-success">Create Order</button>
    <a href="{{ route('dropoff-orders.index') }}" class="btn btn-secondary">Cancel</a>
</form>
@endsection