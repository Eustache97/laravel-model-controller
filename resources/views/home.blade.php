@extends('layouts.app')
@section('content')
    <h1>Questa è una home page</h1>
    <ul>
        @foreach ($movies as $movie)
            <li>
                <img src="{{ $movie->image }}" alt="">
                <h3>{{ $movie->original_title }}</h3>
            </li>
        @endforeach
    </ul>
@endsection
