@extends('layouts.app')
@section('title', 'Pickup Orders')

@section('content')
<h1>Pickup Orders</h1>
<table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>User</th>
            <th>Plastic Type</th>
            <th>Points</th>
            <th>Schedule</th>
            <th>Status</th>
        </tr>
    </thead>
    <tbody>
        @foreach($pickupOrders as $order)
        <tr>
            <td>{{ $order->id }}</td>
            <td>{{ $order->user->name }}</td>
            <td>{{ $order->plastic_type }}</td>
            <td>{{ $order->points }}</td>
            <td>{{ $order->schedule_making->format('d M Y H:i') }}</td>
            <td><span class="badge bg-info">{{ $order->assignment->status ?? 'Pending' }}</span></td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection