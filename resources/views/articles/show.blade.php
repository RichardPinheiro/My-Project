@extends('default')

@section('content')
    <h1> {{ $articles->title }} </h1>

    <article>
        <div>
            <h3>{{ $articles->body }}</h3>
        </div>
        <div>
            Created In: {{ $articles->published_at->format('d/m/Y') }}
        </div>
    </article>
@stop