@extends('layouts.app');

@section("title","kitchens")



   
@section("content")
<div class="container">

      
     <div class="container-fluid">
      <a href="kitchens/create/">Add New Kitchen</a>
        <div class="row">
         
        @foreach ( $kitchens as $kitchen )
        
        <div class="card col-md-3" style="width: 18rem;">
            <div class="card-body">
              <h5 class="card-title"><a href="kitchens/{{$kitchen->id}}">{{$kitchen->title}}</a></h5>
              <h6 class="card-subtitle mb-2 text-muted">{{$kitchen->name}}</h6>
              <p class="card-text">{{$kitchen->img}}</p>
              <img src="{{asset('img/kitchens/'.$kitchen->img)}}" class=w-100 >
              @auth
              <a href="kitchens/{{$kitchen->id}}/edit" class="card-link">Edit</a>
  <form method="post" action="kitchens/{{$kitchen->id}}">
      @csrf @method("delete")
      <button type='submit' class="btn btn-danger">Delete</button>
  </form>
  @endauth
            </div>
          </div>
            
        
    
     @endforeach
     
        </div>
     </div>
</div>

    
@endsection