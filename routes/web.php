<?php

use App\Http\Controllers\CallController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::resource('calls', CallController::class);

Route::get('/reports', [CallController::class, 'reports'])->name('reports');
