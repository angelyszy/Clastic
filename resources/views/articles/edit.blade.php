@extends('layouts.app')
@section('title', 'Edit Article')

@section('content')
<h1>Edit Article</h1>
<form action="{{ route('articles.update', $article) }}" method="POST">
    @csrf @method('PUT')
    <div class="mb-3"><input type="text" name="title" value="{{ $article->title }}" class="form-control" required></div>
    <div class="mb-3"><textarea name="content" class="form-control" rows="5" required>{{ $article->content }}</textarea></div>
    <div class="mb-3"><input type="text" name="summary" value="{{ $article->summary }}" class="form-control" required></div>
    <div class="mb-3"><input type="url" name="featured_image_url" value="{{ $article->featured_image_url }}" class="form-control"></div>
    <button type="submit" class="btn btn-success">Update</button>
</form>
@endsection