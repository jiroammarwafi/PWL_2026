<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return ('Selamat Datang');
});

Route::get ('/hello', function () {
    return 'Hello world';
});

Route::get ('/world', function () {
    return 'World';
});

Route::get ('/about', function () {
    return 'NIM: 244107020190, Nama: Jiro Ammar Wafi';
});

Route::get ('/user/{name}', function ($name) {
    return 'Nama saya ' . $name;
});

Route::get ('/posts/{post}/comments/{comment}', function ($postId, $commentId) {
    return 'Post ke: ' . $postId . ', Comment ke: ' . $commentId;
});

Route::get ('/articles/{id}', function ($id) {
    return 'Halaman artikel dengan id: ' . $id;
})->where('id', '[0-9]+');

Route::get('/user/{name?}', function ($name = 'John') {
return 'Nama saya '.$name;
});
