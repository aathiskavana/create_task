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

<<<<<<< HEAD

=======
>>>>>>> 3c8d9946949b730dc23f912c7ffd2698f6ad189e
Auth::routes();

Route::get('/', 'HomeController@index')->name('home');

<<<<<<< HEAD
Route::resource('/tasks', 'TasksController');
=======
Route::resource('/tasks', 'TaskController');

//Route::get('/tasks', function () {
//	return view('task');
//})->name('task');
>>>>>>> 3c8d9946949b730dc23f912c7ffd2698f6ad189e
