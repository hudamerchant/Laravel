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

Route::resource('/task', 'TasksController');
// Route::patch('/task', 'TasksController@update');
// Route::post('/task/create', 'TasksController@create');

Route::get('/', 'TasksController@index');
// Route::get('/task', 'TaskController@index');
// Route::post('/task', 'TaskController@index');
// Route::post('/task/addTask', 'TaskController@addTask');

// Route::get('/about', function () {
//     return view('About');
// });
// Route::get('/contact', function () {
//     return view('Contact');
// });
