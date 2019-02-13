@extends('app')

@section('content')
    <h1>Write a new article</h1>
    <hr>
    <div class="row">
        <div class="col-md-12">
            {!! Form::model($article = new \App\Article, ['url' => 'articles']) !!}
                @include('articles.form', ['submitButtonText' => 'Add Article'])
            {!! Form::close() !!}
        </div>
    </div>
    @include('errors.list')
@endsection