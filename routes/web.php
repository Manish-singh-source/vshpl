<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegistrationController;

Route::prefix('/vshpl')->group(function () {
    Route::get('/', function () {
        return view('index');
    });

    Route::get('/admin', function () {
        $registrations = \App\Models\Registration::all();
        return view('dashboard', compact('registrations'));
    });

    Route::post('/register', [RegistrationController::class, 'store']);
});
