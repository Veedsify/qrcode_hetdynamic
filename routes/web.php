<?php

use App\Http\Controllers\IndexController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/{username}', [IndexController::class, 'showProfile'])->name('showProfile');
