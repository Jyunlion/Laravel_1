<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AlbumController;

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

// 4.
Route::get('/blog/index', function () {
      return view('pages.blog_index');
});

Route::get('/blog/album', function () {
      return view('pages.blog_album');
});


// 3.
// Route::get('/profile', function () {
//       return view('profile', ['name' => '陳俊廷']);
// });


// 2.
// Route::get('/', [AlbumController::class, 'index']);

// Route::get('/album/{id}', [AlbumController::class, 'showAlbumFromID']);


// 1.
// Route::get('/', function () {
//       return view('welcome');
// });