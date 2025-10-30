@extends('layouts.app')
@section('title', 'Create Driver')

@section('content')
<h1>Create Driver</h1>
<form action="{{ route('drivers.store') }}" method="POST">
    @csrf
    <div class="mb-3">
        <label>Name</label>
        <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" value="{{ old('name') }}" required>
        @error('name') <div class="invalid-feedback">{{ $message }}</div> @enderror
    </div>
    <div class="mb-3">
        <label>Phone Number</label>
        <input type="text" name="phone_number" class="form-control @error('phone_number') is-invalid @enderror" value="{{ old('phone_number') }}" required>
        @error('phone_number') <div class="invalid-feedback">{{ $message }}</div> @enderror
    </div>
    <div class="mb-3">
        <label>Status</label>
        <select name="status" class="form-select @error('status') is-invalid @enderror" required>
            <option value="available" {{ old('status') == 'available' ? 'selected' : '' }}>Available</option>
            <option value="busy" {{ old('status') == 'busy' ? 'selected' : '' }}>Busy</option>
            <option value="offline" {{ old('status') == 'offline' ? 'selected' : '' }}>Offline</option>
        </select>
        @error('status') <div class="invalid-feedback">{{ $message }}</div> @enderror
    </div>
    <button type="submit" class="btn btn-success">Create</button>
    <a href="{{ route('drivers.index') }}" class="btn btn-secondary">Cancel</a>
</form>
@endsection