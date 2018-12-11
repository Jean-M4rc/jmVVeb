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

Route::get('/', function(){
    return view('welcome');
})->name('welcome');

Auth::routes(['verify' => true],'ProjectController@index');

Route::get('/home', 'HomeController@index')->name('home')->middleware('verified');;

Route::middleware('admin')->group(function () {
    Route::resource ('project', 'ProjectController', [
        'except' => 'show'
    ]);
});

Route::name('project')->get('projects/{slug}', 'ProjectController@showBySlug');
