@extends('app')

@section('content')
    <h1>{{ $article->title }}</h1>
    <small>Published: {{ $article->published_at }}</small>
    <article>
        {{ $article->body }}
    </article>
    <a href="{{ url('/articles/' . $article->id . '/edit') }}" class="btn btn-primary" style="">Edit Article</a>
@endsection