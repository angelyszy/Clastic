@extends('layouts.app')
@section('title', $plasticClassification->classification_result)

@section('content')
<div class="row">
    <div class="col-md-8">
        <div class="card">
            <div class="card-body">
                <h3>{{ $plasticClassification->classification_result }}</h3>
                <p><strong>User:</strong> {{ $plasticClassification->user->name }}</p>
                <div class="row">
                    <div class="col"><img src="{{ $plasticClassification->take_image }}" class="img-fluid"></div>
                    <div class="col"><img src="{{ $plasticClassification->clear_image }}" class="img-fluid"></div>
                    <div class="col"><img src="{{ $plasticClassification->upload_image }}" class="img-fluid"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card">
            <div class="card-body">
                <a href="{{ route('plastic-classifications.edit', $plasticClassification) }}" class="btn btn-warning w-100 mb-2">Edit</a>
                <a href="{{ route('plastic-classifications.index') }}" class="btn btn-secondary w-100">Back</a>
            </div>
        </div>
    </div>
</div>
@endsection