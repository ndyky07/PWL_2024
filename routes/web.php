<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/hello', function () {
    return 'Hello World';
});

Route::get('/world', function () {
    return 'World';
});

Route::get('/selamat datang', function () {
    return 'Selamat Datang';
});

Route::get('/about', function () {
    return '2341760026_INDI WARDA RAMADHANI';
});

Route::get('/user/{name}', function ($name) {
    return 'Nama Saya ' .$name;
});

Route::get('/posts/{post}/comments/{comment}', function ($postId, $commentId) {
    return 'Pos ke-'.$postId." Komentar ke-: ".$commentId;
});

Route::get('/articels/{id}', function ($Id): string {
    return 'Halaman Artikel dengan ID_'.$Id;
});
