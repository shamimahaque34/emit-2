<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\PageController;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/page/{slug}', [PageController::class, 'showPage'])->name('page.show');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {

        return view('backend.dashboard.dashboard');
    })->name('dashboard');

    Route::resource('menus', MenuController::class);
    Route::resource('pages', PageController::class);

});
