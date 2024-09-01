<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\SesiController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [SesiController::class, 'index'])->middleware('guest')->name('home');
Route::post('/', [SesiController::class, 'login']);

Route::middleware(['auth'])->group(function () {
    Route::get('/admin', [AdminController::class, 'index']);
    Route::get('/admin/operator', [AdminController::class, 'operator'])->middleware('userAccess:operator');
    Route::get('/admin/keuangan', [AdminController::class, 'keuangan'])->middleware('userAccess:keuangan');
    Route::get('/admin/marketing', [AdminController::class, 'marketing'])->middleware('userAccess:marketing');
    Route::get('/logout', [SesiController::class, 'logout']);
});
