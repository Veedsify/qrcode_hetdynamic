<?php

use App\Http\Controllers\IndexController;
use GuzzleHttp\Psr7\Request;
use SimpleSoftwareIO\QrCode\Facades\QrCode;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/qr/{link}', function ($link) {
   return QrCode::size(300)->generate($link);
});

Route::get('/{username}', [IndexController::class, 'showProfile'])->name('showProfile');


