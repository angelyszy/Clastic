@extends('layouts.app')
@section('title', $user->name)

@section('content')
<div class="row">
    <div class="col-md-8">
        <div class="card">
            <div class="card-body">
                <h3>{{ $user->name }}</h3>
                <p><strong>Email:</strong> {{ $user->email }}</p>
                <p><strong>Driver:</strong> {{ $user->driver?->name ?? 'No' }}</p>
                <p><strong>Pickups:</strong> {{ $user->pickupOrders->count() }}</p>
                <p><strong>Dropoffs:</strong> {{ $user->dropoffOrders->count() }}</p>
            </div>
        </div>
    </div>
</div>
@endsection