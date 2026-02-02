<?php

use App\Http\Controllers\CommitController;
use App\Http\Controllers\JobController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;


Route::get('/',[JobController::class,'welcome'])->name('home');
Route::get('/about',[JobController::class,'about'])->name('about');
Route::get('/contact',[JobController::class,'contact'])->name('contact');
Route::get('/blog',[PostController::class,'index'])->name('posts');
Route::get('/blog/create',[PostController::class,'create']);
Route::get('/commit',[CommitController::class,'index'])->name('commit');
Route::get('/commit/create',[CommitController::class,'create']);
