<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home');
});

// Route::get('/posts', function () {
//     return view('posts');
// });

Route::get('posts', 'App\Http\Controllers\PostController@posts');
Route::get('layout', 'App\Http\Controllers\LayoutController@layout');