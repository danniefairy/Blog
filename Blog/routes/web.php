<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


//blog home
Route::get('Blog',function(){
	return view('Blog');
});
//blog post


	Route::resource('post','blogpostcontroller');//有關post都放這邊
	Route::resource('/more','blogpostcontroller@pass');//有關post都放這邊

//blog auth
Auth::routes();

Route::get('/home', 'HomeController@index');

Auth::routes();

Route::get('/home', 'HomeController@index');

//email
Route::get('/mail','contactcontroller@emailget');
Route::post('/mail','contactcontroller@emailpost');

//categories
Route::resource('categories','CategoryController');//有關post都放這邊
Route::resource('/categories/create','CategoryController@create');
Route::resource('/categories/tag','CategoryController@show');

//search
Route::get('/search',function(){
	return view('/search');
});
Route::resource('/searchresult','blogpostcontroller@indexsearch');