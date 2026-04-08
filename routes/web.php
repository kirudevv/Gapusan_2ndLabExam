<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BloodinventoryController;

Route::get('/', function () {
    return view('inventory');
});

Route::resource('bloodinventories', BloodinventoryController::class);
