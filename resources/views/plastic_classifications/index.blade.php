@extends('layouts.app')
@section('title', 'Plastic Classifications')

@section('content')
<h1 class="mb-4 d-flex justify-content-between">
    Classifications
    <a href="{{ route('plastic-classifications.create') }}" class="btn btn-primary">+ New</a>
</h1>

<table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>User</th>
            <th>Result</th>
            <th>Take Image</th>
            <th>Clear Image</th>
            <th>Upload Image</th>
        </tr>
    </thead>
    <tbody>
        @foreach($plasticClassifications as $c)
        <tr>
            <td>{{ $c->id }}</td>
            <td>{{ $c->user->name }}</td>
            <td>{{ $c->classification_result }}</td>
            <td><img src="{{ $c->take_image }}" width="50" class="img-thumbnail"></td>
            <td><img src="{{ $c->clear_image }}" width="50" class="img-thumbnail"></td>
            <td><img src="{{ $c->upload_image }}" width="50" class="img-thumbnail"></td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection