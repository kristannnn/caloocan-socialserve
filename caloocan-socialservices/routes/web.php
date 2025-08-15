<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/', [HomeController::class, 'index'])->name('home');

// Service Routes
Route::get('/aics', [HomeController::class, 'aics'])->name('aics');
Route::get('/osca', [HomeController::class, 'osca'])->name('osca');
Route::get('/pdao', [HomeController::class, 'pdao'])->name('pdao');
Route::get('/solo-parent', [HomeController::class, 'soloParent'])->name('solo-parent');
Route::get('/livelihood', [HomeController::class, 'livelihood'])->name('livelihood');
