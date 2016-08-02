@extends('default')

@section('content')
    <div class="title">Articles</div>

    @if (Session::has('message'))
        <ul class="alert alert-info">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            <li>{!! Session::get('message') !!}</li>
        </ul>
    @endif

    <div class="table-responsive">
        <table class="table table-hover">
            <thead></thead>
            <tbody>
                @foreach($articles as $article)
                    <article>
                        <tr>
                            <td>
                                <h3>
                                    <a href="{{ route('arti.show', $article->id) }}"> {{ $article->title }} </a>
                                    <div class="btn-group pull-right">
                                        <a href="{{ route('arti.edit', $article->id) }}" type="button" class="btn btn-default btn-edit"> Edit </a>
                                        <a href="" type="button" class="btn btn-danger">Delete</a>
                                    </div>
                                </h3>
                            </td>
                        </tr>
                    </article>
                @endforeach
            </tbody>
        </table>
    </div>
@stop