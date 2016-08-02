@extends('default')

@section('content')
    <div class="title">Edit the {{ $articles->title }}</div>
    <hr>
    @include('errors.verify')

    {!! Form::model($articles, ['method' => 'PATCH', 'route' => ['arti.update', $articles->id]]) !!}
        @include('articles.partials.form', ['submitButtonText' => 'Update Article', 'btnClass' => ['class' => 'btn btn-success form-control']])
    {!! Form::close() !!}
@stop