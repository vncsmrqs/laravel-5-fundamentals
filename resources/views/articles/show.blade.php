@extends('app')

@section('content')
    <h1>{{ $article->title }}</h1>
    <small>Published: {{ $article->published_at }}</small>
    <article>
        {{ $article->body }}
    </article>
    @unless ($article->tags->isEmpty())
        <h5>Tags</h5>
        <ul>
            @foreach ($article->tags as $tag)
                <li><a href="{{ action('TagsController@show', $tag->name) }}">{{  $tag->name }}</a></li>
            @endforeach
        </ul>
    @endunless
    <a href="{{ url('/articles/' . $article->id . '/edit') }}" class="btn btn-primary" style="">Edit Article</a>
@endsection