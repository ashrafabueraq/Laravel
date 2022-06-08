@extends('movie.layout')

@section('all')

<div class="container">
    @if ($message = Session::get('success'))
    <div class="alert alert-success" role="alert">
     {{$message}}
    </div>
        
    @endif

<div style="display: flex; justify-content:center; width:100%; align-items:center;">
<table class="table table-bordered" style="width: 80%;">
    <thead>
      <tr>
        <th>ID</th>
        <th>Movie_Name</th>
        <th>Movie_desc</th>
        <th>Movie_gener</th>
        <th>Movie_image</th>
        <th>Action</th>
        <th>Action</th>
       <th>Action</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($movie as $item)
            
       
      <tr>
        <th scope="row">{{$item->id}}</th>
        <td>{{$item->movie_name}}</td>
        <td>{{$item->movie_desc}}</td>
        <td>{{$item->movie_gener}}</td>
        <td><img src="{{asset('uploads/movies/'.$item->movie_img)}}" alt="image" width="100px" height="100px"></td>
        <td>
             

        
       
                <div>
                  <a  class="btn btn-success" href="{{route('movies.edit', $item->id)}}">Edit</a>
                </div></td>
              <td>  <div>
                  <a  class="btn btn-primary" href="{{route('movies.show', $item->id)}}">Show</a>
                </div> </td>

                <td>
                <div>
                  <form action="{{route('movies.destroy', $item->id)}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">DELETE</button>
    
                    </form>
                </div>


                
        </td>
      </tr>

      @endforeach
    </tbody>
  </table>
</div>

<div class="jumbotron container">
    <a style="margin-left: 450px; width:350px;" class="btn btn-primary btn-lg" href="{{route('movies.create')}}">Create</a>
  </div>
    
@endsection