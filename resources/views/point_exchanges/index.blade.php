@extends('layouts.app')
@section('title', 'Point Exchanges')

@section('content')
<h1 class="mb-4">Point Exchanges</h1>
<table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>User</th>
            <th>Points</th>
            <th>Cash (Rp)</th>
            <th>Method</th>
            <th>Account</th>
        </tr>
    </thead>
    <tbody>
        @foreach($pointExchanges as $ex)
        <tr>
            <td>{{ $ex->id }}</td>
            <td>{{ $ex->user->name }}</td>
            <td>{{ $ex->points_exchanged }}</td>
            <td>{{ number_format($ex->cash_amount, 0) }}</td>
            <td>{{ ucfirst($ex->payment_method) }}</td>
            <td>{{ $ex->payment_account_number }}</td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection