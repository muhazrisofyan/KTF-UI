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

Route::get('/ktfui', function () {
    return view('ktfui.index');
});

Route::get('/projects', 'ProjectController@showIndex');

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

  Route::match(['get', 'post'], 'register', function(){
    return redirect('/radhasarisha/login');
  });

  Route::get('/home', 'HomeController@index')->middleware('auth');

  Route::get('/createProject', function(){
      return view('auth.createProject');
  })->middleware('auth');

  Route::get('/manageProjects', 'ProjectController@show')->middleware('auth');

  Route::get('/manageprojects3', 'CPController@showw')->middleware('auth');

  Route::get('/editProject/{id}', 'ProjectController@showId');
});


Route::prefix('project')->group(function(){
  Route::post('/create', 'ProjectController@create')->middleware('auth');
  Route::post('/edit/{id}', 'ProjectController@edit')->middleware('auth');
  Route::get('/delete/{id}', 'ProjectController@delete')->middleware('auth');
});

Route::post('/contactupdate', 'CPController@change');
