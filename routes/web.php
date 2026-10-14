<?php

use App\Http\Controllers\MusicalController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ReviewController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/about-us', function () {
    $company = 'Hogeschool Rotterdam';

    return view('about-us', [
        'company' => $company,
    ]);
})->name('about-us');

Route::view('/contact', 'contact');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::resource('musicals', MusicalController::class)->except(['index', 'show']);
    Route::post('/musicals/{musical}/reviews', [ReviewController::class, 'store'])
        ->name('musicals.reviews.store');

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::resource('musicals', MusicalController::class)->only(['index', 'show']);

require __DIR__.'/auth.php';
