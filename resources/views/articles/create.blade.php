@extends('layouts.app')
@section('title', 'Create Article')

@section('content')
<h1>Create Article</h1>
<form action="{{ route('articles.store') }}" method="POST">
    @csrf
    <div class="mb-3"><input type="text" name="title" class="form-control" placeholder="Title" required></div>
    <div class="mb-3"><textarea name="content" class="form-control" rows="5" placeholder="Content" required></textarea></div>
    <div class="mb-3"><input type="text" name="summary" class="form-control" placeholder="Summary" required></div>
    <div class="mb-3"><input type="url" name="featured_image_url" class="form-control" placeholder="Image URL"></div>
    <button type="submit" class="btn btn-success">Save</button>
</form>
@endsection