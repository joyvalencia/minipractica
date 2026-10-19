<?php

use App\Http\Controllers\ArtistaController;
use App\Http\Controllers\ConcertController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect()->route('artistes.index');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {

    // Rutes dels artistes
    Route::get('/artistes', [ArtistaController::class, 'index'])->name('artistes.index');
    Route::get('/artistes/create', [ArtistaController::class, 'create'])->name('artistes.create');
    Route::post('/artistes', [ArtistaController::class, 'store'])->name('artistes.store');
    Route::get('/artistes/{artista}', [ArtistaController::class, 'show'])->name('artistes.show');
    Route::get('/artistes/{artista}/edit', [ArtistaController::class, 'edit'])->name('artistes.edit');
    Route::put('/artistes/{artista}', [ArtistaController::class, 'update'])->name('artistes.update');
    Route::delete('/artistes/{artista}', [ArtistaController::class, 'destroy'])->name('artistes.destroy');

    // Rutes dels concerts
    Route::get('/concerts', [ConcertController::class, 'index'])->name('concerts.index');
    Route::get('/concerts/create', [ConcertController::class, 'create'])->name('concerts.create');
    Route::post('/concerts', [ConcertController::class, 'store'])->name('concerts.store');
    Route::get('/concerts/{concert}', [ConcertController::class, 'show'])->name('concerts.show');

    // Perfil d'usuari (Breeze)
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

});

require __DIR__.'/auth.php';
