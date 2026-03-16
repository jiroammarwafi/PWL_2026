<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\PhotoController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index']);

Route::get ('/hello', [WelcomeController::class, 'hello']);

Route::get ('/world', function () {
    return 'World';
});

Route::get ('/about', [AboutController::class, 'about']);

Route::get ('/user/{name}', function ($name) {
    return 'Nama saya ' . $name;
});

Route::get ('/posts/{post}/comments/{comment}', function ($postId, $commentId) {
    return 'Post ke: ' . $postId . ', Comment ke: ' . $commentId;
});

Route::get ('/articles/{id}', [ArticleController::class, 'articles'])->where('id', '[0-9]+');

Route::get('/user/{name?}', function ($name = 'John') {
return 'Nama saya '.$name;
});

// Router untuk mengakses seluruh function yang ada dalam controller PhotoController
Route::resource('photos', PhotoController::class);

// Router untuk Limitasi akses hanya untuk function index dan show dalam controller PhotoController
Route::resource('photos', PhotoController::class)->only([
    'index', 'show'
]);

// Router untuk Limitasi akses untuk mengecualikan function create, store, update, dan destroy dalam controller PhotoController
Route::resource('photos', PhotoController::class)->except([
    'create', 'store', 'update', 'destroy'
]);
