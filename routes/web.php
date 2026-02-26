<?php

use Illuminate\Support\Facades\Route;

Route::get('/hello', function () {
    return 'Hello World';
});

Route::get('/world', function () {
    return 'World';
});

Route::get('/', function () {
    return 'Selamat Datang';
});

Route::get('/about', function () {
    return 'NIM: 244107020122 | Nama: Farrelino Athaillah Ribera'; 
});


Route::get('/user/{name?}', function ($name='John') {
    return 'Nama saya '.$name;
});

Route::get('/posts/{post}/comments/{comment}', function ($postId, $commentId) {
    return 'Pos ke-'.$postId." Komentar ke-: ".$commentId;
});

Route::get('/articles/{id}', function ($id) {
    return "Halaman Artikel dengan ID " . $id;
});


Route::get('/user/profile', function () {
    return 'Ini adalah profil user';
})->name('profile');


Route::prefix('admin')->group(function () {
    Route::get('/user', function () {
        return 'Halaman Admin User';
    });
    Route::get('/post', function () {
        return 'Halaman Admin Post';
    });
    Route::get('/event', function () {
        return 'Halaman Admin Event';
    });
});

Route::redirect('/here', '/there');

Route::get('/there', function () {
    return 'Anda telah di-redirect ke sini!';
});


Route::view('/welcome', 'welcome');
Route::view('/welcome-farrel', 'welcome', ['name' => 'Farrelino']);