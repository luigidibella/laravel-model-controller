@extends('layout.main')

@section('title')
    | Vote
@endsection

@section('content')

<div class="container my-5">
    <h1>Classifica</h1>
    <table class="table text-capitalize">
        <thead>
          <tr>
            {{-- <th scope="col">id</th> --}}
            <th scope="col">title</th>
            <th scope="col">original title</th>
            <th scope="col">nationality</th>
            <th scope="col">date</th>
            <th scope="col">vote</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($movies as $movie)
            <tr>
              {{-- <th scope="row">{{ $movie->id }}</th> --}}
              <td>{{ $movie->title }}</td>
              <td>{{ $movie->original_title }}</td>
              <td>{{ $movie->nationality }}</td>
              <td>{{ $movie->date }}</td>
              <td class="bg-danger-subtle">{{ $movie->vote }}</td>
            </tr>
            @endforeach
        </tbody>
      </table>
</div>

@endsection
