@extends('layouts.app')
@section('title', 'Edit Classification')

@section('content')
<h1>Edit Classification</h1>
<form action="{{ route('plastic-classifications.update', $plasticClassification) }}" method="POST">
    @csrf @method('PUT')
    <div class="mb-3">
        <label>Result</label>
        <input type="text" name="classification_result" class="form-control" value="{{ old('classification_result', $plasticClassification->classification_result) }}" required>
    </div>
    <div class="mb-3">
        <label>Take Image URL</label>
        <input type="url" name="take_image" class="form-control" value="{{ old('take_image', $plasticClassification->take_image) }}">
    </div>
    <div class="mb-3">
        <label>Clear Image URL</label>
        <input type="url" name="clear_image" class="form-control" value="{{ old('clear_image', $plasticClassification->clear_image) }}">
    </div>
    <div class="mb-3">
        <label>Upload Image URL</label>
        <input type="url" name="upload_image" class="form-control" value="{{ old('upload_image', $plasticClassification->upload_image) }}">
    </div>
    <button type="submit" class="btn btn-success">Update</button>
    <a href="{{ route('plastic-classifications.index') }}" class="btn btn-secondary">Cancel</a>
</form>
@endsection