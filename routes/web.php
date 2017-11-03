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

Route::get('/home', function () {
    return redirect('/radhasarisha/home');
});

Route::get('/ktfui', function () {
    return view('ktfui.index');
});

Route::get('/projects', 'ProjectController@showIndex');

Route::get('/projects/{id}', 'ProjectController@post');

// which profile to show
Route::get('/profile{page}', 'Controller@showPage');

Route::get('/services', function () {
    return view('ktfui.services');
});

Route::get('/contact', 'CPController@show');

Route::get('/post', function () {
    return view('ktfui.post');
});

Route::get('/download', 'Controller@getDownload');

Route::prefix('radhasarisha')->group(function(){
  Auth::routes();

  // Route::match(['get', 'post'], 'register', function(){
  //   return redirect('/radhasarisha/login');
  // });

  Route::get('/home', 'HomeController@index')->middleware('auth');

  Route::get('/createProject', function(){
      return view('auth.createProject');
  })->middleware('auth');

  Route::get('/manageProjects', 'ProjectController@show')->middleware('auth');

  Route::get('/manageProfile', 'ProfileController@show')->middleware('auth');

  Route::get('/editCP', 'CPController@show2')->middleware('auth');

  Route::get('/editProject/{id}', 'ProjectController@showId')->middleware('auth');

  Route::get('/messages', 'MessagesController@show');
});


Route::prefix('project')->group(function(){
  Route::post('/create', 'ProjectController@create')->middleware('auth');
  Route::post('/edit/{id}', 'ProjectController@edit')->middleware('auth');
  Route::get('/delete/{id}', 'ProjectController@delete')->middleware('auth');
  Route::get('/deleteImage/{id}/{img}', 'ProjectController@deleteImage')->middleware('auth');
});

Route::post('/contactupdate', 'CPController@change');

Route::post('/sendMessage', 'MessagesController@send');
