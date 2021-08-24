<?php

use App\Models\Post;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

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
    return view('home', [
        "tittle" => "Home",
    ]);
});

Route::get('/about', function () {
    return view('about',  [
        "tittle" => "About",
        "name" => "Alfian Luthfi",
        "email" => "alfian@gmail.com",
        "image" => "scan_22460.jpg"
    ]);
});



Route::get('/posts', [PostController::class, 'index']);

//Single Post

Route::get('posts/{slug}', [PostController::class, 'show']);
