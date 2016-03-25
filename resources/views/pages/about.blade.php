@extends('app')

@section('content')

<h1>About</h1>

@if (count ($people))
    <h3>People i like:</h3>
    <ul>
        @foreach ($people as $person)
            <li>{{ $person }}</li>
            @endforeach
    </ul>
    <p> neki random tekst
    skroz random
</p>
@endif
@stop