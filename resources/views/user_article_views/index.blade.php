@extends('layouts.app')
@section('title', 'Article Views')

@section('content')
<h1>Article Views</h1>
<table class="table">
    <thead>
        <tr>
            <th>User</th>
            <th>Article</th>
            <th>Viewed At</th>
        </tr>
    </thead>
    <tbody>
        @foreach($userArticleViews as $view)
        <tr>
            <td>{{ $view->user->name }}</td>
            <td>{{ $view->article->title }}</td>
            <td>{{ $view->created_at->diffForHumans() }}</td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection