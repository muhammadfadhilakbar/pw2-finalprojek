<?php
use App\Http\Controllers\CarController;
use App\Http\Controllers\TypeController;
use App\Http\Controllers\LoanController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\MeController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('welcome');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::resource('/cars', CarController::class);
    Route::resource('/types', TypeController::class);
    Route::resource('/loans', LoanController::class);
    
});
Route::get('/products', [ProductController::class, 'index']);
Route::get('/mes', [MeController::class, 'index']);

require __DIR__.'/auth.php';
