@extends('default')

@section('content')
    <div class="title">Create a new Article</div>
    <hr>
    @include('errors.verify')

    {!! Form::open(['route' => 'arti.store']) !!}
        @include('articles.partials.form' , ['submitButtonText' => 'Add Article', 'btnClass' => ['class' => 'btn btn-primary form-control']])
    {!! Form::close() !!}
@stop