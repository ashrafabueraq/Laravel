@extends('movie.layout')


@section('show')

<div class="card mb-3" style="width:400px; margin-left:500px;">
    <img src="{{asset('uploads/movies/'.$movie->movie_img)}}" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">{{$movie->movie_name}}</h5>
      <p class="card-text">{{$movie->movie_desc}}</p>
      <p class="card-text"><small class="text-muted">{{$movie->movie_gener}}</small></p>
    </div>
  </div>
 
    
@endsection