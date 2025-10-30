@extends('layouts.app')
@section('title', 'Dropoff Orders')

@section('content')
<h1 class="mb-4 d-flex justify-content-between">
    Dropoff Orders
    <a href="{{ route('dropoff-orders.create') }}" class="btn btn-primary">+ New</a>
</h1>

<table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>User</th>
            <th>Type</th>
            <th>Address</th>
            <th>Scheduled</th>
            <th>Status</th>
            <th>Points</th>
        </tr>
    </thead>
    <tbody>
        @foreach($dropoffOrders as $order)
        <tr>
            <td>{{ $order->id }}</td>
            <td>{{ $order->user->name }}</td>
            <td>{{ $order->plastic_type }}</td>
            <td>{{ Str::limit($order->dropoff_address, 30) }}</td>
            <td>{{ $order->scheduled_time?->format('d M Y H:i') }}</td>
            <td><span class="badge bg-info">{{ $order->status }}</span></td>
            <td>{{ $order->points }}</td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection