@extends('layouts.app');

@section("title","restaurants")



   
@section("content")
<div class="container">

      
    
   
  
        <div class="row">
    
        <div class="card col-md-12" style="width: 18rem;">
            <div class="card-body">
              <h5 class="card-title">{{$restaurant->title}}</h5>
              <h6 class="card-subtitle mb-2 text-muted">{{$restaurant->id}}</h6>
              <p class="card-text">{{$restaurant->name}}</p>
              <p class="card-text">{{$restaurant->URL}}</p>
              <p class="card-text">{{$restaurant->kitchen_id}}</p>
              <a href="#" class="card-link">Card link</a>
              <a href="#" class="card-link">Another link</a>
            </div>
          </div>
            
        
    
 
     
        </div>
</div>

    
@endsection