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

Route::get('/project', function () {
    return view('ktfui.project');
});

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

  Route::get('/home', 'HomeController@index');

  Route::get('/manageprojects', function(){
      return view('auth.manageProjects');
  })->middleware('auth');

  Route::get('/manageprojects2', function(){
      return view('auth.manageProjects2');
  })->middleware('auth');

  Route::get('/manageprojects3', 'CPController@showw')->middleware('auth');
});

Route::post('/contactupdate', 'CPController@change');
