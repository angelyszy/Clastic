@extends('layouts.app')
@section('title', 'Exchange Points')

@section('content')
<h1>Exchange Points</h1>
<form action="{{ route('point-exchanges.store') }}" method="POST">
    @csrf
    <div class="mb-3">
        <label>Points</label>
        <input type="number" name="points_exchanged" class="form-control" min="100" step="50" value="{{ old('points_exchanged') }}" required>
    </div>
    <div class="mb-3">
        <label>Method</label>
        <select name="payment_method" class="form-select" required>
            <option value="Bank Transfer">Bank Transfer</option>
            <option value="Mobile Wallet">Mobile Wallet</option>
        </select>
    </div>
    <div class="mb-3">
        <label>Account/Phone</label>
        <input type="text" name="payment_account_number" class="form-control" value="{{ old('payment_account_number') }}" required>
    </div>
    <button type="submit" class="btn btn-success">Exchange</button>
</form>
@endsection