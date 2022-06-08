@extends('movie.layout')

@section('create')


  
    
    <div class="container" style=" display: flex; align-items: center; height: 673px;">
      <form action="{{route('movies.store')}}" method="POST" enctype="multipart/form-data">

        @csrf
        <label for="fname">Movie_Name</label>
        <input type="text" id="fname" name="movie_name" placeholder="Movie_Name">

        <label for="subject">Movie_desc</label>
        <textarea type="text" id="lname" name="movie_desc" placeholder="DESCRIPTION"></textarea>
    
        <label for="lname">Movie_gener</label>
        <input type="text" id="lname" name="movie_gener" placeholder="Movie_gener">

     
    
      

       
        <input type="file" id="lname" name="movie_img">


       
    
        <input type="submit">
      </form>
    </div>
    
 


    
@endsection