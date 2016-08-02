@extends('default')

@section('content')
    @if ($name == 'richard')
        <ul>
            @foreach ($persons as $person)
                <li>{{ $person }}</li>
            @endforeach
        </ul>
        <h1>{!! $name !!}</h1>
        <div class="title">Contact-Me! </div>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
    @else
        <div class="title">this name not exist!</div>
    @endif
@stop