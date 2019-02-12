@extends('app')

@section('content')
    <h1>Articles</h1>
    <a href="{{url('/articles/create')}}" class="btn btn-primary" style="">New Article</a>
    <hr>
    @foreach ($articles as $article)
        <article>
            <h2>
            <a href="{{ url('/articles', $article->id) }}">{{ $article->title }}</a>
            </h2>
            <p>{{ $article->body }}</p>
        </article>
        
    @endforeach
@endsection

@section('footer')
    <script>
        $('div.alert').not('.alert-important').delay(3000).slideUp(300)
    </script>
@endsection
