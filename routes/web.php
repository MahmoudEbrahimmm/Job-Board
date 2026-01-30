<?php

use App\Http\Controllers\JobController;
use Illuminate\Support\Facades\Route;

Route::get('/',[JobController::class,'welcome'])->name('home');
Route::get('/about',[JobController::class,'about'])->name('about');
Route::get('/contact',[JobController::class,'contact'])->name('contact');
