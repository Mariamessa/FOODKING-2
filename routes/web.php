<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// })->name("home");

Route::get('/dashboard','dashboardController@index');

// Route::view("url","view page",data)
// data=["key"=>"value"]


// Route::get('contact-us', function () {
//     return view('contact',data);
    
// });
//Named Route 
// Route::view('contact-us', 'contact',["page_title"=>"contacts us",
//                                "content"=>"<p>page content</p>"
//                                        ]); 




// Route ::get('posts','postController@index')->name("posts.index");
// Route ::get('posts/create','postController@create')->name("posts.create");
// Route ::post('posts/','postController@store')->name("posts.store");

// Route ::get('posts/{id}/edit','postController@edit')->name("posts.edit");
// Route ::put('posts/{id}','postController@update')->name("posts.update");

// Route ::delete('posts/{id}','postController@destroy')->name("posts.destroy");
// Route ::get('posts/{id}','postController@show')->name("posts.show");



Auth::routes();

