@extends('movie.layout')


@section('edit')


<div class="container" style=" display: flex; align-items: center; height: 673px; background-color:rgb(250, 248, 248)">
    <form action="{{route('movies.update', $movie->id)}}" method="POST" enctype="multipart/form-data">
      
      @csrf
      @method('PUT')
      <label for="fname">Movie_Name</label>
      <input type="text" id="fname" name="movie_name" placeholder="Movie_Name" value="{{$movie->movie_name}}" />

      <label for="subject">Movie_Description</label>
      <textarea type="text" id="lo" name="movie_desc" placeholder="DESCRIPTION">{{$movie->movie_desc}}</textarea>
  
      <label for="lname">Movie_gener</label>
      <input type="text" id="lname" name="movie_gener" placeholder="Movie_gener" value="{{$movie->movie_gener}}" />

   
  
    

     
      <input type="file" id="aname" name="movie_img" value="{{$movie->movie_img}}" />

         
     
     
  
      <input type="submit" value="EDIT">
    </form>
  </div>
    
@endsection