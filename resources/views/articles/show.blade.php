@extends('layouts.app')
@section('title', $article->title)

@section('content')
<div class="card">
    <img src="{{ $article->featured_image_url }}" class="card-img-top" alt="Article Image">
    <div class="card-body">
        <h1 class="card-title">{{ $article->title }}</h1>
        <p class="text-muted">{{ $article->summary }}</p>
        <div>{!! nl2br(e($article->content)) !!}</div>
    </div>
    <div class="card-footer">
        <a href="{{ route('articles.index') }}" class="btn btn-secondary">Back</a>
    </div>
</div>
@endsection