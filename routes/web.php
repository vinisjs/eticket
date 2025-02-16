<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.index');
});
Route::get('dashboard', function () {
    return view('pages.dashboard');
});

// rotas para teste das páginas
Route::get('indexUser', function () {
    return view('pages.indexUser');
});
Route::get('app', function () {
    return view('pages.app');
});