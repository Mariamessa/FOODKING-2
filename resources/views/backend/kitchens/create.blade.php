@extends('layouts.app');

@section("title","kitchens")



   
@section("content")
<div class="container">

         
  
        <div class="row">
    
        <form method="post" action="{{url('/kitchens')}}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="exampleFormControlSlect2" >name</label>
                <input class="form-control" name="title">
              </div>
              {{-- <div class="form-group">
                <label for="exampleFormControlTextarea1" >Content</label>
                <textarea class="form-control" name="content" rows="3"></textarea>
              </div> --}}
    <label for="exampleFormControlTextarea1">image</label>
    <input type="file" name="img">
        <input type="submit" class="btn btn-primary">
        </form>
        </div>
</div>

    
@endsection