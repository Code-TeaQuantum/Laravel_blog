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

Route::get('/', function () {
    return view('welcome');
});


Route::get('/posts/{p}', function ($slug) {
    $path = "../resources/posts/{$slug}.html";

    if (!file_exists($path)) {
        abort(404);
    }
    $post = file_get_contents($path);
    return $post; 
});
    