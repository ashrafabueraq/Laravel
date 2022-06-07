@extends('post.layout')

@section('content')


<div class="container">
  @if ($message = Session::get('success'))
  <div class="alert alert-success" role="alert">
   {{$message}}
  </div>
      
  @endif
</div>

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
            <th scope="col">action</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($posts as $item)

            <tr>
                <th scope="row">{{$item->id}}</th>
                <td>{{$item->name}}</td>
                <td>{{$item->email}}</td>
                <td>{{$item->age}}</td>
                <td>{{$item->password}}</td>
                <td><img src="{{asset('uploads/posts/'.$item->profile_image)}}" alt="image" width="100px" height="100px"></td>

                <td>
                  
                  <div  style="display: flex;justify-content: space-evenly;">
                  <div>
                    <a  class="btn btn-success" href="{{route('posts.edit', $item->id)}}">Edit</a>
                  </div>
                  <div>
                    <a  class="btn btn-primary" href="{{route('posts.show', $item->id)}}">Show</a>
                  </div>
                  <div>
                    <form action="{{route('posts.destroy' , $item->id)}}" method="POST">
                      @csrf
                      @method('DELETE')
                      <button type="submit" class="btn btn-danger">DELETE</button>
      
                      </form>
                  </div>


                  </div>

                </td>
               
              </tr>
                
            @endforeach
       
        </tbody>
      </table>

      
<div class="jumbotron container">
  <a class="btn btn-primary btn-lg" href="{{route('posts.create')}}">Create</a>
</div>

</div>






    
@endsection