<?php

use App\Http\Controllers\DeviceController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/', [HomeController::class, 'index'])
    ->middleware(['auth', 'verified'])
    ->name('home');

Route::get('/administration', [HomeController::class, 'displayAdmin'])
    ->middleware(['auth', 'verified'])
    ->name('admin');

Route::get('/appareils', [HomeController::class, 'displayDevices'])
    ->middleware(['auth', 'verified', 'admin'])
    ->name('devices');

Route::get('/réparations', [HomeController::class, 'displayRepairs'])
    ->middleware(['auth', 'verified'])
    ->name('repairs');

Route::get('/prêts', [HomeController::class, 'displayLoans'])
    ->middleware(['auth', 'verified', 'admin'])
    ->name('loans');

Route::get('/appareils/gérer', [DeviceController::class, 'index'])
    ->middleware(['auth', 'verified', 'admin'])
    ->name('devices.manage');

Route::get('/appareils/ajouter', [DeviceController::class, 'addForm'])
    ->middleware(['auth', 'verified', 'admin'])
    ->name('devices.add');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
