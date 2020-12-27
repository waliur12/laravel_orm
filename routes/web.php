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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('create/user','UserController@store');
Route::get('create/post','PostController@store');
Route::get('create/comment','CommentController@store');
Route::get('get/post','UserController@getPost');
Route::get('get/user','PostController@getUser');
Route::get('get/comment','PostController@getComments');