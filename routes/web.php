<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SessionController;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [SessionController::class, 'index']);
Route::get('/buat-session', [SessionController::class, 'buatSession']);
Route::get('/akses-session', [SessionController::class, 'aksesSession']);
Route::get('/hapus-session', [SessionController::class, 'hapusSession']);
Route::get('/flash-session', [SessionController::class, 'flashSession']);

