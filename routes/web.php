<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TicketController;
use App\Http\Controllers\ReportController;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::resource('tickets', TicketController::class);
Route::get('/reports', [ReportController::class, 'index'])->name('reports');