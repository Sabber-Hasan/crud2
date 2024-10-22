<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', [ProfileController::class,'index'])->name('home');
Route::resource('/profile', ProfileController::class);