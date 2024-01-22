@extends('layouts.app')

@section('content')

<h1 class="text-center fw-bold mt-3 title">Movies</h1>
<div class="container">
  <div class="row">
    @foreach ($movies as $movie)
    <div class="col-4 mt-3 mb-3">
        <div class="card opacity-75 text-center">
            <div class="card-header fw-bold cardtitle">
                {{$movie->title}}
            </div>
            <div class="card-body cardbody">
              <p><span class="fw-bold">Original title:</span> {{$movie->original_title}}</p>
              <p><span class="fw-bold">Nationality: </span>{{$movie->nationality}}</p>
              <p><span class="fw-bold">Date:</span> {{$movie->date}}</p>
              <p><span class="fw-bold">Vote: </span>{{$movie->vote}}</p>


            </div>
          </div>

    </div>


@endforeach

</div>  
</div>



@endsection