<?php

use App\Http\Controllers\HalamanController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/hello', function () {
//     return "hello world";
// });

Route::get('/', [HalamanController::class, "halamanPertama"]);
Route::get('/dua', [HalamanController::class, "halamanKedua"]);