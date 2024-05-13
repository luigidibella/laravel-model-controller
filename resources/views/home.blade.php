@extends('layout.main')

@section('title')
    | Home
@endsection

@section('content')

<div class="container my-5">
    <h1>Home</h1>
    <row class="row row-cols-4">
        @foreach ($movies as $movie)
        <div class="col text-center">
            <div class="card mb-3" style="width: 18rem; min-height: 250px;">
                {{-- <img src="..." class="card-img-top" alt="{{ $movie->id }}"> --}}
                <div class="card-body">
                  <h5 class="card-title">{{ $movie->title }}</h5>
                  <p class="card-text">{{ $movie->original_title }}</p>
                  <p class="card-text">{{ $movie->nationality }}</p>
                  <p class="card-text">{{ $movie->date }}</p>
                  <p class="card-text">{{ $movie->vote }}</p>
                  {{-- <a href="#" class="btn btn-primary">Go somewhere</a> --}}
                </div>
            </div>
        </div>
        @endforeach
    </row>
</div>

@endsection
