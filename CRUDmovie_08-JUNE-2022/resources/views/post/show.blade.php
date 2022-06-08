@extends('post.layout')

@section('show')


<div>

    <table class="table">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Age</th>
            <th scope="col">password</th>
            <th scope="col">profile_image</th>
            {{-- <th scope="col">action</th> --}}
          </tr>
        </thead>
        <tbody>
            

            <tr>
                <th scope="row">{{$post->id}}</th>
                <td>{{$post->name}}</td>
                <td>{{$post->email}}</td>
                <td>{{$post->age}}</td>
                <td>{{$post->password}}</td>
                <td><img src="{{asset('uploads/posts/'.$post->profile_image)}}" alt="image" width="100px" height="100px"></td>

               
               
              </tr>
                
            
       
        </tbody>
      </table>

    
@endsection