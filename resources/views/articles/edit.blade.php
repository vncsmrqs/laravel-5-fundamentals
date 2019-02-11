@extends('app')

@section('content')
    <h1>Edit: {{ $article->title }}</h1>
    <hr>
    <div class="row">
        <div class="col-md-12">
            {!! Form::model($article, ['action' => ['ArticlesController@update', $article->id], 'method' => 'PATCH']) !!}
                @include('articles.form', ['submitButtonText' => 'Update Article'])
            {!! Form::close() !!}
        </div>
    </div>
    @include('errors.list')
@endsection