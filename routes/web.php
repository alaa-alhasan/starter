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

Route::get('/', function () {
    return view('welcome');
});

// create Route
Route::get('/test',function() {
    return 'hello its me alaa al hasan';
});

// create Route with parameter
Route::get('/param/{id}',function($id){
    return $id;
});

Route::get('/optional/{id?}', function(){
    return 'hello its me again';
});

//use controller
Route::namespace('Front')->group(function (){
    // all route only access controller or methods in folder name Front
    Route::get('users','UserController@showUserName');
});


// return index from another route
Route::get('index','Front\UserController@getIndex');




Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
