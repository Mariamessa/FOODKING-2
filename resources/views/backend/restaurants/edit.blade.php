@extends('layouts.app');

@section("title","restaurants")



   
@section("content")
<div class="container">
          
        <div class="row">
    
        <form method="post" action="{{ route('restaurants.update',$restaurants->id)}}" enctype="multipart/form-data">
         

            @csrf @method("put")
            <div class="form-group">
                <label for="exampleFormControlSlect2" >name</label>
                <input class="form-control" name="title" value="{{$restaurants->name}}">
              </div>
              <div>
                <label for="exampleFormControlTextarea1">URL</label>
              <input type="form-control" name="URL" value="{{$restaurants->URL}}">
              </div>
              <div>
                <label for="exampleFormControlTextarea1">kitchen_id</label>
              <input type="form-control" name="kitchen_id" value="{{$restaurants->kitchen_id}}">
              </div>
              <label for="exampleFormControlTextarea1">image</label>
              <input type="file" name="img">
              
    
        <input type="submit" class="btn btn-primary">
        </form>
        </div>
</div>

    
@endsection