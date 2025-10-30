@extends('layouts.app')
@section('title', 'Classify Plastic')

@section('content')
<h1>Classify Plastic</h1>
<form action="{{ route('plastic-classifications.store') }}" method="POST">
    @csrf
    <div class="mb-3">
        <label>Result</label>
        <input type="text" name="classification_result" class="form-control" value="{{ old('classification_result') }}" required>
    </div>
    <div class="mb-3">
        <label>Take Image URL</label>
        <input type="url" name="take_image" class="form-control" value="{{ old('take_image') }}">
    </div>
    <div class="mb-3">
        <label>Clear Image URL</label>
        <input type="url" name="clear_image" class="form-control" value="{{ old('clear_image') }}">
    </div>
    <div class="mb-3">
        <label>Upload Image URL</label>
        <input type="url" name="upload_image" class="form-control" value="{{ old('upload_image') }}">
    </div>
    <button type="submit" class="btn btn-success">Save</button>
    <a href="{{ route('plastic-classifications.index') }}" class="btn btn-secondary">Cancel</a>
</form>
@endsection