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

    Route::get('/vendor-register', function () {
        return view('vendor-register');
    });

    Route::post('/register', [RegistrationController::class, 'store']);
    Route::put('/update-payment/{id}', [RegistrationController::class, 'updatePayment']);
    Route::delete('/delete/{id}', [RegistrationController::class, 'destroy']);
});
