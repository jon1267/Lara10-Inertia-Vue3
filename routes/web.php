<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

//Route::get('/', function () {
//    return Inertia::render('Welcome');
//});
Route::get('/', [\App\Http\Controllers\TweetController::class, 'index'])->name('tweets.index');

require __DIR__.'/auth.php';
