<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\restaurant;
class RestaurantController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except('index');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $restaurants=restaurant::all();
       return view ('backend.restaurants.index',compact('restaurants'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("backend.restaurants.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate(
            [
                'title'=>'required | max:50 |min:5 ',
                
                'img'=>'required|image|mimes:jpeg,png,jpg,gif|max:2048'
            ]
              ) ;
             if($request->hasfile('img'))
             {
              $file=$request->file('img');
             $img=$this->uploadImg($file,"img/restaurants");
            
             }
             else
             {
               $img="no-image.png";
             }
            $restaurant=new restaurant();
            $restaurant->name=$request->title;
            $restaurant->img=$img;
            $restaurant->URL=$request->URL;
            $restaurant->kitchen_id=$request->kitchen_id;
            // $post->user_id=Auth::user()->id;
            $restaurant->save();
            
            // return redirect()->back();
            
            return redirect()->route('restaurants.index')->withmsg('post saved sucessfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $restaurant=restaurant::find($id);
     return view("backend.restaurants.show",compact("restaurant"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $restaurants=restaurant::find($id);
      return view("backend.restaurants.edit",compact('restaurants'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate(
            [
                'title'=>'required | max:50 |min:5 ',
                'img'=>'required|image|mimes:jpeg,png,jpg,gif|max:2048'
            ]
              ) ;
              if($request->hasfile('img'))
              {
               $file=$request->file('img');
              $img=$this->uploadImg($file,"img/restaurants");
             
              }
              else
              {
                $img="no-image.png";
              }
             
            $restaurant= restaurant::find($id);
            $restaurant->name=$request->title;
            $restaurant->img=$img;
            $restaurant->URL=$request->URL;
            $restaurant->kitchen_id=$request->kitchen_id;
             $restaurant->save();
            return redirect()->route('restaurants.index')->withmsg('post saved sucessfully');
    }
    public function uploadImg($img,$dir)
{
  $file=$img;

  $img_name=$file->getClientOriginalName();//name.jpg
  $ext=$file->getClientOriginalExtension();//jpg
  $image=time().$img_name;

  $file->move($dir,$image);
  return $image;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $restaurant=restaurant::find($id);
        $restaurant->delete();
        return redirect()->route('restaurants.index')->withmsg('restaurant deleted');
    }
}
