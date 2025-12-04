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

Route::get('/devices', [HomeController::class, 'displayDevices'])
    ->middleware(['auth', 'verified'])
    ->name('devices');

Route::get('/repairs', [HomeController::class, 'displayRepairs'])
    ->middleware(['auth', 'verified'])
    ->name('repairs');

Route::get('/loans', [HomeController::class, 'displayLoans'])
    ->middleware(['auth', 'verified'])
    ->name('loans');

Route::get('/devices/manage', [DeviceController::class, 'index'])
    ->middleware(['auth', 'verified', 'password.confirm'])
    ->name('devices.manage');

Route::get('/devices/add', [DeviceController::class, 'addForm'])
    ->middleware(['auth', 'verified'])
    ->name('devices.add');

Route::get('/devices/{device}', [DeviceController::class, 'show'])
    ->middleware(['auth', 'verified'])
    ->name('devices.show');

Route::get('/devices/{device}/edit', [DeviceController::class, 'editForm'])
    ->middleware(['auth', 'verified'])
    ->name('devices.edit');

Route::get('/devices/{device}/delete', [DeviceController::class, 'deleteForm'])
    ->middleware(['auth', 'verified'])
    ->name('devices.delete');

Route::get('/devices/delete/all', [DeviceController::class, 'deleteAll'])
    ->middleware(['auth', 'verified'])
    ->name('devices.delete.all');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
