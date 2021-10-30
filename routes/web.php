<?php

use App\Http\Controllers\BlogBlogersController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', HomeController::class )->name("home");
Route::prefix('blogy')->group(function(){
    Route::get('/', [BlogController::class, "index"] )->name("blogs.index");
    Route::get('/novy', [BlogController::class, "create"] )->name("blogs.create");
    Route::post('/novy', [BlogController::class, "store"] )->name("blogs.store");
});
Route::get('/blogeri', BlogBlogersController::class )->name("blogers");
