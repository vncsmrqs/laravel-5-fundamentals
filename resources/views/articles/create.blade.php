@extends('app')

@section('content')
    <h1>Write a new article</h1>
    <hr>
    <div class="row">
        <div class="col-md-12">
            {!! Form::open(['url' => 'articles']) !!}
                @include('articles.form', ['submitButtonText' => 'Add Article'])
            {!! Form::close() !!}
        </div>
    </div>
    <div class="row">
        @if ($errors->any())
            <div class="col-md-12">
                <ul class="alert alert-danger" style="list-style: none">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
    
        @endif
    </div>
@endsection