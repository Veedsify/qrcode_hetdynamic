<?php

use App\Http\Controllers\IndexController;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

Route::get('/', function () {
    return redirect('/henryezeribe');
})->name('home');

Route::get('/qr/{id}', function (Request $request, $id) {
    $user = User::find($id);

    if (!$user) {
        return redirect(route('home'));
    }

    $qrCode = QrCode::size(500)->generate(config('app.url') . '/' . $user->username);
    // create a jpeg file and store it in the public folder
    return view('qr',
        [
            'qrCode' => $qrCode,
            'user' => User::find($id),
        ]);
})->name('qr');

Route::get('/{username}', [IndexController::class, 'showProfile'])->name('showProfile');
Route::post('/contact/{userId}', [IndexController::class, 'contact'])->name('contact.sent');