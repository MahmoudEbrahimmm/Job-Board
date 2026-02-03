<?php

use App\Http\Controllers\CommitController;
use App\Http\Controllers\JobController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\TagController;
use Illuminate\Support\Facades\Route;


Route::get('/',[JobController::class,'welcome'])->name('home');
Route::get('/about',[JobController::class,'about'])->name('about');
Route::get('/contact',[JobController::class,'contact'])->name('contact');

Route::resource('posts', PostController::class);

Route::resource('commit', CommitController::class);

Route::resource('tags', TagController::class);
