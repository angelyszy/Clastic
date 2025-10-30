@extends('layouts.app')
@section('title', 'Edit Assignment')

@section('content')
<h1>Update Assignment #{{ $pickupAssignment->id }}</h1>
<form action="{{ route('pickup-assignments.update', $pickupAssignment) }}" method="POST">
    @csrf @method('PUT')
    <div class="mb-3">
        <label>Status</label>
        <select name="status" class="form-select @error('status') is-invalid @enderror" required>
            <option value="assigned" {{ old('status', $pickupAssignment->status) == 'assigned' ? 'selected' : '' }}>Assigned</option>
            <option value="in_progress" {{ old('status', $pickupAssignment->status) == 'in_progress' ? 'selected' : '' }}>In Progress</option>
            <option value="completed" {{ old('status', $pickupAssignment->status) == 'completed' ? 'selected' : '' }}>Completed</option>
            <option value="failed" {{ old('status', $pickupAssignment->status) == 'failed' ? 'selected' : '' }}>Failed</option>
        </select>
        @error('status') <div class="invalid-feedback">{{ $message }}</div> @enderror
    </div>

    <button type="submit" class="btn btn-success">Update</button>
    <a href="{{ route('pickup-assignments.index') }}" class="btn btn-secondary">Cancel</a>
</form>
@endsection