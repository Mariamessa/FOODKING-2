@extends('layouts.app');

@section("title","restaurants")



   
@section("content")
<div class="container">

      
     <div class="container-fluid">
      <a href="restaurants/create/">Add New Restaurants</a>
        <div class="row">
         
        @foreach ( $restaurants as $restaurant )
        
        <div class="card col-md-3" style="width: 18rem;">
            <div class="card-body">
              <h5 class="card-title"><a href="restaurants/{{$restaurant->id}}">{{$restaurant->title}}</a></h5>
              <h6 class="card-subtitle mb-2 text-muted">{{$restaurant->name}}</h6>
              <h6 class="card-subtitle mb-2 text-muted">{{$restaurant->kitchen_id}}</h6>
              <h6 class="card-subtitle mb-2 text-muted">{{$restaurant->URL}}</h6>
              <p class="card-text">{{$restaurant->img}}</p>
              <img src="{{asset('img/restaurants/'.$restaurant->img)}}" class=w-100 >
              @auth
              <a href="restaurants/{{$restaurant->id}}/edit" class="card-link">Edit</a>
  <form method="post" action="restaurants/{{$restaurant->id}}">
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