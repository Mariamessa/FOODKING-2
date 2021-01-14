<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\kitchen;

class kitchencontroller extends Controller
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
        // $kitchens = kitchen::paginate(6);
        $kitchens=kitchen::all();
       return view ('backend.kitchens.index',compact('kitchens'));
    }
    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("backend.kitchens.create");
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
             $img=$this->uploadImg($file,"img/kitchens");
            
             }
             else
             {
               $img="no-image.png";
             }
            $kitchen=new kitchen();
            $kitchen->name=$request->title;
            $kitchen->img=$img;
            
            // $post->user_id=Auth::user()->id;
            $kitchen->save();
            
            // return redirect()->back();
            
            return redirect()->route('kitchens.index')->withmsg('post saved sucessfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $kitchen=kitchen::find($id);
     return view("backend.kitchens.show",compact("kitchen"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $kitchen=kitchen::find($id);
      return view("backend.kitchens.edit",compact('kitchen'));
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
              $img=$this->uploadImg($file,"img/kitchens");
             
              }
              else
              {
                $img="no-image.png";
              }
             
            $kitchen= kitchen::find($id);
            $kitchen->name=$request->title;
            $kitchen->img=$img;
             $kitchen->save();
            return redirect()->route('kitchens.index')->withmsg('post saved sucessfully');
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
        $kitchen=kitchen::find($id);
    $kitchen->delete();
    return redirect()->route('kitchens.index')->withmsg('kitchen deleted');
 
    }
}
