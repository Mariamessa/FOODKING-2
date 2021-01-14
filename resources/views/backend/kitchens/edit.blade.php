@extends('layouts.app');

@section("title","kitchens")



   
@section("content")
<div class="container">
          
        <div class="row">
    
        <form method="post" action="{{ route('kitchens.update',$kitchen->id)}}" enctype="multipart/form-data">
         

            @csrf @method("put")
            <div class="form-group">
                <label for="exampleFormControlSlect2" >name</label>
                <input class="form-control" name="title" value="{{$kitchen->title}}">
              </div>
              <label for="exampleFormControlTextarea1">image</label>
              <input type="file" name="img">
    
        <input type="submit" class="btn btn-primary">
        </form>
        </div>
</div>

    
@endsection