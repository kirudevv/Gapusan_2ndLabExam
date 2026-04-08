<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BloodinventoryController;

Route::get('/', [BloodinventoryController::class, 'index'])->name('inventory.index');

Route::get('/inventory/create', [BloodinventoryController::class, 'create'])->name('inventory.create');
Route::post('/inventory', [BloodinventoryController::class, 'store'])->name('inventory.store');

Route::get('/inventory/{bloodinventory}', [BloodinventoryController::class, 'show'])->name('inventory.show');
Route::get('/inventory/{bloodinventory}/edit', [BloodinventoryController::class, 'edit'])->name('inventory.edit');
Route::put('/inventory/{bloodinventory}', [BloodinventoryController::class, 'update'])->name('inventory.update');
Route::delete('/inventory/{bloodinventory}', [BloodinventoryController::class, 'destroy'])->name('inventory.destroy');