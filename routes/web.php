<?php

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
/*
Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello', function () {
    return '<h1>I Love You</h1>';
});*/

/*Route::get('/About', function(){
return view('pages.About');
});*/

// Dynamic Route
Route::get('/Users/{id}/{name}', function($id, $name){
    return 'This is user ' .$id. ' ' .$name ;
});
// Calling a controller
Route::get('/', 'PagesController@Index');
Route::get('/about', 'PagesController@about');
Route::get('/services', 'PagesController@services');

Route::Resource('posts', 'PostsController');
    
Auth::routes();

Route::get('/dashboard', 'dashboardController@index');
