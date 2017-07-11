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

Route::get('/achievement', function () {
    return view('ktfui.achievement');
});

Route::get('/services', function () {
    return view('ktfui.services');
});

Route::get('/contact', function () {
    return view('ktfui.contact');
});

Route::get('/post', function () {
    return view('ktfui.post');
});

Route::get('/contact', function(){
    return view('ktfui.contact');
});

Route::get('/download', 'Controller@getDownload');

Route::prefix('radhasarisha')->group(function(){
  Auth::routes();

  Route::get('/home', 'HomeController@index');

  Route::get('/manageprojects', function(){
      return view('auth.manageProjects');
  })->middleware('auth');
});
