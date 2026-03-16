<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\WelcomeController;
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
