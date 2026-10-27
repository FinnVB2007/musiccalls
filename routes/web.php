<?php

use App\Http\Controllers\MusicalController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ReviewController;
use App\Models\Musical;
use App\Models\Review;
use Illuminate\Http\Request;
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

Route::get('/dashboard', function (Request $request) {
    $user = $request->user();
    $musicals = $user->is_admin
        ? Musical::query()->with(['genre', 'user'])->latest()->paginate(5, ['*'], 'musicalsPage')
        : $user->musicals()->with('genre')->latest()->paginate(5, ['*'], 'musicalsPage');
    $reviews = $user->is_admin
        ? Review::query()->with(['musical', 'user'])->latest()->paginate(5, ['*'], 'reviewsPage')
        : $user->reviews()->with(['musical', 'user'])->latest()->paginate(5, ['*'], 'reviewsPage');

    return view('dashboard', [
        'musicals' => $musicals,
        'reviews' => $reviews,
    ]);
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::resource('musicals', MusicalController::class)->except(['index', 'show']);
    Route::patch('/musicals/{musical}/visibility', [MusicalController::class, 'toggleVisibility'])
        ->name('musicals.visibility.update');
    Route::post('/musicals/{musical}/reviews', [ReviewController::class, 'store'])
        ->name('musicals.reviews.store');
    Route::resource('reviews', ReviewController::class)->only(['edit', 'update', 'destroy']);

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::resource('musicals', MusicalController::class)->only(['index', 'show']);

require __DIR__.'/auth.php';
