@extends('layouts.app')
@section('content')
    <h1>Questa è una home page</h1>
    <div class="row row-cols-3">
        @foreach ($movies as $movie)
            <div class="col mb-3">
                <div class="movie-card">
                    <img src="{{ $movie->image }}" alt="">
                    <h3>{{ $movie->original_title }}</h3>
                </div>
            </div>
        @endforeach
    </div>
@endsection
