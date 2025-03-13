<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PhotoController;

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
    return 'Welcome';
});

Route::get('/hello', function () {
    return 'Hello';
});

Route::get('/world', function () {
    return 'World';
});

Route::get('/about', function () {
    return 'NIM: 2341760156, Name: Ilham';
});

// Route dengan parameter opsional
Route::get('/user/{name?}', function ($name = 'John') {
    return 'Nama saya ' . $name;
});

// Route dengan dua parameter untuk post dan komentar
Route::get('/posts/{post}/comments/{comment}', function ($postId, $commentId) {
    return 'Pos ke-' . $postId . '. Komentar ke-' . $commentId;
});

// Route dengan satu parameter untuk artikel
Route::get('/articles/{id}', function ($id) {
    return 'Article Page with ID ' . $id;
});

Route::get('/hello', [WelcomeController::class,'hello']);

Route::get('/', [PageController::class, 'index']);

// Route ke halaman "About"
Route::get('/about', [PageController::class, 'about']);

// Route ke halaman artikel dengan ID
Route::get('/articles', [PageController::class, 'articles']);


Route::resource('photos', PhotoController::class);

// Hanya rute index dan show
Route::resource('photos', PhotoController::class)->only(['index', 'show']);

// Atau, mengecualikan rute yang tidak diperlukan
Route::resource('photos', PhotoController::class)->except(['create', 'store', 'update', 'destroy']);

Route::get('/greeting', function () {
    return view('hello', ['name' => 'Andi']);
});



