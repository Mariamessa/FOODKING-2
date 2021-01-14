@extends('layouts.app');

@section("title","kitchens")



   
@section("content")
<div class="container">

      
    
   
  
        <div class="row">
    
        <div class="card col-md-12" style="width: 18rem;">
            <div class="card-body">
              <h5 class="card-title">{{$kitchen->title}}</h5>
              <h6 class="card-subtitle mb-2 text-muted">{{$kitchen->id}}</h6>
              <p class="card-text">{{$kitchen->name}}</p>
              <a href="#" class="card-link">Card link</a>
              <a href="#" class="card-link">Another link</a>
            </div>
          </div>
            
        
    
 
     
        </div>
</div>

    
@endsection