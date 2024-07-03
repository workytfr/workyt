<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

use App\Http\Controllers\FicheController;

Route::get('/fiches/create', [FicheController::class, 'create'])->name('fiches.create');
Route::post('/fiches', [FicheController::class, 'store'])->name('fiches.store');
Route::get('/fiches/{id}', [FicheController::class, 'show'])->name('fiches.show');
Route::get('/{username}/fiches', [FicheController::class, 'userFiches'])->name('user.fiches');
Route::get('/fiches', [FicheController::class, 'index'])->name('fiches.index');
